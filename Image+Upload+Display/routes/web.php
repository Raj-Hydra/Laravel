<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Imagecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::view('upload','upload');  //for view upload show ui



//-----------------For controller------------------------

Route::post('upload',[Imagecontroller::class,"upload"]);
Route::get('list',[Imagecontroller::class,"list"]);