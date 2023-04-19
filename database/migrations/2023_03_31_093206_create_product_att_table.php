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
        Schema::create('product_att', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pro')->unsigned();
            $table->integer('id_att')->unsigned(); 
            $table->foreign('id_pro')->references('id')->on('products');
            $table->foreign('id_att')->references('id')->on('attributes');
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
        Schema::dropIfExists('product_att');
    }
};
