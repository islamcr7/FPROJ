<?php

namespace Database\Factories;

use App\Models\BankAccount;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\carbon;

class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = BankAccount::class;
    public function definition()
    {
        return [
            'Description'    => $this->faker->text(),
            'OpenDate'    =>  $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'Code'      => $this->faker->realText(180),
            'CardNumber'  => $this->faker->randomNumber(),
            'PIN'       => $this->faker->randomNumber(),
            'customer_id' => Customer::factory(),
        ];
    }
}
