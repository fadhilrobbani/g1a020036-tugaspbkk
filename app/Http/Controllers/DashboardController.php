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

    public function destroy($id): View{
        return view('dashboard.books.destroy',[
            'book' => Book::find($id)
        ]);
    }
}
