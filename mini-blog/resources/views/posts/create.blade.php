@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Créer un nouvel article</h2>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
