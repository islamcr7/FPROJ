<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(class: CustomerTableSeeder::class);
        $this->call(class: TransactionTableSeeder::class);
        $this->call(class: CustomerTableSeeder::class);
        $this->call(class: TransactionTableSeeder::class);
        $this->call(class: AtmTableSeeder::class);
    }
}
