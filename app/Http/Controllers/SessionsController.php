<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {

        $credentials = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if ( !auth()->attempt($credentials) )
        {
            throw ValidationException::withMessages([
                'email', 'Your provided credentials could not be verified'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }
}
