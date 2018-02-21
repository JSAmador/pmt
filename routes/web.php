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


Route::post('/test', 'TestController@checkout');

Route::get('/paymentSuccess', function() {
   return view('success');
});


Route::get('/paymentFail', function() {
    return view('fail');
});

Route::resource('orders', 'OrdersController');