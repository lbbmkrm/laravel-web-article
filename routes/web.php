<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriteController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::controller(BlogController::class)->group(function () {
    Route::get('/',  'blog')->name('blog.index');
    Route::get('/article/{slug}',  'showPost');
    Route::get("/category/{category:name}",  'category');
    Route::get('/author/{user:username}',  'author')->name('blog.author');
});

Route::get('/about', function () {
    return view('about', [
        'tittle' => 'Welcome to About',
        'content' => 'Halaman About',
        'urlName' => 'About'
    ]);
});

Route::controller(UserController::class)->group(function () {
    Route::get('/authors', 'index')->name('author.index');
    Route::get('/authors/register', 'register')->name('author.save');
    Route::post('/authors', 'store')->name('author.register');
});

Route::get('/write', [WriteController::class, 'index']);
Route::post('/', [WriteController::class, 'store'])->name('blog.write');
