<?php

use App\Http\Controllers\Order;
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

Route::get('/', 'login@main');

Route::match(['get','post'],'/main','login@main');

Route::get('/login','login@myLogin');

Route::post('/logindo','login@logindo');

Route::get('/out','login@out');

Route::post('/zhucedo','login@zhucedo');

Route::get('/updateInfor','myInformation@myInfoe');

Route::post('/updateInfordo','myInformation@update');

Route::get('detailed','myHandle@goodsShow');

Route::post('addComment','myHandle@addComment');

Route::get('order','Order@myOrder');

Route::post('addorder','Order@addOrder');

Route::get('/myShopping','Order@myShopping');

Route::get('delShopAddorder','Order@delShopAddorder');
