<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_product', function (Blueprint $table) {
            $table->tinyInteger('count');
            $table->unsignedBigInteger('basket_id')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('basket_id')->on('baskets')->references('id')->cascadeOnDelete();
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_product');
    }
}
