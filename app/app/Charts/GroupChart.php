<?php

declare(strict_types = 1);

namespace App\Charts;

use App\Group;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupChart extends BaseChart {
    private $months = [
        'JAN',
        'FEV',
        'MAR',
        'ABR',
        'MAI',
        'JUN',
        'JUL',
        'AGO',
        'SET',
        'OUT',
        'NOV',
        'DEZ',
    ];

    public function handler(Request $request): Chartisan {
        $chartBuilder = Chartisan::build()
            ->labels($this->months);

        if ($request->has('group_id')) {
            $dados = $this->getAggregatedDataByYearAndGroupId(intval($request->get('year')), intval($request->get('group_id')));

            $chartBuilder
                ->dataset('Metas', array_map(function ($item) {
                    return $item->limit;
                }, $dados))
                ->dataset('Movimentações', array_map(function ($item) {
                    return $item->total;
                }, $dados))
            ;
        } else {
            $dados = $this->getAggregatedDataByYear(intval($request->get('year')));

            $chartBuilder->dataset('Movimentações', array_map(function ($item) {
                    return $item->total;
                }, $dados));
        }

        return $chartBuilder;
    }

    private function getAggregatedDataByYearAndGroupId($year, $groupId) {
        return DB::select('
            select a.total, l.limit
            from (
                select 1 month union all
                select 2 union all
                select 3 union all
                select 4 union all
                select 5 union all
                select 6 union all
                select 7 union all
                select 8 union all
                select 9 union all
                select 10 union all
                select 11 union all
                select 12
            ) m
            left join aggregations a on m.month = month(a.at)
            left join goals l on l.group_id = a.group_id
            where year(a.at) = ?
            and a.group_id = ?
            order by a.at asc
        ', [
            $year,
            $groupId
        ]);
    }

    private function getAggregatedDataByYear($year) {
        return DB::select('
            select sum(a.total) total
            from (
                select 1 month union all
                select 2 union all
                select 3 union all
                select 4 union all
                select 5 union all
                select 6 union all
                select 7 union all
                select 8 union all
                select 9 union all
                select 10 union all
                select 11 union all
                select 12
            ) m
            left join aggregations a on m.month = month(a.at)
            left join `groups` g on a.group_id = g.id
            where year(a.at) = ?
            and g.group_id is null
            group by m.month
            order by m.month asc
        ', [
            $year
        ]);
    }
}
