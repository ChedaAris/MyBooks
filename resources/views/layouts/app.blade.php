<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I miei Libri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="bg-light">
<main class="container">
    <section class="row">
        <div class="col-md-12 my-4">
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{route('books.index')}}" class="btn btn-secondary">Libri</a>
                <a href="{{route('authors.index')}}" class="btn btn-secondary">Autori</a>
                <a href="{{route('categories.index')}}" class="btn btn-secondary">Categorie</a>
            </div>
            @yield('top-action')
        </div>
    </section>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <section class="row">
        <div class="col-md-12">
            @yield('content')
        </div>
    </section>
</main>

</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id, info) {

        Swal.fire({
            title: 'Sei sicuro?',
            text: info,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Sì, elimina!',
            cancelButtonText: 'Annulla',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // invia il form di eliminazione solo in caso che il pop-up venga accettato
                document.getElementById('delete-form-'+ id).submit();
            }
        });
    }
</script>
</html>
