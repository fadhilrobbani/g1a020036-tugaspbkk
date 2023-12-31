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

    public function show(Book $book){
        return view('dashboard.books.show', [
            'book' => $book
        ]);
    }

    public function store(Request $request){
        $newBook = $request->validate([
            'book_code' => 'required',
            'image' => 'image',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
          ]);

          if($request->hasFile('image')) {
            $newBook['image'] = $request->file('image')->store('images','public');
          }
          Book::create($newBook);
          return redirect('/dashboard/books')
            ->with('success','book created successfully.');
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect('/dashboard/books')
        ->with('success','book deleted successfully.');
    }

    public function update(Request $request, Book $book){
        $request->validate([
            'book_code' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
          ]);
          $book->update($request->all());
          return redirect('dashboard/books')
            ->with('success', 'book updated successfully.');
    }
}
