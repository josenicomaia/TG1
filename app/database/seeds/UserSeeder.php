<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
            'name' => 'Admin',
            'email' => 'admin@mfinformatica.com.br',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
        ]);

        $user->save();
    }
}
