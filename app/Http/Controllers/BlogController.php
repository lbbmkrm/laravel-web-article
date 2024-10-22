<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(Request $request)
    {

        $blog = Post::filter($request->only('search'))->latest();

        return view('blog', [
            'web' => [
                'title' => 'Find Your Blog',
                'content' => 'Halaman Blogs',
                'urlName' => 'Home'
            ],
            'posts' => $blog->simplePaginate() // Menggunakan variabel $blog
        ]);
    }

    public function showPost($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('post', [
            'web' => [
                'title' => 'Welcome to Blog',
                'content' => 'Halaman Blog',
                'urlName' => 'Blog'
            ],
            'post' => $post
        ]);
    }

    public function category(Category $category)
    {

        return view('blog', [
            'web' => [
                'title' => "Blog in $category->name",
                'content' => 'Halaman Blog',
                'urlName' => 'Categories'
            ],
            'posts' => $category->posts()->simplePaginate(6)
        ]);
    }

    public function author(User $user)
    {
        return view('blog', [
            'web' => [
                'title' => 'Articles by ' . $user->name,
                'content' => 'Halaman Blog',
                'urlName' => 'Author'
            ],
            'posts' => $user->posts()->simplePaginate(6)
        ]);
    }
}
