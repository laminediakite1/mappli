@extends('layouts')

@section('content')
    <div class="container">
        <h1>Ajouter un auteur</h1>
        <form action="{{ route('authors.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="biography">Biographie</label>
                <textarea name="biography" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

