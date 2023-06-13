<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        // dd(Post::latest()->get());
        $post = Post::latest();
        if(request('search')){
            $post->where('title', 'like', '%' . request('search') . '%');
        }

        return view('blog.blog', [
            'title' => 'All Posts',
            'posts' => $post->with(['user', 'category', 'comment'])->paginate(9)->withQueryString()
            // 'posts' => Post::with(['user', 'category'])->latest()->paginate(9)
            // 'posts' => Post::latest()->get()
            // 'posts' => Post::all()
        ]);
    }
    public function show(Post $post)
    {
        // return $post;
        return view('blog.singlePost', [
            'title' => 'Single Post',
            'post' => $post,
        ]);
    }
}
