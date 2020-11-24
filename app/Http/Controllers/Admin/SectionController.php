<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('dashboard.section.index', compact('sections'));
    }

    public function create()
    {
        return view('dashboard.section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Section::create([
            'name' => $request['name'],
        ]);

        return redirect()->back()->with('success', 'Successfully section created.');
    }
}
