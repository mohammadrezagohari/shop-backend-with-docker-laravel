<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->string('email')->index();
            $table->string('mobile', 11)->index();
            $table->unsignedBigInteger('price');
            $table->tinyInteger('count_custom');
            $table->boolean('status');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->on("users")->references('id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
