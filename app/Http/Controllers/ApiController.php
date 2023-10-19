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
use App\Models\Payments;
use App\Models\Enrollments;
use App\Models\Resource;


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

        return response()->json(['message' => 'Registration successful','Student'=>$student, 'User' => $user]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('Email', 'password');
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

    // Import the Payment model


    public function PaymentSuccess(Request $request)
    {
        $course = Course::find($request['CourseID']);

        if (!$course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        $paymentData = $request->validate([
            'UserID' => 'required',
            'CourseID' => 'required',
            'Amount' => 'required',
            'PaymentMethod' => 'required',
            'TransactionID' => 'required',
        ]);
        $payment = Payments::create($paymentData);
        $enrollmentData = [
            'UserID' => $paymentData['UserID'],
            'CourseID' => $paymentData['CourseID'],
            'EnrollmentDate' => now(),
            'CompletionStatus' => 'Started',
            'Grade' => null,
        ];
        $enrollment = Enrollments::create($enrollmentData);
        return response()->json([
            'message' => 'Payment and enrollment recorded successfully',
            'payment' => $payment,
            'enrollment' => $enrollment,
        ], 201);
    }
    public function ListPurchasedCourses(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $purchasedCourses = Enrollments::where('UserID', $user->id)
            ->with('course')
            ->get();
        return response()->json(['purchasedCourses' => $purchasedCourses], 200);
    }

    public function ListPurchasedCoursesFiles(Request $request)
    {
        $CourseID = $request->input('CourseID');
        $StudentID = $request->input('StudentID');
        $user = Student::find($StudentID);
        $Course = Course::find($request->input('CourseID'));
        $Resources = Resource::where('UserID', $user->id)->where('CourseID', '=', $Course->CourseID)->get();
            response()->json(['resources' => $Resources], 200);
            exit();
            $Payment = Payments::where('UserID', $user->id)->where('CourseID', '=', $Course->CourseID)->get();
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        if (!$Course) {
            return response()->json(['message' => 'Course not found'], 404);
        }
        if (!$Payment) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
        if (!$Resources) {
            return response()->json(['message' => 'Is Not Purchased'], 404);
        }
        return response()->json(['CoursesFiles' => $Course], 200);
    }


    public function searchCourses(Request $request)
    {
        $searchQuery = $request->query('CourseName');
        $filterCategory = $request->query('Category');
        $courses = Course::where('CourseName', 'like', "%$searchQuery%");
        if ($filterCategory) {
            $courses->whereHas('categories', function ($query) use ($filterCategory) {
                $query->where('Category', $filterCategory);
            });
        }
        $result = $courses->paginate(10);
        return response()->json(['courses' => $result], 200);
    }
    public function searchResources(Request $request)
    {
        $searchCourseID = $request->query('CourseID');
        $searchResourceType = $request->query('ResourceType');
        $resources = Resource::query();
        if ($searchCourseID) {
            $resources->where('CourseID', $searchCourseID);
        }
        if ($searchResourceType) {
            $resources->where('ResourceType', $searchResourceType);
        }
        $result = $resources->paginate(10);
        return response()->json(['resources' => $result], 200);
    }
    public function myProfile(Request $request)
    {
        $user = User::find($request->input('UserID'));

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $purchasedCourses = Course::whereHas('enrollments', function ($query) use ($user) {
            $query->where('UserID', $user->id);
        })->get();

        $paymentHistory = Payments::where('UserID', $user->id)->get();

        return response()->json([
            'user' => $user,
            'purchasedCourses' => $purchasedCourses,
            'paymentHistory' => $paymentHistory,
        ], 200);
    }

}

// $users = DB::table('users')
// ->where('name', 'John') // First condition
// ->where('age', '>=', 25) // Second condition
// ->get();
// $users = User::where('name', 'John') // First condition
// ->where('age', '>=', 25)          // Second condition
// ->get();
