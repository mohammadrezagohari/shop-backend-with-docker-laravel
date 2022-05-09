<?php

namespace Database\Seeders;

use App\Models\Detail;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory()
            ->has(Detail::factory()->count(3))
            ->has(Price::factory()->count(1))
            ->count(50)
            ->create();
    }
}
