<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('buyer_id');
        $table->unsignedBigInteger('product_id');
        $table->integer('quantity');
        $table->decimal('price', 10, 2);
        $table->enum('status', ['pending', 'shipped', 'delivered'])->default('pending');
        $table->timestamps();

        $table->foreign('buyer_id')->references('id')->on('buyers');
        $table->foreign('product_id')->references('id')->on('products');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
