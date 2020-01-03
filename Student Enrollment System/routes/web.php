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

//Logout
Route::get('/logout', 'AdminController@logout' );



//Student Panel-----------------------------------------------------
Route::get('/', function () {
    return view('student_login');
});
Route::post('/studentlogin', 'AllstudentsController@student_login_dashboard' );

Route::get('/student_dashboard', 'AllstudentsController@student_dashboard' );

Route::get('/student_profile', 'AllstudentsController@profile_student' );

Route::get('/student_setting', 'AllstudentsController@setting_student' );

Route::post('/student_update', 'AllstudentsController@student_update' );

Route::get('/student_logout', 'AllstudentsController@logout_student' );




//Backend Login-----------------------------------------------------
Route::get('/backend', function () {
    return view('admin/admin_login');
});


//Admin Login-----------------------------------------------------
Route::post('/adminlogin', 'AdminController@login_dashboard' );
Route::get('/admindashboard', 'AdminController@admin_dashboard' );
Route::get('/viewprofile', 'AdminController@viewprofile' );
Route::get('/setting', 'AdminController@setting' );

//Students-----------------------------------------------------
Route::get('/addstudent', 'AddstudentsController@addstudent' );
Route::post('/save_student', 'AddstudentsController@savestudent' );

//  View/ Edit->Update /Delete Student
Route::get('/studentview/{student_id}', 'AllstudentsController@view_student' );
Route::get('/student_edit/{student_id}', 'AllstudentsController@edit_student' );
Route::post('/update_student/{student_id}', 'AllstudentsController@update_student' );
Route::get('/student_delete/{student_id}', 'AllstudentsController@delete_student' );


//AllStudent------------------------------------------------------
Route::get('/allstudent', 'AllstudentsController@allstudent' );
Route::get('/tuitionfee', 'TuitionController@tuitionfee' );
Route::get('/cse', 'CSEController@cse' );
Route::get('/bba', 'BBAController@bba' );
Route::get('/ece', 'ECEController@ece' );
Route::get('/eee', 'EEEController@eee' );
Route::get('/mba', 'MBAController@mba' );


//AllTeacher------------------------------------------------------
Route::get('/addteacher', 'TeacherController@add_teacher' );
Route::post('/save_teacher', 'TeacherController@saveteacher' );

Route::get('/allteacher', 'TeacherController@allteacher' );
