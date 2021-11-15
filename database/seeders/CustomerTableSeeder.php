<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Models\BankAccount;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     **
     * @return void
     */
    public function run()
    {
        $customers= Customer::factory()->count(50)->create();
    }
}
