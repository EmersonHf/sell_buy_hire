<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\Seller;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
            return [
                'name' => fake()->sentence(3),
                'price' => fake()->randomFloat(2, 10, 1000),
                'description' => fake()->paragraph,
                'seller_id' => function () {
                    return factory(Seller::class)->create()->id;
                },
            ];
   
    }
}
