<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyProduct extends Model
{
    protected $fillable =[
    	'name','quantity','size'.'prize','image','description'];

    	protected $table = "products";

    	public $timestamps = false;
}
