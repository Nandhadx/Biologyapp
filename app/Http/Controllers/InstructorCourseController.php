<?php

namespace App\Http\Controllers;

use App\Models\Instructorcourse;
use App\Models\Instructor;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InstructorCourseController extends Controller
{
    public function index()
    {
        $instructorCourses = Instructorcourse::all();
        $instructors = Instructor::all();
        $courses = Course::all();
        return view('Instructorcourses.index', compact('instructorCourses','instructors','courses'));
    }

    public function add(Request $request)
    {
        try {
            $request->validate([
                'InstructorID' => 'required',
                'CourseID' => 'required', // Removed extra space
            ]);

            $instructorCourse = new Instructorcourse([
                'InstructorID' => $request->input('InstructorID'),
                'CourseID' => $request->input('CourseID'),
            ]);

            $instructorCourse->save();
            return redirect()->route('Instructorcourses.index')->with('success', 'Instructorcourse created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating Instructorcourse: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the Instructorcourse.');
        }
    }

    public function edit(Request $request)
    {
        $instructorCourses = Instructorcourse::all();
        $instructors = Instructor::all();
        $courses = Course::all();
        $instructorCourse = Instructorcourse::findOrFail($request->id);
        return view('Instructorcourses.edit', compact('instructorCourse', 'instructorCourses','instructors','courses'));
    }

    public function update(Request $request)
    {
        $instructorCourseID = $request->id; // Changed to camelCase

        try {
            $request->validate([
                'InstructorID' => 'required',
                'CourseID' => 'required', // Removed extra space
            ]);

            Instructorcourse::where('InstructorCourseID', $instructorCourseID)->update([
                'InstructorID' => $request->input('InstructorID'),
                'CourseID' => $request->input('CourseID'),
            ]);

            return redirect()->route('Instructorcourses.index')->with('success', 'Instructorcourse updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating Instructorcourse: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while updating the Instructorcourse.');
        }
    }

    public function delete(Request $request)
    {
        try {
            $instructorCourse = Instructorcourse::findOrFail($request->id);
            $instructorCourse->delete();
            return redirect()->route('Instructorcourses.index')->with('success', 'Instructorcourse deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting Instructorcourse: ' . $e->getMessage());
            return redirect()->route('Instructorcourses.index')->with('error', 'An error occurred while deleting the Instructorcourse.');
        }
    }
}
