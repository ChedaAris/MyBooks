@extends('layouts.app')

<!-- View creata con ChatGPT -->

@section('content')
    <div>
        <h2>Modifica una Categoria</h2>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $category->name }}">
                            @error('name')
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
