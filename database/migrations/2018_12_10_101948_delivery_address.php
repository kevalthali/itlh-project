<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeliveryAddress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_address', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('name');
            $table->string('user_email')->unique();
            $table->integer('number');
            $table->string('password');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->string('type');
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
           Schema::dropIfExists('delivery_address');
    }
}
