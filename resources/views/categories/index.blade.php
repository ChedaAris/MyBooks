@extends('layouts.app')

@section('top-action')
    <a href="{{route('categories.create')}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi una Categoria</a>
    <h2 class="mt-5 mb-4">Le Categorie</h2>
@endsection


@section('content')
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col" class="w-auto">#</th>
            <th scope="col" class="w-75">Categoria</th>
            <th scope="col" class="w-auto text-end">Azioni</th>
        </tr>
        </thead>
        <tbody>
        @forelse($categories as $category)
            <tr>
                <td class="align-middle">{{$category->id}}</td>
                <td class="align-middle">{{$category->name}}</td>
                <td class="text-end">
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" id="delete-form-{{$category->id}}">
                        @csrf
                        @method('DELETE')
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{route('categories.edit', $category)}}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                            <button type="button" onclick="confirmDelete({{$category->id}}, 'Stai per eliminare una Categoria!')" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
                        </div>
                    </form>
                </td>
            </tr>
        @empty
            <div class="alert alert-info">
                Nessuna categoria
            </div>
        @endforelse

        </tbody>
    </table>
@endsection
