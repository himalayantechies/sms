<?php

use App\Http\Controllers\API\AuthController;
// use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\NoticeBoardController;
use App\Http\Controllers\API\RoutineController;
use App\Http\Controllers\API\CommonController;
use App\Http\Controllers\API\ExamController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/events', [EventController::class, 'index']);
    Route::post('/events/store', [EventController::class, 'store']);
    Route::get('/events/{id}', [EventController::class, 'show']);
    Route::post('/events/update/{id}', [EventController::class, 'update']);
    Route::post('/events/delete/{id}', [EventController::class, 'destroy']);
    
    
    // Noticeboard Route
    Route::get('/noticeboards', [NoticeBoardController::class,'index']);

    // Classroutine Route
    
    Route::get('/classroutine/{class_id}/{section_id}',[RoutineController::class, 'index'] );
    
    // Exam Routine Route
    Route::get('/examroutine/{class_id}/{exam_id}',[RoutineController::class, 'getExamRoutine'] );
    
    // Class Section Route
    Route::get('/classSection/{school_id}',[CommonController::class, 'getClassSectionList'] );

    // Class Exam Route
    Route::get('/classExams/{school_id}',[CommonController::class, 'getClassExamList'] );
    
    //Class Subjects
    Route::get('/classSubjects/{school_id}',[CommonController::class, 'getClassSubjectsList'] );

    //Get Enrolled Students
    Route::get('/enrolledStudents/{school_id}/{class_id}/{section_id}',[CommonController::class, 'getEnrolledStudents'] );

    //Get Exam Details
    Route::get('/getExamDetails/{school_id}/{class_id}/{subject_id}/{exam_id}',[CommonController::class, 'getExamDetails'] );

    //Exam Marks Update
    Route::post('/exam/marks/update',[ExamController::class, 'marks_update'] );
});
