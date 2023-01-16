<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // SIGN UP
    public function register(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'min:8', 'confirmed'],
            ]
        );

        //Password hashing
        $formFields['password'] = bcrypt($formFields['password']);

        // dd($formFields);
        //create user
        $user = User::create($formFields);

        Auth::login($user);

        return redirect('/')->with('success', 'User created!');
    }



    // LOGIN FORM

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/')->with('success', 'User logged in!');
        }
        return back()->with('error', 'Invalid Email or Password');
    }



    // LOG OUT

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/')->with('success', 'You have been logged out!');
    }
}
