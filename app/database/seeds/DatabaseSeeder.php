<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run() {
        $this->call(InitialChartOfAccountsSeeder::class);
        $this->command->info('Groups table seeded.');

        $this->call(InitialCheckBalanceSheetSeeder::class);
        $this->command->info('Entries table seeded.');
    }
}
