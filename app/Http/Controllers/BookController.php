<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        $authors = Author::all();
        $categories = Category::all();

        return view('books.create', compact('authors', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        Book::create($data);

        return redirect()->route('books.index')->with('success', 'Libro aggiunto con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book) : View
    {

        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book) : View
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, Book $book) : RedirectResponse
    {
        $data = $request->validated();
        $book->update($data);

        return redirect()->route('books.index')->with('success', 'Libro modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book) : RedirectResponse
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo');
    }
}
