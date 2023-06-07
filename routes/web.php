<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About'
    ]);
});

// posts banyak
Route::get('/blog', [PostController::class, 'index']);

// single post
// Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/post/{post:slug}', [PostController::class, 'show']); //use model binding

Route::get('/category/{category:slug}', [CategoryController::class, 'index']);

Route::get('/categories', function () {
    return view('blog.categories', [
        'title' => 'All Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/user/{user:username}', [UserController::class, 'index']);//belum jalan

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'] );

Route::get('/dashboard', function (){
    return view('dashboard.index');
        } )->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashbord/posts/chekSlug', [DashboardController::class, 'chekSlug'])->middleware('auth');
