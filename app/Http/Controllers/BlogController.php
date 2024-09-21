<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog', [
            'web' => [
                'tittle' => 'Welcome to Blogs',
                'content' => 'Halaman Blogs',
                'urlName' => 'Blogs'
            ],
            'posts' => Post::all()
        ]);
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            'web' => [
                'tittle' => 'Welcome to Blog',
                'content' => 'Halaman Blog',
                'urlName' => 'Blog'
            ],
            'posts' => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('blog', [
            'web' => [
                'tittle' => "Articles in $category->name",
                'content' => 'Halaman Blog',
                'urlName' => 'Categories'
            ],
            'posts' => $category->posts
        ]);
    }

    public function author(User $user)
    {
        return view('blog', [
            'web' => [
                'tittle' => 'Articles by ' . $user->name,
                'content' => 'Halaman Blog',
                'urlName' => 'Author'
            ],
            'posts' => $user->posts
        ]);
    }
}
