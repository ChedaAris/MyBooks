<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  : View
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()  : View
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)  : RedirectResponse
    {
        $data = $request->validated();
        Category::create($data);

        return redirect()->route('categories.index')->with('success', ' Categoria aggiunta con successo');
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
    public function edit(Category $category)  : View
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)  : RedirectResponse
    {
        $data = $request->validated();
        $category->update($data);

        return redirect()->route('categories.index')->with('success', ' Categoria modificata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)  : RedirectResponse
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Categoria eliminata con successo');
    }
}
