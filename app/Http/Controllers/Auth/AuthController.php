<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Login
    public function login(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if (Auth::attempt($data)) {
            if (Auth()->User()->role != 'student') {
                return redirect()->route('dashboard');
            }

            if (Auth()->User()->role == 'student') {
                return redirect()->route('student.dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Email or password incorrect');
        }
    }

    // Register View
    public function registerView()
    {
        return view('auth.register');
    }

    // Register
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|string|min:8|confirmed',
        ];
        $this->validate($request, $rules);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Successfully account created.');
    }

    // Logout
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
