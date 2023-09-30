<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class,'index']);
Route::get('/register', [AuthController::class,'register']);
Route::get('/login', [AuthController::class,'login']);

Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/dashboard/books', [DashboardController::class,'books']);
Route::get('/dashboard/books-edit/{book}', [DashboardController::class,'show'])->name('show-book');
Route::get('/dashboard/books-delete/{book}/', [DashboardController::class,'destroy'])->name('show-destroy-book');


Route::post('/dashboard/books', [BookController::class,'store'])->name('store-book');
Route::delete('/dashboard/books/{book}', [BookController::class,'destroy'])->name('destroy-book');
Route::put('/dashboard/books/{book}', [BookController::class,'update'])->name('update-book');

