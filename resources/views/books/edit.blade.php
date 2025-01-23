@extends('layouts.app')

<!-- View creata con ChatGPT -->

@section('content')

    <div>
        <h2>Modifica un Libro</h2>
        <form action="{{ route('books.update', $book) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label for="title">Titolo del Libro</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $book->title }}">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="description">Descrizione</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{ $book->description }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="pages">Numero di Pagine</label>
                            <input type="number" name="pages" id="pages" class="form-control @error('pages') is-invalid @enderror" value="{{ $book->pages }}" style="width: 100px">
                            @error('pages')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="author_id">Autore</label>
                            <select name="author_id" id="author_id" class="form-control @error('author_id') is-invalid @enderror">
                                <option value="">Seleziona un Autore</option>
                                @foreach($authors as $author)
                                    <option value="{{ $author->id }}" {{ $book->author->id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                                @endforeach
                            </select>
                            @error('author_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="category_id">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                <option value="">Seleziona una Categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $book->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Salva</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
