<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * index
     * 
     * @return View
     */
    public function index(): View
    {
        // get 5 latest items
        $latestBooks = Book::latest()->take(5)->get();

        return view('home.index', compact('latestBooks'));
    }
}
