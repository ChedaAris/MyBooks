<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  : View
    {
        setlocale(LC_TIME, 'it_IT');
        \Carbon\Carbon::setLocale('it');
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  : View
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AuthorRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        Author::create($data);

        return redirect()->route('authors.index')->with('success', 'Autore aggiunto con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author) : View
    {
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AuthorRequest $request, Author $author) : RedirectResponse
    {
        $data = $request->validated();
        $author->update($data);

        return redirect()->route('authors.index')->with('success', 'Autore modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author) : RedirectResponse
    {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Autore eliminato con successo');
    }
}
