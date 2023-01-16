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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->timestamps();
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->foreign('order_id')->references('id')->on('shop_carts')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->foreign('user_id')->references('user_id')->on('shop_carts')
                ->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('transactions', function(Blueprint $table){
            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
