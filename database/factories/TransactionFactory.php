<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Transaction;
use App\Models\Atm;
use App\Models\Currency;
use App\Models\BankAccount;
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     **
     * @return array
     */
  
     
    protected $model = Transaction::class;
    public function definition()
    {
        $arrayValues = ['IN', 'OUT'];
        return [
            'Description' =>  $this->faker->realtext(25),
            'Code'=>  $this->faker->realtext(25),
            'Amount' =>  $this->faker->randomNumber(),
            'TransactionDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'InOut' =>  $arrayValues[rand(0,1)],
            'BankAccount_id' =>  BankAccount::factory()->hascustomers(1)->create(), 
            'Atm_id' => Atm::factory(), 
            'Currency_id' =>  Currency::factory(), 
        ];
    }
}
