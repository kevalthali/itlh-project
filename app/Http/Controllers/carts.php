<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyCart;

use Auth;

use App\User;

class carts extends Controller
{
    public function addcarts(Request $request)
    {   
        $user_id = $request->user_id;
    	$name = $request->name;
        $quantity = $request->quantity;
        $size = $request->size;
        $prize = $request->prize;
        //$image=$request->image;
       
        

        $product = new MyProduct();
        $product->id = $user_id;
        $product->name =$name;
        $product->quantity = $quantity;
        $product->size = $size;
        $product->prize = $prize;
       // $product->image=$image;
        $product->save();

       
    	dd('carts added sussessfully');
    }


    public function showcart()
    {
          $products = MyCart::all();
    return view('cart')->with(['products'=>$products]);  
       
    }
    public function removeshoe($id)
    {
        $products=MyCart::find($id)->delete();
        return redirect()->back();
    }
     public function orderReview(request $request)
     {
        $user_id=Auth::User()->id;
        $userDetails=User::where('id',$user_id)->first();
       $products = MyCart::all();
        
        return view('orderReview')->with(compact('userDetails','products'));
    }
 
    }