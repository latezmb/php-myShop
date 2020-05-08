<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloController/select',"helloController@select");

Route::get('/helloController/select1',"helloController@select1");

Route::get('/search',"GradeDemo@search");

Route::post('/searchdo',"GradeDemo@searchdo");

Route::Match(['get','post'],'/testa/select',"testa@select");

Route::Match(['get','post'],'/testb','testb@select');

Route::get('/testb/select','testb@select');

Route::get('/testb/update/{id}','testb@update');

Route::post('/testb/updatedo','testb@updatedo');

Route::get('/testb/delete/{id}','testb@delete');

Route::get('/testb/insert','testb@insert');

Route::post('/testb/insertdo','testb@insertdo');

Route::get('/zhuce/zhucey','zhuce@zhucey');

Route::post('/zhuce/zhucedo','zhuce@zhucedo');

Route::post('/zhuce/signup','zhuce@signup');

Route::get('/modelTest/modeltest','modelTest@modeltest');

Route::get('/course/index','course@index');