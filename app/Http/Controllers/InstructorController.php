<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|unique:instructors',
            'Biography' => 'nullable',
            'ProfileImageURL' => 'nullable|url',
            'JoinDate' => 'required|date',
            'IsActive' => 'required|boolean',
        ]);

        Instructor::create($request->all());

        return redirect()->route('instructors.index')->with('success', 'Instructor created successfully');
    }

    public function edit(Instructor $instructor)
    {
        return view('instructors.edit', compact('instructor'));
    }

    public function update(Request $request, Instructor $instructor)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|unique:instructors,Email,' . $instructor->id,
            'Biography' => 'nullable',
            'ProfileImageURL' => 'nullable|url',
            'JoinDate' => 'required|date',
            'IsActive' => 'required|boolean',
        ]);

        $instructor->update($request->all());

        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully');
    }

    public function destroy(Instructor $instructor)
    {
        $instructor->delete();

        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully');
    }
}
