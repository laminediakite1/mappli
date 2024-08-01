@extends('layouts')

@section('content')
    <div class="container">
        <h1>Modifier un livre</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>
            <div class="form-group">
                <label for="author_id">Auteur</label>
                <select name="author_id" class="form-control" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}" required>
            </div>
            <div class="form-group">
                <label for="published_year">Année de publication</label>
                <input type="number" name="published_year" class="form-control" value="{{ $book->published_year }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
