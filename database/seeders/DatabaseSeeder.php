<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Seller;
use App\Models\Product;
use App\Models\Buyer;
use App\Models\Order;
use DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Reset the auto-incrementing ID counters for all tables
        Schema::disableForeignKeyConstraints();

        DB::table('sellers')->truncate();
        DB::table('products')->truncate();
        DB::table('buyers')->truncate();
        DB::table('orders')->truncate();

        Schema::enableForeignKeyConstraints();

        // Create 10 sellers with 3 products each
        Seller::factory()
            ->count(10)
            ->has(Product::factory()->count(3))
            ->create();

        // Create 50 buyers
        Buyer::factory()
            ->count(50)
            ->create();

        // Create 100 orders with random products and buyers
        Order::factory()
            ->count(100)
            ->create();
    }
}
