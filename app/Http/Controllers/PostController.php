<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function welcome(){
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $path = $post->file->path;
        return view('posts.show', compact('post', 'path'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'published_at' => 'required|date',
        ]);

        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'published_at' => $request->input('published_at'),
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('post_images', 'public');

            $post->file()->create([
                'path' => $imagePath,
            ]);
        }

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        'published_at' => 'required|date',
    ]);

    $post->update([
        'title' => $request->input('title'),
        'content' => $request->input('content'),
        'published_at' => $request->input('published_at'),
    ]);

    if ($request->hasFile('image')) {
        if ($post->file) {
            Storage::disk('public')->delete($post->file->path);
            $post->file->delete();
        }

        $imagePath = $request->file('image')->store('post_images', 'public');
        $post->file()->create([
            'path' => $imagePath,
        ]);
    }

    return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
}

public function destroy(Post $post)
{
    if ($post->file) {
        Storage::disk('public')->delete($post->file->path);
        $post->file->delete();
    }

    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
}
}
