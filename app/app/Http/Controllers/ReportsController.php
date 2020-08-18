<?php

namespace App\Http\Controllers;

use App\Exports\CheckBalanceSheetExport;
use Maatwebsite\Excel\Excel;

class ReportsController extends Controller {
    private Excel $excel;

    public function __construct(Excel $excel) {
        $this->excel = $excel;
    }

    public function checkBalanceSheet() {
        return $this->excel->download(new CheckBalanceSheetExport(), 'check_balance_sheet.xlsx', Excel::XLSX);
    }
}
