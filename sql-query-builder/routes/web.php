<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use  App\Http\Controllers\Routemethod;

Route::get('/', function () {
    // return view('welcome');
});

Route::get('user',[userController::class ,'userdata']);

// Route::get('route',[Routemethod::class,'get']);
// Route::post('route',[Routemethod::class,'post']);

// Route::put('route',[Routemethod::class,'put']);
// Route::patch('patch',[Routemethod::class,'patch']);
// Route::delete('delete',[Routemethod::class,'delete']);

Route::match(['post','get','put'],'/route',[Routemethod::class,'group1']);    //match method

Route::view('form','Routemethod'); 
