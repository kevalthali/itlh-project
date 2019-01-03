<?php

namespace App;
use App\User;
 use DB;
 
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
     protected $fillable = [
        'name', 'email', 'password','number','address','city','state','pincode',
        'landmark',
    ];

 protected $hidden = [
        'password', 'remember_token',
    ];
}
