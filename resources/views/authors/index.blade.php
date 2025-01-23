@extends('layouts.app')

@section('top-action')
    <a href="{{route('authors.create')}}" class="btn btn-primary"><i
            class="bi bi-plus-circle"></i> Aggiungi un Autore</a>
    <h2 class="mt-5 mb-4">Gli Autori</h2>
@endsection


@section('content')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col" class="w-auto">#</th>
            <th scope="col" class="w-50">Autore</th>
            <th scope="col" class="w-25">Data di nascita</th>
            <th scope="col" class="w-auto text-end">Azioni</th>
        </tr>
        </thead>
        <tbody>

        @forelse($authors as $author)
            <tr>
                <td class="align-middle">{{$author->id}}</td>
                <td class="align-middle">{{$author->name}}</td>
                <td class="align-middle">
                    {{$author->birthday ? \Carbon\Carbon::parse($author->birthday)->format('d F Y') : 'N/A' }}
                </td>
                <td class="text-end">
                    <form action="{{ route('authors.destroy', $author) }}" method="POST" id="delete-form-{{$author->id}}">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('authors.edit', $author)}}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>

                            <button type="button" onclick="confirmDelete({{ $author->id }}, 'Stai per eliminare un Attore!')" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
            <div class="alert alert-info">
                Nessun autore
            </div>
        @endforelse

        </tbody>
    </table>
@endsection
