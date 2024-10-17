<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function index(): Response
    {
        $user = User::all();
        return response()->view('users', [
            'web' => [
                'urlName' => 'Author',
                'tittle' => 'Authors',
                'content' => 'Here all authors of article'
            ],
            'users' => $user
        ]);
    }

    public function save(): Response
    {
        return response()->view('register', [
            'tittle' => 'Author registration'
        ]);
    }
}
