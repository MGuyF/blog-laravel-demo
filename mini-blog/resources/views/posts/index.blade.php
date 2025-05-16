@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Liste des Articles</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Ajouter un article</a>
    <div class="card shadow-sm">
        <div class="card-body">
            @if($posts->isEmpty())
                <p>Aucun article disponible.</p>
            @else
                <ul class="list-group">
                    @foreach($posts as $post)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div>
                                <h5>{{ $post->title }}</h5>
                                <small class="text-muted">Créé le {{ $post->created_at->format('d/m/Y') }}</small>
                            </div>
                            <div>
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">Voir</a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
