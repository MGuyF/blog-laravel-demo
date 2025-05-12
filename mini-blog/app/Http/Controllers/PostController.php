<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Affiche tous les posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Affiche un seul post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Affiche le formulaire de création de post
    public function create()
    {
        return view('posts.create');
    }

    // Enregistre un nouveau post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    // Affiche le formulaire d'édition d'un post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Met à jour un post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index');
    }

    // Supprime un post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
