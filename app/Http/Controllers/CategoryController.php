<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('blog.category', [
            'title' => $category->name, //for title
            'posts' => $category->posts, //binding with join post        
            'category_title' => $category->name //title per category
        ]);
    }
}
