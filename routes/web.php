<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/index',[TodoController::class,'index'])->name('index');
Route::get('/addtodo',[TodoController::class,'addtodo'])->name('addtodo');
Route::post('/store',[TodoController::class,'store'])->name('store');
Route::get('/complete/{id}',[TodoController::class,'completeTodo'])->name('completeTodo');