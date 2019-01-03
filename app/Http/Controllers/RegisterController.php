<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
 use DB;

 use Redirect;
 
class RegisterController extends Controller
{
      
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users'
        ]);

        $user_id = $request->user_id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $number = $request->number;
        $address = $request->address;
        $type = "customer";
        $city=$request->city;
        $state=$request->state;
        $pincode=$request->pincode;
        $landmark=$request->landmark;
        


        $user = new User();
        $user->name = $name;
        $user->user_id-$user_id;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->number = $number;
        $user->address = $address;
        $user->city = $city;
        $user->state = $state;
        $user->pincode = $pincode;
        $user->type = $type;
        $user->landmark=$landmark;
        $user->save();

        \Session::flash('success','Register successfully');
        return Redirect::route('login');
            

    }

}
