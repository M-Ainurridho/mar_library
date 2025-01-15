<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }
}
