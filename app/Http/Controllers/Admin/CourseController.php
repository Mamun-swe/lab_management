<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('dashboard.course.index', compact('courses'));
    }

    public function create()
    {
        return view('dashboard.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'credit' => 'required',
            'type' => 'required',
        ]);

        Course::create([
            'title' => $request['title'],
            'credit' => $request['credit'],
            'type' => $request['type'],
        ]);

        return redirect()->back()->with('success', 'Successfully course created.');
    }
}
