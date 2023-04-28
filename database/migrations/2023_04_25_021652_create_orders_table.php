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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();    
            $table->string('address')->nullable();
            $table->string('order_note')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('cus_id')->unsigned();
            $table->tinyInteger('status')->default('0');
            $table->string('token' , 255)->nullable();
            $table->foreign('cus_id')->references('id')->on('customers');
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
        Schema::dropIfExists('orders');
    }
};
