<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class WriteController extends Controller
{
    public function index(): Response
    {
        return response()->view('add-article', [
            'web' => [
                'tittle' => 'Add article',
                'urlName' => 'Write',
                'content' => 'Save Article Page'
            ],
            'categories' => Category::all(),
            'users' => User::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $category = Category::where('name', '=', $request['category_name'])->first();
        $user = User::where('name', '=', $request['user_name'])->first();
        Log::info(json_encode([
            $user,
            $request->author_name
        ]));
        $post = new Post([
            'slug' => fake()->uuid(),
            'tittle' => $request->tittle,
            'body' => $request->body,
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);
        $post->save();

        return redirect()->route('blog.index')->with('success', 'Article has been added');
    }
}
