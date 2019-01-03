<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carts extends Migration
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
             $table->integer('user_id')->unsigned();
             $table->string('product_name');
            $table->integer('quantity');
             $table->string('size');
            $table->string('price');
            $table->string('image');
            $table->string('grand_total');
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
}
