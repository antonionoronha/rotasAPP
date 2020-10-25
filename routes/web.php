<?php

use Illuminate\Support\Facades\Route;

Route::get('/',['as'=>'/','uses'=>'LoginController@getLogin']);
Route::post('/login',['as'=>'login','uses' => 'LoginController@postLogin']);

Route::get('/noPermission',function(){
    return view('permission.noPermission');
});


Route::group(['middleware'=>['authen']], function(){
    
    Route::resource('/product','ProductController');    
    Route::get('/logout',['as'=>'logout','uses' => 'LoginController@getLogout']);    
    Route::get('/dashboard',['as'=>'dashboard','uses'=>'DashboardController@dashboard']);
    Route::get('/createProduct', ['as'=>'createProduct','uses'=>'ProductController@createProduct']);
    Route::post('/createProduct', ['as'=>'createProduct','uses'=>'ProductController@storeProduct']);
});

Route::group(['middleware' => ['authen','roles'],'roles' => ['admin','user']], function(){
    //for admin and user
    Route::resource('/routes','RouteController');    
});

Route::group(['middleware' => ['authen','roles'],'roles' => ['admin']], function(){
    //for admin
    Route::resource('/users','UserController');    
});

