@extends('layouts.app')

@section('top-action')
    <a href="{{route('books.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi un
        Libro</a>
    <h2 class="mt-5 mb-4">I miei Libri</h2>
@endsection


@section('content')
    <div class="list-book">
        @forelse($books as $book)
            @include('books.card', $book)
        @empty
            <div class="alert alert-info">
                Nessun libro
            </div>
        @endforelse
    </div>
@endsection
