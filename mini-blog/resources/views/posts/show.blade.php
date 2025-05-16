@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>{{ $post->title }}</h2>
    <p class="text-muted">Publié le {{ $post->created_at->format('d/m/Y') }}</p>
    <div class="card p-4 shadow-sm">
        {!! nl2br(e($post->content)) !!}
    </div>
    <a href="{{ route('posts.index') }}" class="btn btn-outline-primary mt-3">← Retour</a>
</div>
@endsection
