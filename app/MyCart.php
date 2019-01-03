<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCart extends Model
{
    protected $fillable =[
    	'user_id','name','quantity','size','price','grand_total'];

    	protected $table = "carts";

    	public $timestamps = false;
}
