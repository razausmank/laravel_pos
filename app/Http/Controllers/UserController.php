<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends MainController
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users') );
    }

    public function create()
    {
        return view('users.create');
    }

    // Hash::make($request->newPassword)

    public function store()
    {
        request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'min:6']
        ]);
        User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make( request('password')),
        ]);

        return redirect(route('user.index'))->with('success', 'User Created Succesfully');
    }

}
