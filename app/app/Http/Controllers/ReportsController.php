<?php

namespace App\Http\Controllers;

use App\Exports\CheckBalanceSheetExport;
use App\Group;
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

    public function postCheckBalanceSheet() {
        $year = 2019;
        $groups = $this->groupRepository->getFlatTree();

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

    public function getAmountPerGroup(Request $request) {
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
