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

//logout

Route::get('/logout', 'AdminController@logout');


Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//admin login
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
//viewprofile
Route::get('/viewprofile', 'ViewprofileController@viewprofile');
//settings
Route::get('/settings', 'SettingsController@settings');


//allteacher
Route::get('/allteacher', 'TeacherController@allteacher');
//addstudent
Route::get('/addstudent', 'AddstudentsController@addstudent');
Route::post('/save_student', 'AddstudentsController@savestudent');

//allstudent
Route::get('/allstudent', 'AllstudentsController@allstudent');
//tution fee
Route::get('/tutionfee', 'TutionController@tutionfee');
//result
Route::get('/result', 'ResultController@result');
//CSE,CSSE,CIS,BBA,EEE
Route::get('/cse', 'CSEController@cse');
Route::get('/csse', 'CSSEController@csse');
Route::get('/cis', 'CISController@cis');
Route::get('/bba', 'BBAController@bba');
Route::get('/eee', 'EEEController@eee');



