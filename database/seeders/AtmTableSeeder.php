<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Atm;

class AtmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atms= Atm::factory()->count(26)->create();
    }
}
