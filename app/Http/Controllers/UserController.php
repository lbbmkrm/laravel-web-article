<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

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

    public function register(): Response
    {
        return response()->view('register', [
            'urlName' => 'Author Registration'
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/[A-Z]/',
                'regex: /[0-9]/',
            ],
        ];

        $validation = Validator::make($request->all(), $rules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'profession' => $request->profession
        ]);
        $user->save();

        return redirect()->route('author.index')->with('success', 'Author added successfull');
    }
}
