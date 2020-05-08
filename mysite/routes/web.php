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


Route::prefix('ls20')->group(function(){
    Route::get('/','Lesson20@index');
    Route::post('grade','Lesson20@grade');
    Route::post('student','Lesson20@student');
    Route::post('order','Lesson20@order');
});
