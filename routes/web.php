<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [BookController::class,'index']);
Route::get('/register', function(){
    return view('register');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/dashboard/books', [DashboardController::class,'books']);
Route::get('/dashboard/books/{id}', [BookController::class,'show'])->name('show-book');
Route::get('/dashboard/books-delete/{id}/', [DashboardController::class,'destroy'])->name('show-destroy-book');


Route::post('/dashboard/books', [BookController::class,'store'])->name('store-book');
Route::delete('/dashboard/books/{id}', [BookController::class,'destroy'])->name('destroy-book');
Route::put('/dashboard/books/{id}', [BookController::class,'update'])->name('update-book');

