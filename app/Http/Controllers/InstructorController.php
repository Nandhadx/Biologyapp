<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    public function add(Request $request)
    {
        try {
            $request->validate([
                'FirstName' => 'required|max:50',
                'LastName' => 'required|max:50',
                'Email' => 'required|email|unique:instructors',
                'Biography' => 'required',
                'ProfileImageURL' => 'nullable|url',
                'JoinDate' => 'required|date',
                // 'IsActive' => 'required|boolean',
            ]);

            $instructor = new Instructor([
                'FirstName' => $request->input('FirstName'),
                'LastName' => $request->input('LastName'),
                'Email' => $request->input('Email'),
                'Biography' => $request->input('Biography'),
                'ProfileImageURL' => $request->input('ProfileImageURL'),
                'JoinDate' => $request->input('JoinDate'),
                'IsActive' => $request->input('IsActive'),
            ]);

            $instructor->save();
            return redirect()->route('instructors.index')->with('success', 'Instructor created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating instructor: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the instructor.');
        }
    }


    public function edit(Request $request)
    {
        $instructors = Instructor::all();
        $instructor = Instructor::findOrFail($request->id);
        return view('instructors.edit', compact('instructor', 'instructors'));
    }

    public function update(Request $request)
    {
        $instructorId = $request->id;

        try {
            $request->validate([
                'FirstName' => 'required|max:50',
                'LastName' => 'required|max:50',
                'Email' => 'required',
                'Biography' => 'nullable',
                'ProfileImageURL' => 'nullable|url',
                'JoinDate' => 'required|date',
            ]);

            Instructor::where('InstructorID', $instructorId)->update([
                'FirstName' => $request->input('FirstName'),
                'LastName' => $request->input('LastName'),
                'Email' => $request->input('Email'),
                'Biography' => $request->input('Biography'),
                'ProfileImageURL' => $request->input('ProfileImageURL'),
                'JoinDate' => $request->input('JoinDate'),
            ]);

            return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating instructor: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the instructor.');
        }
    }




    public function delete(Request $request)
    {
        try {
            $Instructor = Instructor::findOrFail($request->id);
            $Instructor->delete();
            return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting Instructor: ' . $e->getMessage());
            return redirect()->route('instructors.index')->with('error', 'An error occurred while deleting the Instructor.');
        }
    }
}
