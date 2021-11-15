<?php

namespace Database\Factories;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     **
     * @return array
     */
    
    protected $model = Currency::class;

    public function definition()
    {
        return [
            'Description'  => $this->faker->unique()->name(),
        ];
    }
}
