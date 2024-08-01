@extends('layouts')

@section('content')
    <div class="container">
        <h1>Modifier un auteur</h1>
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
            </div>
            <div class="form-group">
                <label for="biography">Biographie</label>
                <textarea name="biography" class="form-control" required>{{ $author->biography }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
