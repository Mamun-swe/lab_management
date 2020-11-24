<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', '=', 'student')->get();
        return view('dashboard.student.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.student.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => 'student',
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Successfully student created.');
    }
}
