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
        return Chartisan::build()
            ->labels($this->months)
            ->dataset('', array_map(function ($item) {
                return $item->total;
            }, DB::select('
                select sum(e.amount) total
                from entries e
                left join (
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
                ) m on m.month = month(e.at)
                where year(e.at) = ?
                and e.group_id = ?
                group by month(e.at)
            ', [
                intval($request->get('year')),
                intval($request->get('group_id'))
            ])));
    }
}