<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordercontroller extends Controller
{
    public function order(Request $request)
    {   
        $user_id = $request->user_id;
    	$name = $request->name;
        $quantity = $request->quantity;
      	$city = $request->city;
      
        $address =$request->address;
        $pincode =$request->pincode;
        $number= $request->number;
       $grand_total=$request->grand_total;
       
        

        $order = new Myorder();
        $order->id = $user_id;
        $order->name =$name;
        $order->quantity = $quantity;
        $order->size = $size;
      
        $order->address=$address;
        $order->pincode=$pincode;
        $order->number=$pincode;
        $order->grand_total=$grand_total;
      
        $order->save();

       
    	dd('order added sussessfully');
    }

    public function orderplaced(request $request)
     {
        $user_id=Auth::User()->id;
        $userDetails=User::where('id',$user_id)->first();
       $product=$request->all();
        $data=$request->all();
            /*  DB::table('order')->insert(['name'=>$data['name'],'user_id'=>$data['user_id'],
            'address'=>$data['address'],'city'=>$data['city'],'state'=>$data['state'],
            'pincode'=>$data['pincode'],
            'number'=>$data['number']
        ]);
              return redirect('order-review');
        

          $order->save();*/
        
        return view('orderReview')->with(compact('userDetails','products'));
    

    }
}
