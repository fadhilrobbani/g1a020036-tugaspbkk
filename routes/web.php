<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class,'index']);
Route::get('/register', function(){
    return view('register');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/dashboard/books', [DashboardController::class,'books']);
Route::post('/dashboard/books', [BookController::class,'store'])->name('store-book');

