<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'], function(){
    Route::get('/', 'DashboardController@index');
    Route::post('/', 'DashboardController@updateAvatar');
    Route::get('/profile/edit/{id}', ['uses'=>'DashboardController@edit', 'as'=>'profile-edit']);
    Route::put('/profile/edit/{id}', ['uses'=>'DashboardController@update', 'as'=>'profile-update']);
    Route::get('/profile/mylocation/', 'DashboardController@location');

    Route::get('/course', 'Course\CourseController@index');
    Route::get('/course/create', 'Course\CourseController@create');
    Route::post('/course/store', 'Course\CourseController@store');
    Route::get('/course/edit/{id}', ['uses'=>'Course\CourseController@edit', 'as'=>'course-edit']);
    Route::put('/course/update/{id}', ['uses'=>'Course\CourseController@update', 'as'=>'course-update']);
    Route::delete('/course/delete/{id}', ['uses'=>'Course\CourseController@destroy', 'as'=>'course-delete']);

    Route::get('/message', 'Course\MessageController@index');
    Route::get('/message/sent', 'Course\MessageController@sent');
    Route::get('/message/create', 'Course\MessageController@create');
    Route::get('/message/read/{id}', 'Course\MessageController@read');
    Route::post('/message/store', 'Course\MessageController@store');
    Route::delete('/message/delete/{id}', ['uses'=>'Course\MessageController@destroy', 'as'=>'message-delete']);

    Route::get('/notification', 'MynotificationController@index');

    Route::get('/course/view/{id}', 'Course\CourseController@view');
    Route::post('/course/view/{id}', ['uses'=>'Course\CourseController@updateCoursePhoto', 'as'=>'course-photo-update']);
    Route::get('/course/view/{id}/video', 'Course\CourseController@video');

    Route::get('/course/view/{id}/notice', 'Course\NoticeController@index');
    Route::get('/course/view/{id}/notice/create', 'Course\NoticeController@create');
    Route::post('/course/view/{id}/notice/store', 'Course\NoticeController@store');
    Route::delete('/course/view/{id}/notice/delete/{id1}', ['uses'=>'Course\NoticeController@destroy', 'as'=>'notice-delete']);


    Route::get('/course/view/{id}/note', 'Course\NoteController@index');
    Route::get('/course/view/{id}/note/create', 'Course\NoteController@create');
    Route::post('/course/view/{id}/note/store', ['uses'=>'Course\NoteController@store', 'as'=>'course-note-upload']);
    // Route::post('/course/view/{id}/note/store', 'Course\NoteController@store');
    Route::delete('/course/view/{id}/note/delete/{id1}', ['uses'=>'Course\NoteController@destroy', 'as'=>'notice-delete']);

    
    Route::get('/course/view/{id}/student/', 'Course\CourseController@courseStudent');

    Route::get('/course/view/{id}/student/{id1}/edit', 'Course\CourseController@courseStudentEdit');
    Route::put('/course/view/{id}/student/{id1}/edit', ['uses'=>'CourseController@courseStudentUpdate', 'as'=>'student-update']);
    
    Route::delete('/course/view/{id}/student/{id1}/delete', 'Course\CourseController@courseStudentDelete');
    
});

                            // admuin    Route 

Route::get('/backend', function () {
    return view('admin.admin_login');
});



// Route::post('/adminlogin', 'LoginController@adminLogin');
// Route::get('/admin_dashboard', 'LoginController@admin_dashboard');
// Route::get('/setting', 'SettingController@setting');
// Route::get('/viewprofile',  'ViewProfileController@view');



Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');


//admin profile




 Route::get('/setting', 'SettingController@setting');
 Route::get('/viewprofile',  'ViewProfileController@view');



// add student
Route::get('/addstudent', 'AddstudentsController@addstudent');
Route::post('/save_student', 'AddstudentsController@savestudent');
// Delete student
Route::get('/student_delete/{student_id}', 'AllstudentsController@studentdelete');
// show  all student
Route::get('/allstudent', 'AllstudentsController@allstudent');
// view student
Route::get('/viewstudent/{student_id}', 'AllstudentsController@viewstudent');
// edit student
Route::get('/edit_student/{student_id}', 'AllstudentsController@editstudent');
//update  student
Route::post('/update_student/{student_id}', 'AllstudentsController@updatestudent');







// all teacher
Route::get('/allteacher', 'TeacherController@allTeacher');
//Add teacher
Route::get('//addteacher', 'TeacherController@addTeacher');
//save teacher
Route::post('/save_teacher', 'TeacherController@saveteacher');
// delete Teacher
Route::get('/teacher_delete/{teacher_id}', 'TeacherController@deleteTeacher');
// view  Teacher
Route::get('/viewteacher/{teacher_id}', 'TeacherController@viewteacher');
// edit student
Route::get('/edit_teacher/{teacher_id}', 'TeacherController@editteacher');
//update  student
Route::post('/update_teacher/{teacher_id}', 'TeacherController@updateteacher');









// tution fee
Route::get('/tutionfee', 'tutionsController@tution');


// set exam
Route::get('/set_exam', 'SETEXAMController@setexam');
Route::get('/view_exam', 'SETEXAMController@viewexam');
// add exam
Route::post('/add_exam', 'SETEXAMController@addexam');
// delete exam
Route::get('/delete_exam/{exam_id}', 'SETEXAMController@deleteexam');




// course add 
Route::get('/cse', 'CSEController@CSE');
//delete  course
Route::get('/deletecse/{student_id}', 'CSEController@delete_cse');

Route::get('/eee', 'EEEController@EEE');
//delete  course
Route::get('/deleteeee/{student_id}', 'EEEController@delete_eee');

Route::get('/bba', 'BBAController@BBA');
//delete  course
Route::get('/deletebba/{student_id}', 'BBAController@delete_bba');

Route::get('/mba', 'MBAController@MBA');
//delete  course
Route::get('/deletemba/{student_id}', 'MBAController@delete_mba');

Route::get('/se',  'SEController@SE');
//delete  course
Route::get('/deletese/{student_id}', 'SEController@delete_se');


// library 
Route::get('/addbook', 'libraryContoller@add_book');
// add book
Route::post('/save_book', 'libraryContoller@savebook');
//show book
Route::get('/showbook', 'libraryContoller@show_book');
// issue book
Route::get('/issue_book', 'BookIssueController@issuebook');
// issued book
Route::get('/issued_book', 'BookIssueController@issuedbook');
// return book
Route::get('/return_book', 'BookIssueController@returnbook');
//delete book
Route::get('/deletebook/{id}', 'BookIssueController@delete_book');



//Accountant
Route::get('/addexpense', 'ExpenseController@add_expense');
//Accountant
Route::post('/saveexpense', 'ExpenseController@save_expense');
//account dashboard
Route::get('/accountdashboard', 'ExpenseController@dashboard');
//delete expense
Route::get('/deleteexpense/{id}', 'ExpenseController@deleteexpene');

// show expanse
Route::get('/showexpense', 'ExpenseController@show_expense');
// edit  expanse
Route::get('/editexpense', 'ExpenseController@edit_expense');