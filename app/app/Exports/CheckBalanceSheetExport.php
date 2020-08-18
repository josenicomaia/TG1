<?php

namespace App\Exports;

use App\Group;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CheckBalanceSheetExport implements FromView, ShouldAutoSize, WithStrictNullComparison, WithStyles {
    use Exportable;

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

    public function view(): View {
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

        return view('exports.checkBalanceSheet', [
            'year' => 2019,
            'months' => $this->months,
            'groups' => $groups,
            'summedEntryWithKeys' => $summedEntryWithKeys,
        ]);
    }

    public function styles(Worksheet $sheet) {
        return [
            'A1' => [
                'alignment' => [
                    'horizontal' => 'center',
                    'vertical' => 'center',
                ]
            ],
            'C1' => [
                'alignment' => [
                    'horizontal' => 'center',
                    'vertical' => 'center',
                ]
            ],
            '1' => [
                'font' => ['bold' => true]
            ],
            '2' => [
                'font' => ['bold' => true]
            ],
            'A' => [
                'font' => ['bold' => true]
            ],
            'B' => [
                'font' => ['bold' => true]
            ]
        ];
    }
}
