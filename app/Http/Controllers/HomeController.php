<?php

namespace App\Http\Controllers;

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
        return view('home.index');
    }
}
