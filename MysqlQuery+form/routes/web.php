<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('Add','AddStudent');
Route::post('Add',[StudentController::class,'Add']);

Route::get('list',[StudentController::class,'list']);

Route::get('delete/{Id}', [StudentController::class,'delete']);
Route::get('edit/{Id}',[StudentController::class,'edit']);

Route::put('edit-student/{Id}',[StudentController::class,'editStudent']);

Route::get('search',[StudentController::class,'search']);

Route::post('delete-multi',[StudentController::class,'deletmultiple']);