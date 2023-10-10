<?php

namespace App\Http\Controllers;

use App\Models\Instructorcourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class InstructorCourseController extends Controller
{
    public function index()
    {
        $Instructorcourses = Instructorcourse::all();
        return view('Instructorcourses.index', compact('Instructorcourses'));
    }

    public function add(Request $request)
    {
        try {
            $request->validate([
                'InstructorID' => 'required',
                'CourseID	' => 'required',
            ]);

            $Instructorcourse = new Instructorcourse([
                'InstructorID' => $request->input('InstructorID'),
                'CourseID' => $request->input('CourseID'),
            ]);

            $Instructorcourse->save();
            return redirect()->route('Instructorcourses.index')->with('success', 'Instructorcourse created successfully');
        } catch (\Exception $e) {
            Log::error('Error creating Instructorcourse: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the Instructorcourse.');
        }
    }


    public function edit(Request $request)
    {
        $Instructorcourses = Instructorcourse::all();
        $Instructorcourse = Instructorcourse::findOrFail($request->id);
        return view('Instructorcourses.edit', compact('Instructorcourse', 'Instructorcourses'));
    }

    public function update(Request $request)
    {
        $InstructorCourseID = $request->id;

        try {
            $request->validate([
                'InstructorID' => 'required',
                'CourseID	' => 'required',
            ]);

            Instructorcourse::where('InstructorCourseID', $InstructorCourseID)->update([
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
            $Instructorcourse = Instructorcourse::findOrFail($request->id);
            $Instructorcourse->delete();
            return redirect()->route('Instructorcourses.index')->with('success', 'Instructorcourse deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting Instructorcourse: ' . $e->getMessage());
            return redirect()->route('Instructorcourses.index')->with('error', 'An error occurred while deleting the Instructorcourse.');
        }
    }
}
