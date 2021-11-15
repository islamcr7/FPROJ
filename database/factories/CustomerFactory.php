<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\carbon;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     **
     * @return array
     */

    protected $model = Customer::class;


    public function definition()
    {
        return [
            'Name' =>  $this->faker->name(),
            'Surname' =>  $this->faker->name(),
            'BirthDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        ];
    }
}
