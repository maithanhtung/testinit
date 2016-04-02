<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

route::get('/student', 'ExamController@viewStudent')->name('student');

route::get('/teacher', 'ExamController@viewTeacher')->name('teacher');

route::get('/teacher/exam/{id}', 'ExamController@getSignupTeacher')->name('getSignupTeacher');

route::get('/teacher/exam/{id}/update', 'ExamController@getUpdateExam')->name('getUpdateExam');

route::post('/teacher/exam/{id}/update', 'ExamController@postUpdateExam')->name('postUpdateExam');

route::get('/student/exam/{id}', 'ExamController@getSignupStudent')->name('getSignupStudent');

route::post('/student/exam/{id}', 'ExamController@postSignupStudent')->name('postSignupStudent');

route::get('/student/exam/{id}/delete', 'ExamController@getDelSignupStudent')->name('getDelSignupStudent');

route::post('/student/exam/{id}/delete', 'ExamController@postDelSignupStudent')->name('postDelSignupStudent');

route::get('/addexam', function(){
	return view('addexam');
})->name('addexam');

route::delete('/{id}', array('uses' => 'ExamController@delExam', 'as' => 'Delexam'));

route::post('/addexam','ExamController@postExam')->name('postExam');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
