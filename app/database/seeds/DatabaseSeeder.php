<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(InitialChartOfAccountsSeeder::class);
        $this->call(InitialCheckBalanceSheetSeeder::class);
    }
}
