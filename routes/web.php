<?php

use App\Models\IWSubmissionGrade;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\IndustryWorkController;
use App\Http\Controllers\ClassroomPostController;
use App\Http\Controllers\IWSubmissionGradeController;
use App\Http\Controllers\AssignmentSubmissionController;
use App\Http\Controllers\IndustryWorkSubmissionController;
use App\Http\Controllers\ClassIndustryWorkCommentController;
use App\Http\Controllers\AssignmentSubmissionGradeController;

// guest Middleware Group
Route::middleware(['guest'])->group(function () {
    Route::controller(SessionController::class)->group(function () {
        Route::get('/login', 'loginCreate')->name('login');
        Route::get('/register', 'registerCreate')->name('register');
        Route::post('/createAccount', 'store');
        Route::post('/session', 'check');
    });
});
// auth Middleware Group
Route::middleware(['auth'])->group(function () {
    // Route::get('/', function () {
    //     return view('dashboard');
    // });

    // Classroom Controller Group
    Route::controller(ClassroomController::class)->group(function () {
        Route::get('/', 'index');
        Route::post('/createClassroom', 'store');
        Route::post('/joinClassroom', 'joinClass');
        Route::get('/pinClass/{classroom}', 'pinClass');
        Route::get('/unpinClass/{classroom}', 'unpinClass');
        Route::get('/unpinClass/{classroom}', 'unpinClass');
        Route::post('/deleteClassroom/{classroom}', 'deleteClass');
        Route::get('/classroomStream/{classroom}', 'showStream');
        Route::get('/classroomClassworks/{classroom}', 'showClasswork');
        Route::get('/classroomMaterials/{classroom}', 'showMaterial');
        Route::get('/classroomIndustryWorks/{classroom}', 'showMaterial');
        Route::get('/classroomPeople/{classroom}', 'showPeople');
        Route::get('/classroomDiscussion/{classroom}', 'showDiscussion');
        Route::get('/classroomGrades/{classroom}', 'showGrades');
        Route::get('/assignmentSubmit/{post}', 'assignmentSubmitView');
        Route::get('/assignmentSubmissions/{post}', 'assignmentSubmissionView');
        Route::get('/assignmentSubmissionSingle/{user}/{assignment}', 'assignmentSubmissionSingle');
        Route::get('/classRelatedWork/{classroom}', 'relatedWork');
        Route::get('/classAddedWork/{classroom}', 'addedWork');
        Route::get('/classIndustryAdd/{classroom}/{industryWork}', 'classIndustryAdd');
        Route::get('/classIndustrySubmit/{classroomIndustryWork}', 'classIndustrySubmit');
        Route::get('/classIndustryDetails/{classroom}/{industryWork}', 'classIndustryDetails');
        Route::get('/classIndustrySubmissions/{classroomIndustryWork}', 'classIndustrySubmissionsView');
        Route::get('/classIndustrySubmissionSingle/{user}/{industryWork}/{classroom}/{submission}', 'classIndustrySubmissionSingle');
        Route::get('/classTeaching/{user}', 'classTeaching');
        Route::get('/classJoined/{user}', 'classJoined');
        Route::get('/classroomstar/{user}/{assignment}/{classroom}', 'classroomStar');
        Route::get('/classroomStarRemove/{user}/{assignment}/{classroom}', 'classroomStarRemove');
        Route::get('/classIndustryStar/{user}/{classroomIndustryWork}/{classroom}', 'classIndustryStar');
        Route::get('/classIndustryStarRemove/{user}/{classroomIndustryWork}/{classroom}', 'classIndustryStarRemove');
        Route::get('/classroomPeople/{classroom}', 'classroomPeople');
        Route::get('/teacherStars/{user}', 'teacherStars');



    });

    // ClassroomPost Controller Group
    Route::controller(ClassroomPostController::class)->group(function () {
        Route::post('/addClassroomPost/{classroom}', 'store');
        Route::post('/deletePost/{post}', 'destroy');
    });

    // AssignmentController Group
    Route::controller(AssignmentController::class)->group(function () {
        Route::post('/createAssignment/{classroom}', 'store');
    });
    // AssignmentSubmissionController Group
    Route::controller(AssignmentSubmissionController::class)->group(function () {
        Route::post('/addAssignmentSubmission/{assignment}', 'store');
    });

    // MaterialController Group
    Route::controller(MaterialController::class)->group(function () {
        Route::post('/createMaterial/{classroom}', 'store');
    });

    // PostCommentController Group
    Route::controller(PostCommentController::class)->group(function () {
        Route::post('/addPostComment/{post}', 'store');
        Route::post('/addAssignmentPublicComment/{assignment}', 'addAssignmentPublicComment');
        Route::post('/addAssignmentPrivateComment/{assignment}', 'addAssignmentPrivateComment');
        Route::get('/deletePostComment/{postComment}', 'destroy');
    });

     // IndustryWorkController Group
     Route::controller(IndustryWorkController::class)->group(function () {
        Route::post('/createIndustryWork', [IndustryWorkController::class, 'store']);
        Route::get('/industrySubmit/{industryWork}', 'industrySubmitView');
    });
     // ClassIndustryWorkCommentController Group
     Route::controller(ClassIndustryWorkCommentController::class)->group(function () {
        Route::post('/addIndustryPublicComment/{classroomIndustryWork}', 'addIndustryPublicComment');
        Route::post('/addIndustryPrivateComment/{classroomIndustryWork}', 'addIndustryPrivateComment');
        Route::get('/deleteIndustryComment/{classroomIndustryWork}', 'destroy');
    });

    Route::controller(IndustryWorkSubmissionController::class)->group(function () {
        Route::post('/addIndustrySubmission/{classroomIndustryWork}', 'store');
        Route::get('/industryAllSubmissions/{industryWork}', 'industryAllSubmissionsView');
        Route::get('/industrySubmissionSingle/{user}/{industryWork}/{submission}', 'industrySubmissionSingle');
    });


    // AssignmentSubmissionGradeController Group
    Route::controller(AssignmentSubmissionGradeController::class)->group(function () {
        Route::post('/gradeSubmit/{assignmentSubmission}', 'store');
    });

    // AssignmentSubmissionGradeController Group
    Route::controller(IWSubmissionGradeController::class)->group(function () {
        Route::post('/industryGradeSubmit/{industryWorkSubmission}', 'store');
    });



    // IWSubmissionGrade Group
    // Route::controller(IWSubmissionGradeController::class)->group(function () {
    //     Route::post('/industryGradeSubmit/{ industryWorkSubmission}', 'store');
    // });

    // TopicController Group
    Route::controller(TopicController::class)->group(function () {
        Route::post('/createTopic/{classroom}', 'store');
    });

    // PostCommentController Group
    Route::controller(PostCommentController::class)->group(function () {
        Route::post('/addPostComment/{post}', 'store');
        Route::post('/addAssignmentPublicComment/{assignment}', 'addAssignmentPublicComment');
        Route::post('/addAssignmentPrivateComment/{assignment}', 'addAssignmentPrivateComment');
        Route::get('/deletePostComment/{postComment}', 'destroy');
    });

    // logout
    Route::get('/logout', [SessionController::class, 'destroy']);
});

// Route::group(['prefix' => 'mt','middleware'=>'language'], function() {
//     Route::get('/', 'HomeController@index');
//     Route::get('/login','AuthController@login');
//     Route::post('/login','AuthController@do_login');
//     Route::get('/logout','AuthController@logout');
//     Route::group(['prefix' => 'checkout','middleware'=>'authentication'], function () {
//        Route::get('/', "CheckoutController@step1");
// });
