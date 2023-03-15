<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

       
        Order::factory()->create();
        
            return [
                'quantity' => fake()->numberBetween(1, 10),
                'price' => $product->price,
                'status' => fake()->randomElement(['pending', 'shipped', 'delivered']),
                'buyer_id' => function () {
                    return factory(App\Models\Buyer::class)->create()->id;
                },
                'product_id' => $product->id,
            ];
        
    }
}
