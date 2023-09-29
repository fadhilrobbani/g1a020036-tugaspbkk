<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'index']);

Route::get('/books/{id}', function($id){

});

Route::get('/register', function(){
    return view('register');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});
