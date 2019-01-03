<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    protected $fillable = [
       'user_id', 'name', 'user_email', 'password','address','city','number','state','pincode'
    ];
}
