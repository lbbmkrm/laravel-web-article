<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/home');
});

Route::get('/home', function () {
    return view('home', [
        'tittle' => 'Welcome to Home',
        'content' => 'Halaman Home',
        'urlName' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'tittle' => 'Welcome to About',
        'content' => 'Halaman About',
        'urlName' => 'About'
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        'web' => [
            'tittle' => 'Welcome to Blogs',
            'content' => 'Halaman Blogs',
            'urlName' => 'Blogs'
        ],
        'posts' => Post::all()
    ]);
});
Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->first();

    if (!$post) {
        abort(404); // Mengembalikan 404 jika post tidak ditemukan
    }

    return view('post', [
        'web' => [
            'tittle' => 'Welcome to Blog',
            'content' => 'Halaman Blog',
            'urlName' => 'Blog'
        ],
        'post' => $post
    ]);
});

Route::get("/category/{category:name}", function (Category $category) {
    return view("blog", [

        'web' => [
            'tittle' => "Articles in $category->name",
            'content' => 'Halaman Blog',
            'urlName' => 'Categories'
        ],
        'posts' => $category->posts
    ]);
});

Route::get('/author/{user:username}', function (User $user) {
    return view('blog', [
        'web' => [
            'tittle' => 'Articles by ' . $user->name,
            'content' => 'Halaman Blog',
            'urlName' => 'Author'
        ],
        'posts' => $user->posts
    ]);
});


Route::get('/contact', function () {
    return view('contact', [
        'tittle' => 'Welcome to Contact',
        'content' => 'Halaman Contact',
        'urlName' => 'Contact'
    ]);
});
