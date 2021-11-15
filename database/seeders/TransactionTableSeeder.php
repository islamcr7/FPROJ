<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Transaction;
use App\Models\Currency;
use App\Models\Atm;
use App\Models\BankAccount;


class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     **
     * @return void
     */
    public function run()
    {

        $transaction= Transaction::factory()->count(50)->create();

    }
}

