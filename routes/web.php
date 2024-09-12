<?php

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
        'tittle' => 'Welcome to blog',
        'content' => 'Halaman blog',
        'urlName' => 'blog'
    ]);
});
Route::get('/contact', function () {
    return view('contact', [
        'tittle' => 'Welcome to Contact',
        'content' => 'Halaman Contact',
        'urlName' => 'Contact'
    ]);
});
