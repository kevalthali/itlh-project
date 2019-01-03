<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
     protected $fillable =[
    	'user_id','name','address','city','state','pincode','grand_total','number','order_status',];

    	protected $table = "order";

    	public $timestamps = false;
}
