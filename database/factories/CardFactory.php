<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'=>$this->faker->email,
            'mobile'=>"09".rand(111000000,919999900),
            'price'=>rand(100000,99000000),
            'status'=>rand(0,1),
            'count_custom'=>rand(1,10),
        ];
    }
}
