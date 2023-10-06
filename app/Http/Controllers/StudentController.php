<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|unique:students',
            'DateOfBirth' => 'nullable|date',
            'Gender' => 'nullable|in:Male,Female,Other',
            'EnrollmentDate' => 'nullable|date',
            'IsActive' => 'required|boolean',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'FirstName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'Email' => 'required|email|unique:students,Email,' . $student->id,
            'DateOfBirth' => 'nullable|date',
            'Gender' => 'nullable|in:Male,Female,Other',
            'EnrollmentDate' => 'nullable|date',
            'IsActive' => 'required|boolean',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
