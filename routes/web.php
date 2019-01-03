<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 /*Route::get('/', function () {
   return view('undandy');
 });
*/
Route::get('/','ProductController@homePage');

Route::get('/designyours','ProductController@designyours');


Route::get('/undandy', [
    'uses' => 'LoginController@undandy',
    'as' => 'undandy'
]);



Route::get('/nav1', function () {
    return view('nav1');
});



//........................................................

Route::get('/15byeric', function () {
    return view('15byeric');
});


Route::get('/mastershoe', function () {
    return view('mastershoe');
});

Route::get('/92byWayne', function () {
    return view('92byWayne');
});

Route::get('/15byTomRipley', function () {
    return view('15byTomRipley');
});
Route::get('/48byGoncalo', function () {
    return view('48byGoncalo');
});
Route::get('/48byRheetButler', function () {
    return view('48byRheetButler');
});

Route::get('/15bypowel', function () {
    return view('15bypowel');
});


Route::get('/92byhacket', function () {
    return view('92byhacket');
});




//........................................................................

Route::get('/shoe', function () {
    return view('shoe');
});

Route::get('/accessories', function () {
    return view('accessories');
});

Route::get('/undandyworld', function () {
    return view('undandyworld');
});

Route::get('/Gentleman', function () {
    return view('Gentleman');
});

Route::get('/readmore', function () {
    return view('readmore');
});

Route::get('/footer', function () {
    return view('footer');
});

//...................................................................
Route::get('/addtochart', function () {
    return view('addtochart');
});

Route::get('/product', [
    'uses' => 'ProductController@product',
    'as' => 'product',
    'middleware' => 'auth'
]);

Route::get('/listofproducts', function () {
    return view('listofproducts');
});

Route::get('/listofproducts','ProductController@listproduct');

Route::get('/listofproducts', [
    'uses' => 'LoginController@listofproducts',
    'as' => 'listofproducts'
]);

Route::get('/showProduct','ProductController@showProduct');

Route::get('/homePage','ProductController@homePage');

Route::get('/showProduct', [
    'uses' => 'ProductController@showProduct',
    'as' => 'showProduct'
]);

//....................................................................

Route::get('/login', function () {
    return view('login');
});


 
Route::post('/login', [
    'uses' => 'LoginController@login',
    'as' => 'login',
    
]);

Route::get('/logout', [
    'uses' => 'LoginController@logout',
    'as' => 'logout'
]);

Route::post('/register','RegisterController@register');


Route::get('/registration', function () {
    return view('registration');
});

Route::post('/register', [
    'uses' => 'RegisterController@register',
    'as' => 'register'
]);
//...................................................................
Route::get('/productdetails', function () {
    return view('productdetails');
});


Route::get('/addproduct', function () {
    return view('addproduct');
});


Route::post('/addproduct', [
    'uses' => 'ProductController@addproduct',
    'as' => 'addproduct'
]);

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/editproduct/{id}', [
    'uses' => 'ProductController@editproduct',
    'as' => 'editproduct'
]);

Route::get('/deleteproduct/{id}', [
    'uses' => 'ProductController@deleteproduct',
    'as' => 'deleteproduct'
]);

Route::post('/updateproduct', [
    'uses' => 'ProductController@updateproduct',
    'as' => 'updateproduct'
]);

Route::get('/shoe','ProductController@shoe');

Route::get('/shoeDetails/{id}','ProductController@showDetails');

Route::post('/shoeDetails/{id}', [
    'uses' => 'ProductController@shoeDetails',
    'as' => 'shoeDetails'
]);

//................................................................



 Route::match(['get','post'], '/add-cart','ProductController@addtocart');

Route::post('/add-cart',[
'uses'=>'ProductController@addtocart',
'as'=>'add-cart',
'middleware'=>'auth'
]);




//Route::get('/showcart','carts@showcart');

Route::get('/showcart', [
    'uses' => 'carts@showcart',
    'as' => 'showcart',
    'middleware' => 'auth'
]);

Route::get('/orderReview','carts@orderReview');


Route::get('/removeshoe/{id}',[
'uses' => 'carts@removeshoe',
'as' => 'removeshoe' 
]);

 Route::match(['get','post'], '/checkout','ProductController@checkout');

//ordereview page
 Route::match(['get','post'], '/order-review','carts@orderReview');

 Route::match(['get','post'], '/place-order','ProductController@placeorder');

Route::get('/orderReview', function () {
    return view('orderReview');
});


Route::get('/confirm', function () {
    return view('confirm');
});


