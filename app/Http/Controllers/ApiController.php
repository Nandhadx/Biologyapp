<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Category;
use App\Models\Instructor;
use App\Models\CourseFiles;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ApiController extends Controller
{


    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'StudentProfile' => 'required',
        'FirstName' => 'required',
        'LastName' => 'required',
        'Email' => 'required|email|unique:students',
        'password' => 'required',
        'DateOfBirth' => 'nullable|date',
        'Gender' => 'nullable|in:Male,Female,Other',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 400);
    }

    $student = new Student;
    $student->StudentProfile = $request->input('StudentProfile');
    $student->FirstName = $request->input('FirstName');
    $student->LastName = $request->input('LastName');
    $student->Email = $request->input('Email');
    $student->DateOfBirth = $request->input('DateOfBirth');
    $student->Gender = $request->input('Gender');
    $student->save();

    $user = new User;
    $user->name = $request->input('FirstName');
    $user->email = $request->input('Email');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    Auth::login($user);

    return response()->json(['message' => 'Registration successful', 'User' => $user]);
}

    public function login(Request $request)
    {
        $credentials = $request->only('Email', 'Password');
        if (Auth::attempt($credentials)) {
            return response()->json(['message' => 'Login successful', 'User' => Auth::user()]);
        }
        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Course Api 

    public function ListCourse()
    {
        $courses = Course::all();

        if ($courses->isEmpty()) {
            return response()->json(['error' => 'No courses found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($courses);
    }

    public function SingleCourse(Request $request, $CourseID)
    {
        try {
            $Singlecourse = Course::findOrFail($CourseID);
            return response()->json($Singlecourse);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Course not found'], Response::HTTP_NOT_FOUND);
        }
    }
}
