<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankAccountableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     **
     * @return void
     */
    public function run()
    {
        $currency= BankAccount::factory()->count(50)->create();
    }
}
