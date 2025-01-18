<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

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
        // get all books
        $books = Book::orderByDesc('updated_at')->paginate(10);

        // render view with all books
        return view('books.index', compact('books'));
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // get book by id
        $book = Book::findOrFail($id);

        // render view with book by id
        return view("books.show", compact('book'));
    }

    /**
     * create
     * 
     * @return View
     */
    public function create(): View
    {
        return view('books.create');
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // validation form
        $request->validate([
            'title'     => 'required|min:3',
            'author'    => 'required|min:3',
            'cover'     => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // save image to storage
        $image = $request->file('cover');
        $image->storeAs('public/books', $image->hashName());

        // create new book
        Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "cover" => $image->hashName()
        ]);

        return redirect()->route('books.index')->with(['success' => 'Successfully Added New Book!']);
    }

    /**
     * edit
     * 
     * @param mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // get book by id
        $book = Book::findOrFail($id);

        return view('books.edit', compact('book'));
    }

    /**
     * update
     * 
     * @param mixed $request
     * @param mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // validation form
        $request->validate([
            'title'     => 'required|min:3',
            'author'    => 'required|min:3',
            'cover'     => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // get book by id
        $book = Book::findOrFail($id);

        // check if cover is uploaded
        if ($request->hasFile('cover')) {
            // upload new cover
            $image = $request->file('cover');
            $image->storeAs('public/books', $image->hashName());

            // delete old cover
            Storage::delete('public/books/' . $book->cover);

            // update book with new cover
            $book->update([
                'title'     => $request->title,
                'author'    => $request->author,
                'cover'     => $image->hashName()
            ]);
        } else {
            // update book without cover
            $book->update([
                'title'     => $request->title,
                'author'    => $request->author,
            ]);
        }

        return redirect()->route('books.index')->with(['success' => 'Successfully Updated Book!']);
    }

    /**
     * destroy
     * 
     * @param mixed $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        // get book by id
        $book = Book::findOrFail($id);

        // delete image at storage
        Storage::delete('public/books/' . $book->cover);

        // delete data book
        $book->delete();

        return redirect()->route('books.index')->with(['success' => 'Successfully Deleted Book!']);
    }
}
