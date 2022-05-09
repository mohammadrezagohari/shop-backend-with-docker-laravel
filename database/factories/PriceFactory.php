<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => rand(100000,5000000),
            'discount' => rand(1000,50000),
            'amount_show' => true,
        ];
    }
}
