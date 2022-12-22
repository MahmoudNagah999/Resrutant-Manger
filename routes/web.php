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
    return view('content.welcome');
});
Route::get('/welcome', function(){
    return view("content.welcome");
});
Route::get('/menu', function () {
    return view('content.menu');
});
Route::get('/about', function(){
    return view("content.AboutUs");
});
Route::get('/contact', function(){
    return view("content.ContactUs");
});
Route::get('/submitorder', function(){
    return view("content.submitorder");
});
Route::get('/add-to-cart/{id}',[
    'uses' => 'itemsController@addToCart',
    'as' => 'addToCart'
]);
Route::get('/remove-from-cart/{item}/{id}',[
    'uses' => 'itemsController@deleteFromCart',
    'as' => 'deleteFromCart'
]);
Route::get('/destroyAllCart',[
    'uses' => 'itemsController@DestroyAllCart',
    'as' => 'deleteAllCart'
]);
Route::get('/submitorder',[
    'uses' => 'itemsController@GetCart',
    'as' => 'GetCart'
]);
Route::get('/content/breakfast', 'itemsController@showbreakfast');
Route::get('/content/lunch', 'itemsController@showlunch');
Route::get('/content/dinner', 'itemsController@showdinner');

Route::get('/profile', function(){
    return view("content.profile");
});
Route::get('/additem', function(){
    return view("content.Additem");
});
Route::get('/showallusers', 'UsersController@showallusers');
Route::get('/showallmenu', 'itemsController@showallmenu');

Route::get('/logout',function(){
    if(Session::has('cart')){
        Session::flush();
    } 
    Auth::logout();
    return view('/content.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/content/checkout', 'itemsController@getcheckout');


Route::resource('users','UsersController');
Route::resource('items','itemsController');
Route::resource('order_items','order_itemsController');
Route::resource('cus_order','cus_orderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
