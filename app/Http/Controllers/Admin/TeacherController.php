<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Course;
use App\Models\AssignedCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = User::where('role', '=', 'teacher')->get();
        return view('dashboard.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('dashboard.teacher.create');
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
            'role' => 'teacher',
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Successfully teacher created.');
    }

    public function show($id)
    {
        $teacher = User::where('id', $id)->first();
        $courses = Course::all();
        $assignedCourses = AssignedCourses::join('courses', 'courses.id', '=', 'assigned_courses.course_id')
            ->where('teacher_id', $id)
            ->get();
        return view('dashboard.teacher.show', compact('teacher', 'courses', 'assignedCourses'));
    }

    public function assignCourse(Request $request)
    {
        $request->validate([
            'course' => 'required',
        ]);

        AssignedCourses::create([
            'teacher_id' => $request['teacher_id'],
            'course_id' => $request['course'],
        ]);

        return redirect()->back()->with('success', 'Successfully course assigned.');
    }
}
