<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller

{
    public function index()
    {

        $users = User::all();
        dd($users);
        return view('hola', $users );

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required', 'min:8']

        ]);

        User::created([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        //retorna vista anterior
        return view('welcome');
    }

    public function delete(User $user)
    {

    $user->delete();
    return back();
    
    }
}
