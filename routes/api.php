<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/register', [ApiController::class, 'register'])->name('register');
Route::post('/login', [ApiController::class, 'login'])->name('login');
Route::middleware('auth:api')->group(function () {

});

Route::get('/ListCourse', [ApiController::class, 'ListCourse'])->name('ListCourse');
    Route::get('/SingleCourse/{id}', [ApiController::class, 'SingleCourse'])->name('SingleCourse');
    Route::post('/PaymentSuccess', [ApiController::class, 'PaymentSuccess'])->name('PaymentSuccess');
    Route::get('/ListPurchasedCourses/{id}', [ApiController::class, 'ListPurchasedCourses'])->name('ListPurchasedCourses');
    Route::Post('/ListPurchasedCoursesFiles', [ApiController::class, 'ListPurchasedCoursesFiles'])->name('ListPurchasedCoursesFiles');
    Route::Post('/allCoursesFiles/{id}', [ApiController::class, 'allCoursesFiles'])->name('allCoursesFiles');
    Route::get('/CoursesFiles/{id}', [ApiController::class, 'CoursesFiles'])->name('CoursesFiles');
    Route::get('/searchCourses', [ApiController::class, 'searchCourses'])->name('searchCourses');
    Route::get('/searchResources', [ApiController::class, 'searchResources'])->name('searchResources');
    Route::get('/myProfile', [ApiController::class, 'myProfile'])->name('myProfile');
    // myProfile
