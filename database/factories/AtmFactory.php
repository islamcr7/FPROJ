<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Atm;
class AtmFactory extends Factory
{
    /**
     * Define the model's default state.
     **
     * @return array
     */

    protected $model = Atm::class;

    public function definition()
    {
        return [
            'ATMCode'  => $this->faker->unique()->name(),
            'Description'  => $this->faker->realText(180),
            'Location' => $this->faker->randomNumber(),
            'Active'  => $this->faker->boolean(),
        
        ];
    }
}
