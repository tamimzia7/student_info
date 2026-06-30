<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('add','add-student');
Route:: post('add',[StudentController::class,'add']);
Route:: get('list',[StudentController::class,'list']);
route::get('delete/{id}',[StudentController::class,'delete']);
route::get('edit/{id}',[StudentController::class,'edit']);