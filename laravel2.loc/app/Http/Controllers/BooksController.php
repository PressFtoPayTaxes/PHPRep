<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        return view('index', [
            'books' => Book::all()
        ]);
    }

    public function show(Book $book){
        return view('book', [
            'book' => $book
        ]);
    }
}
