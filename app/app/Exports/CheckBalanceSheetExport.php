<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\BeforeSheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class CheckBalanceSheetExport implements FromView, ShouldAutoSize, WithStrictNullComparison, WithStyles, WithEvents {
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

    private $year;
    private $groups;
    private $summedEntryWithKeys;

    public function __construct($year, $groups, $summedEntryWithKeys) {
        $this->year = $year;
        $this->groups = $groups;
        $this->summedEntryWithKeys = $summedEntryWithKeys;
    }

    public function view(): View {
        return view('exports.check-balance-sheet', [
            'year' => $this->year,
            'months' => $this->months,
            'groups' => $this->groups,
            'summedEntryWithKeys' => $this->summedEntryWithKeys,
        ]);
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1')
            ->getAlignment()
            ->setHorizontal('center')
            ->setVertical('center');

        $sheet->getStyle('A1')
            ->getFont()
            ->setBold(true);

        $sheet->getStyle('C1')
            ->getAlignment()
            ->setHorizontal('center')
            ->setVertical('center');
    }

    public function registerEvents(): array {
        return [
            BeforeSheet::class => function (BeforeSheet $event) {
                /* @var Worksheet $sheet */
                $sheet = $event->getDelegate();

                $sheet->getStyle('A1:N' . (count($this->groups) + 2))
                    ->getFill()
                    ->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()
                    ->setARGB('FFB4C6E7');

                $sheet->getStyle('C3:N' . (count($this->groups) + 2))
                    ->getNumberFormat()
                    ->setFormatCode('"R$ "#,##0.00_-');

                $positions = [];

                foreach ($this->groups as $k => $group) {
                    if (!$group->group) {
                        $positions[] = $k + 3;
                    }
                }

                foreach ($positions as $position) {
                    $sheet->getStyle("A{$position}:N{$position}")
                        ->getFill()
                        ->setFillType(Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('FF44546A');

                    $sheet->getStyle("A{$position}:N{$position}")
                        ->getFont()
                        ->getColor()
                        ->setARGB('FFFFFFFF');
                }

                $sheet->getStyle('A1:N' . (count($this->groups) + 2))
                    ->getBorders()
                    ->getAllBorders()
                    ->setBorderStyle(Border::BORDER_THICK)
                    ->getColor()
                    ->setARGB('FFFFFFFF');
            }
        ];
    }
}
