<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\MyProduct;
class LoginController extends Controller
{


public function showProduct()
{
    return view('listofproducts');
}

public function undandy()
{
     $shoes = MyProduct::all();

        return view('undandy')->with (['shoes'=>$shoes]);
}



public function login(Request $request)
{    

    $email = $request['email'];
    $password =$request['password'];
    
    if (Auth::attempt(['email'=>$email,'password'=>$password]))
    {
        if (Auth::user()->type=='admin')
        {
            return redirect()->route('showProduct');
        }
        else if(Auth::user()->type=='customer')
        {
            return redirect()->route('undandy');
        }
        else
        {
            \Session()->flash('alert-danger','Invalid username or password');
            return redirect()->route('login');

        }
    }
    else
    {
        \Session()->flash('alert-danger','Invalid username or password');
       
        return redirect()->back();
    }
}

public function logout()
{
    Auth::logout();
    return redirect()->route('login');
}



}
