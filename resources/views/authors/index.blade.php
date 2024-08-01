@extends('layouts')

@section('content')
    <div class="container">
        <h1>Liste des auteurs</h1>
        <a href="{{route('authors.create')}}" class="btn btn-primary mb-3">Ajouter un auteur</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Biographie</th>
                    <th>Livres</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->biography }}</td>
                        <td>
                            @foreach ($author->books as $book)
                                <li>{{ $book->title }}</li>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary">Modifier</a>
                            <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $authors->links() }}
    </div>
@endsection
