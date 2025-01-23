@extends('layouts.app')

<!-- View creata con ChatGPT -->

@section('content')
    <div>
        <h2>Aggiungi un Autore</h2>
        <form action="{{ route('authors.store') }}" method="POST">
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


                        <div class="form-group">
                            <label for="birthday">Data di nascita</label>
                            <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday') }}">
                            @error('birthday')
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
