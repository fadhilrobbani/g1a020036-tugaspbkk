<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(): View{
        return view('home',[
            'books' => Book::all()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'book_code' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
          ]);
          Book::create($request->all());
          return redirect('/dashboard/books')
            ->with('success','Post created successfully.');
    }
}
