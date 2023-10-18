<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\CourseFiles;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        $Courses = Course::all();
        $Categorys = Category::all();
        $Instructors = Instructor::all();
        return view('courses.create', compact('Courses', 'Instructors', 'Categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'CourseName' => 'required',
            'Description' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
            'Price' => 'required',
            'Level' => 'required',
            'CategoryID' => 'required',
            'IsActive' => 'required',
        ]);

        $course = new Course([
            'CourseName' => $request->input('CourseName'),
            'Description' => $request->input('Description'),
            'StartDate' => $request->input('StartDate'),
            'EndDate' => $request->input('EndDate'),
            'Price' => $request->input('Price'),
            'Level' => $request->input('Level'),
            'Category' => $request->input('CategoryID'),
            'IsActive' => $request->input('IsActive'),
        ]);

        $course->save();
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
    public function edit($CourseID)
    {
        $Categorys = Category::all();
        $Instructors = Instructor::all();
        $Courses = Course::find($CourseID);

        if ($Courses) {
            return view('courses.edit', compact('Courses', 'Instructors', 'Categorys'));
        } else {
            // Handle the case where the course with the specified CourseID is not found.
            // You can redirect the user or show an error message.
        }
    }

    public function update(Request $request, $CourseID)
    {
        $request->validate([
            'CourseName' => 'required',
            'Description' => 'required',
            'StartDate' => 'required',
            'EndDate' => 'required',
            'Price' => 'required',
            'Level' => 'required',
            'CategoryID' => 'required',
            'IsActive' => 'required',
        ]);

        $course = Course::find($request->CourseID);

        if (!$course) {
            return redirect()->route('courses.index')->with('failed', 'Course Not Updated ');
        }

        $course->update([
            'CourseName' => $request->input('CourseName'),
            'Description' => $request->input('Description'),
            'StartDate' => $request->input('StartDate'),
            'EndDate' => $request->input('EndDate'),
            'Price' => $request->input('Price'),
            'Level' => $request->input('Level'),
            'CategoryID' => $request->input('CategoryID'),
            'IsActive' => $request->input('IsActive'),
        ]);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }


    public function delete($CourseID)
    {
        $course = Course::find($CourseID);

        if ($course) {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
        } else {
        }
    }
    public function files($CourseID)
{
    $files = CourseFiles::where('CourseID', '=', $CourseID)->get();

    if ($files->count() > 0) {
        return view('courses.files', compact('files'));
    } else {
        return view('courses.files', compact('files'));
    }
}
public function uploadfiles($CourseID)
{
    if (isset($CourseID)) {
        return view('courses.uploadfiles', compact('CourseID'));
    }
}

public function fileupload(Request $request)
{
    $request->validate([
        'ResourceType' => 'required',
        'ResourceFile' => 'required|file|mimes:pdf,doc,docx,mp4,avi,mov|file|max:102400',
        'FileName' => 'required',
    ]);

    $resource = new CourseFiles();
    $resource->CourseID = $request->input('CourseID');
    $resource->ResourceType = $request->input('ResourceType');
    $resource->FileName = $request->input('FileName');
    if ($request->hasFile('ResourceFile')) {
        $file = $request->file('ResourceFile');
        $fileName = $file->getClientOriginalName();
        $file->storeAs('', $fileName, 'public');
        $resource->ResourceFile = $fileName;
    } else {
        \Log::info('No file uploaded.');
    }
    $resource->save();
    return response()->json(['message' => 'Resource added successfully']);
}


}
