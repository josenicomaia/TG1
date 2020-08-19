<?php

namespace App\Http\Controllers;

use App\Exports\CheckBalanceSheetExport;
use App\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;

class ReportsController extends Controller {
    private Excel $excel;

    public function __construct(Excel $excel) {
        $this->excel = $excel;
    }

    public function checkBalanceSheet() {
        $year = 2019;
        $groups = Group::getFlatTree();

        $summedEntries = DB::table('entries')
            ->select(
                DB::raw('year(at) year, month(at) month, entries.group_id group_id, groups.group_id parent_id, sum(amount) total')
            )
            ->join('groups', 'groups.id', '=', 'entries.group_id')
            ->whereRaw('year(at) = ?', [2019])
            ->groupBy([
                'year',
                'month',
                'group_id',
                'parent_id'
            ])
            ->get();

        $summedEntryWithKeys = [];

        foreach ($summedEntries as $summedEntry) {
            if ($summedEntry->parent_id) {
                if (@$summedEntryWithKeys[$summedEntry->year][$summedEntry->month][$summedEntry->parent_id]) {
                    $summedEntryWithKeys[$summedEntry->year][$summedEntry->month][$summedEntry->parent_id] += $summedEntry->total;
                } else {
                    $summedEntryWithKeys[$summedEntry->year][$summedEntry->month][$summedEntry->parent_id] = $summedEntry->total;
                }
            }

            $summedEntryWithKeys[$summedEntry->year][$summedEntry->month][$summedEntry->group_id] = $summedEntry->total;
        }

        return $this->excel->download(
                new CheckBalanceSheetExport($year, $groups, $summedEntryWithKeys),
                'check_balance_sheet.xlsx',
                Excel::XLSX);
    }

    public function amountPerGroup(Request $request) {
        $groups = Group::getTree();

        return view('reports.amount_per_group', [
            'year' => 2019,
            'groups' => $groups
        ]);
    }
}
