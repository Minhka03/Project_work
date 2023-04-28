<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->float('price', 10 ,2);
            $table->integer('quantity');
            $table->integer('totalPrice')->nullable();
            $table->integer('id_pro')->unsigned();
            $table->integer('id_cus')->unsigned();
            $table->foreign('id_pro')->references('id')->on('products');
            $table->foreign('id_cus')->references('id')->on('customers');
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
        Schema::dropIfExists('carts');
    }
};
