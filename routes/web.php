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

use Illuminate\Support\Facades\Auth;
use App\StudentDetail;

Route::get("/", "LoginController@index");
Route::post("/", "LoginController@login");

Route::get("/logout", "LoginController@logout");
Route::get('/reset-password', function () {
    return view('reset-password');
});



Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () {

    
    // Route::get("/", "ProfileController@test1");
    // Route::post("/", "ProfileController@test2");
    ///////////////////////////////////////////
    Route::get("/drive", "DriveController@index");
    Route::get("/drive/create", "DriveController@create");
    Route::post("/drive/create", "DriveController@store");
    Route::get("/drive/{id}", "DriveController@show");
    Route::post("/drive/{id}/file", "FileUploadController@store")->name('admin.drive.fileupload');
    Route::get("/drive/delete/{id}", "DriveController@destroy");
    //todo>>>>
    Route::get("/drive/{id}/edit", "DriveController@edit");
    Route::put("/drive/{id}/edit", "DriveController@update");
    

    ////////////////////////////////////////////////

    Route::get("/department", "DepartmentController@index");
    Route::post("/department", "DepartmentController@store");
    Route::get('/department/{id}', 'DepartmentController@show');
    Route::get('/department/delete/{id}', 'DepartmentController@destroy');
    //////////////////////////////////////////
    Route::get("/exam", "ExamController@index");
    Route::get("/exam/create", "ExamController@create");
    Route::post("/exam/create", "ExamController@store");
    Route::get('/exam/{id}', 'ExamController@show');
    Route::get('/exam/delete/{id}', 'ExamController@destroy');
    ////////////////////////////////////////////

    Route::get('/training', 'TrainingController@index');
    Route::get('/training/create', 'TrainingController@create');
    Route::post('/training/create', 'TrainingController@store');
    Route::get('/training/{id}', 'TrainingController@show');
    Route::get('/training/delete/{id}', 'TrainingController@destroy');
    ///////////////////////////////////////////////
    Route::get('/batches', 'BatchController@index');
    Route::post('/batches', 'BatchController@store');
    ////////////////////////////////////////////////
    Route::get("/search", "SearchController@search");
    Route::post("/search", "SearchController@result");

    //////////////////////////////////////////////////
    Route::get("/files", "FileUploadController@index")->name('admin.file');
    Route::get("/files/create", "FileUploadController@create")->name('admin.file.create');
    Route::post("/files/create", "FileUploadController@store")->name('admin.file.store');
    Route::post("/fileaction","FileUploadController@file_action")->name('file_action');


});

Route::group(['prefix' => 'hod', 'middleware' => 'is_hod'], function () {
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
    Route::get("/faculty", "FacultyController@index");
    Route::post("/faculty", "FacultyController@store");
});




Route::group(['prefix' => 'student', 'middleware' => 'is_student'], function () {
    
    Route::get("/", "ProfileController@showStudentProfile");
    Route::get("/fillprofile", "ProfileController@fillProfile");
    Route::post("/completeprofile", "ProfileController@completeProfile");
    Route::get("/exam", "ExamController@index_student");
    Route::get("/attend/{id}", "ExamController@attend");
    Route::post("/attend/{id}", "ExamController@attend");
    Route::delete("/attend/{id}", "ExamController@end");
    Route::post("/eval/{id}","ExamController@evaluate");

    Route::get("/drive", "RegistrationController@index");
    Route::get("/drive/register/{id}", "RegistrationController@register");
    Route::post("/drive/register/{id}", "RegistrationController@savereg");
    // Route::get("/test", "ExamController@test");
    Route::get('/test', function () {
        $user = Auth::user();
        $userdata = StudentDetail::where('admission_number', $user->admission_number)->firstOrFail();
        //dd($userdata);
        return view('student.test', compact('user', 'userdata'));
        // return view('student.test');
    });

    Route::get('/lay', function () {
        $user = Auth::user();
        $userdata = StudentDetail::where('admission_number', $user->admission_number)->firstOrFail();
        //dd($userdata);
        return view('student.layout', compact('user', 'userdata'));
    });
});

Route::group(['prefix' => 'faculty'], function () {
    Route::get('/', function () {
        return view('faculty.home');
    });
    Route::get('/subjects','SubjectController@index');
    Route::post('/subjects','SubjectController@store');
    Route::get('/subjects/{id}','SubjectController@show')->name('subject.show');
    Route::get('/subjects/{id}/questions/create','QuestionController@create')->name('question.create');
    Route::post('/subjects/{id}/questions/create','QuestionController@store')->name('question.store');
    Route::get('/subjects/delete/{id}','SubjectController@delete')->name('subject.delete');
    Route::post('image/upload','QuestionController@imageHandler')->name('faculty.image.upload');

});

Route::group(['prefix' => 'classrep'], function () {
    Route::get('/', function () {
        return view('classrep.home');
    });
});
