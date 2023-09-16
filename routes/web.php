<?php

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

Route::get('/', function () {
    return view('home',[
        'books' => [
            [
                'id' => '1',
                'title' => 'buku1',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '2',
                'title' => 'buku2',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '3',
                'title' => 'buku3',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '4',
                'title' => 'buku4',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '5',
                'title' => 'buku5',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '6',
                'title' => 'buku6',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
            [
                'id' => '7',
                'title' => 'buku7',
                'synopsis' => 'lorem ipsum dolor amte aek fk kejw',
                'rentStatus' => true,
            ],
        ]
    ]);
});

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
