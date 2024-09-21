<?php

use App\Http\Controllers\BlogController;
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


Route::controller(BlogController::class)->group(function () {
    Route::get('/blog',  'blog');
    Route::get('/blog/{slug}',  'showPost');
    Route::get("/category/{category:name}",  'category');
    Route::get('/author/{user:username}',  'author');
});




Route::get('/contact', function () {
    return view('contact', [
        'tittle' => 'Welcome to Contact',
        'content' => 'Halaman Contact',
        'urlName' => 'Contact'
    ]);
});
