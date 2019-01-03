<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
           $table->string('user_id');
             $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->integer('grand_total');
            $table->integer('number');
           
             $table->string('order_status');
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
}
