<?php

namespace App\Http\Controllers;

use App\Exports\CheckBalanceSheetExport;
use App\Repositories\GroupRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel;

class ReportsController extends Controller {
    private Excel $excel;
    private GroupRepository $groupRepository;

    public function __construct(Excel $excel, GroupRepository $groupRepository) {
        $this->excel = $excel;
        $this->groupRepository = $groupRepository;
    }

    public function checkBalanceSheet(Request $request) {
        if (!$request->has('year')) {
            return view('reports.check_balance_sheet');
        }

        $year = $request->get('year');
        $groups = $this->groupRepository->getFlatTree();

        $summedEntries = DB::select('
            select a.group_id,
                   month(a.at) month,
                   a.total
            from aggregations a
            where year(a.at) = ?
        ', [
            intval($request->get('year'))
        ]);

        $summedEntryWithKeys = [];

        foreach ($summedEntries as $summedEntry) {
            $summedEntryWithKeys[$summedEntry->group_id][$summedEntry->month] = $summedEntry->total;
        }

        return $this->excel->download(
                new CheckBalanceSheetExport($year, $groups, $summedEntryWithKeys),
                'check_balance_sheet.xlsx',
                Excel::XLSX);
    }

    public function amountPerGroup(Request $request) {
        if (!$request->has('year')) {
            return view('reports.get_amount_per_group');
        }

        if ($request->has('group_id')) {
            $group = $this->groupRepository->getGroupWithTree($request->get('group_id'));
            $title = $group->getFullDescription();
            $groups = $group->children;
        } else {
            $title = 'TODAS CATEGORIAS';
            $groups = $this->groupRepository->getTree();
        }

        return view('reports.post_amount_per_group', [
            'year' => $request->get('year'),
            'title' => $title,
            'groups' => $groups
        ]);
    }
}
