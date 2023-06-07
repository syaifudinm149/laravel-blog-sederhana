<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    
    public function index(User $user)
    {
        // return $user->posts;
        return view('blog.user', [
            'title' => $user->name,
            'posts' => $user->posts

        ]);
    }
}
