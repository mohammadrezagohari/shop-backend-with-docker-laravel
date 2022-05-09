<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_product', function (Blueprint $table) {
            $table->string('card_id',36)->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('card_id')->on('cards')->references('id');
            $table->foreign('product_id')->on('products')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_product');
    }
}
