<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyProduct;

use DB;

use Auth;

use App\User;

use App\DeliveryAddress;


class ProductController extends Controller
{
    public function product()
    {
        if(Auth::user()->type != "admin"){
            return redirect()->route('undandy');
        }
        return view('product');
    }

    public function addproduct(Request $request)
    {
   
    	$name = $request->name;
        $quantity = $request->quantity;
        $size = $request->size;
        $prize = $request->prize;
        $image=$request->image;
        $description = $request->description;
        $file=$request->file('image');
        $filename= $file->getClientOriginalName();
        $uploadpath ='public/images/uploads';
        $filepath ='/public/images/uploads/'.$filename;
        $file->move($uploadpath,$filename);
      

        $product = new MyProduct();
        $product->name = $name;
        $product->quantity = $quantity;
        $product->size = $size;
        $product->prize = $prize;
        $product->image=$image;
        $product->description = $description;
        $product->image=$filepath;
      
        $product->save();

       
    	dd('product added sussessfully');
    }
 


    public function shoe(Request $request)
    {
 
        $shoes = MyProduct::all();

        return view('shoe')->with (['shoes'=>$shoes]);
    }

    public function homePage(Request $request)
    {
 
        $shoes = MyProduct::all()->take(3);

        return view('undandy')->with(['shoes'=>$shoes]);
    }

    public function designyours(Request $request)
    {
 
        $shoes = MyProduct::all()->take(3);

        return view('designyours')->with(['shoes'=>$shoes]);
    }

    public function showDetails($id)
    {   

        $shoe=MyProduct::where('id',$id)->first();
        return view('showDetails')->with (['shoe'=>$shoe]);
    }


    public function showProduct()
    {
        $products = MyProduct::all();
      
        if(Auth::user()->type=='admin'){
          return view('listofproducts')->with(['products'=>$products]);   
        }
        elseif (Auth::user()->type=='customer') {
          return view('login'); 
        }
         
    }

    public function editproduct($id){

        $product = MyProduct::where('id',$id)->first();
        return view('edit')->with(['product'=>$product]);

    }

    public function updateproduct(Request $request)
    {
        if( $request->isMethod('post')){
            $data= $request->all();
             
            MyProduct::where(['id'=>$data['id']])->update(['name'=>$data['name'],
            'quantity'=>$data['quantity'],
            'prize'=>$data['prize'],'description'=>$data['description']]);
            return redirect()->back()->with('flash_message_succcess','product has been updated successfully');
        }

    }

     public function deleteproduct($id)
    {
    
        $product = MyProduct::find($id)->delete();
        echo "deleted";
    }

    public function addtocart(Request $request)
    {

         $data = $request->all();
        $product_id=$request->product_id;
        $quantity=MyProduct::where('id',$product_id)->first()->quantity;
      
        if($quantity < $request->quantity){
             Session()->flash('No quantity available');
            return redirect()->back();
          
        }
      
      DB::table('carts')->insert(['name'=>$data['name'],'user_id'=>Auth::user()->id,
            'quantity'=>$data['quantity'],'size'=>$data['size'],
            'prize'=>$data['prize']]);
            return redirect()->back()->with('flash_message_succcess','product has been updated successfully');
          $carts->save();
    }

    public function checkout(Request $request)
    {
       // dd($request->all());
        $user_id= Auth::User()->id;
        $userDetails =User::find($user_id);
        if ($request->isMethod('post')){
            $data=$request->all();

    }
          $userDetails->save();
        return view ('checkout')->with(['userDetails'=>$userDetails]);
    }
     
     public function placeorder(request $request)
     {  
       
        $product=$request->all();
        $data=$request->all();
              DB::table('order')->insert(['name'=>$data['name'],
            'address'=>$data['address'],'city'=>$data['city'],'state'=>$data['state'],
            'pincode'=>$data['pincode'],
            'number'=>$data['number']
        ]);
              return redirect('order-review');
        

          $order->save();


     }

    
     


}

  