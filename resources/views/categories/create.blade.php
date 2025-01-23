@extends('layouts.app')

<!-- View creata con ChatGPT -->

@section('content')
    <div>
        <h2>Aggiungi una Categoria</h2>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Aggiungi</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
