<?php

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


Route::get("/", "LoginController@index");
Route::post("/", "LoginController@login");

Route::get("/logout", "LoginController@logout");
Route::get('/reset-password', function () {
    return view('reset-password');
});



Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {

    Route::get("/drive", "DriveController@index");
    Route::get("/drive/create", "DriveController@create");
    Route::put("/drive/create", "DriveController@store");
    Route::get("/drive/{id}", "DriveController@show");

    //todo>>>>
    Route::get("/drive/{id}/edit", "DriveController@edit");
    Route::put("/drive/{id}/edit", "DriveController@update");
    Route::delete("/drive/{id}", "DriveController@destroy");

    ////////////////////////////////////////////////

    Route::get("/department", "DepartmentController@index");
    Route::post("/department", "DepartmentController@store");
});

Route::group(['prefix' => 'hod'], function () {
    Route::get('/', function () {
        return view('hod.home');
    });

    Route::get('/file-upload', function () {
        return view('hod.fileupload');
    });


    Route::post("/file-upload", "FileUploadController@import");


    Route::get('/create-drive', function () {
        return view('admin.createdrive');
    });

    Route::post('/create-drive', 'DriveController@create');
});




Route::group(['prefix' => 'student', 'middleware' => 'is_student'], function () {
    Route::get("/", "ProfileController@showStudentProfile");
    Route::get('/exam', function () {
        return view('student.exam');
    });

});

Route::group(['prefix' => 'tutor'], function () {
    Route::get('/', function () {
        return view('tutor.home');
    });
});

Route::group(['prefix' => 'classrep'], function () {
    Route::get('/', function () {
        return view('classrep.home');
    });
});
