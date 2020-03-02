<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class BooksController extends Controller
{
    public function index(){
        return view('index', [
            'books' => Book::all()
        ]);
    }

    public function create()
    {
        return view('actions');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $request->validate($book->rules);
        $book->fill($request->except('_token'));
        $book->save();
        return redirect()->route('books.index');
    }

    public function show(Book $book){
        return view('book', [
            'book' => $book
        ]);
    }

    public function edit(Book $book)
    {
        return view('actions', [
            'action' => 'books.update',
            'book' => $book,
            'method' => 'PUT'
        ]);
    }

    public function update(Request $request, Book $book)
    {
        $request->validate($book->rules);
        $book->fill($request->except('_token'));
        $book->save();
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}
