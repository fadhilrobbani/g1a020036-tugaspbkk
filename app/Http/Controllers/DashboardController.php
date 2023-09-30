<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Book;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(): View{
        return view('dashboard.index',[
            'books' => Book::all()
        ]);
    }

    public function books(): View{
        return view('dashboard.books.index',[
            'books' => Book::all()
        ]);
    }

    public function show(Book $book): View{
        return view('dashboard.books.show',[
            'book' => $book
        ]);
    }

    public function destroy(Book $book): View{
        return view('dashboard.books.destroy',[
            'book' => $book
        ]);
    }
}
