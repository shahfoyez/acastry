<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\ClassroomPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
        Route::get('/classroomIndustryWorks/{classroom}', 'showMaterial');
        Route::get('/classroomPeople/{classroom}', 'showPeople');
        Route::get('/classroomDiscussion/{classroom}', 'showDiscussion');
        Route::get('/classroomGrades/{classroom}', 'showGrades');
    });

    // ClassroomPost Controller Group
    Route::controller(ClassroomPostController::class)->group(function () {
        Route::post('/addClassroomPost/{classroom}', 'store');
        Route::post('/deletePost/{post}', 'destroy');
    });
    // PostCommentController Group
    Route::controller(PostCommentController::class)->group(function () {
        Route::post('/addPostComment/{post}', 'store');
        Route::get('/deletePostComment/{postComment}', 'destroy');
    });



    // ClassworkController Group
    Route::controller(PostCommentController::class)->group(function () {
        Route::post('/addPostComment/{post}', 'store');
        Route::get('/deletePostComment/{postComment}', 'destroy');
    });
     
    Route::get('/classrooms', function () {
        return view('classrooms');
    });
    Route::get('/industryWorkDashboard', function () {
        return view('industryWorkDashboard');
    });
    Route::get('/studentWork', function () {
        return view('studentWork');
    });
    Route::get('/studentWorkSingle', function () {
        return view('studentWorkSingle');
    });

    // // Controller Group
    // Route::controller(ExampleController::class)->group(function () {
    //     Route::get('', 'create');
    //     Route::get('', 'store');
    // });

    // // Middleware group for Teacher role
    // Route::middleware(['role:teacher,null'])->group(function () {

    // });

    // // Middleware group for industry role
    // Route::middleware(['role:null,industry'])->group(function () {

    // });

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
