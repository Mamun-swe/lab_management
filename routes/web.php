<?php

use Illuminate\Support\Facades\Route;


// App Controllers
Route::get('/', 'AppController@index')->name('index');

// Auth Controllers
Route::post('/login', 'Auth\AuthController@login')->name('login');
Route::get('/register', 'Auth\AuthController@registerView')->name('register');
Route::post('/register', 'Auth\AuthController@register')->name('register');
Route::post('/logout', 'Auth\AuthController@logout')->name('logout');

// Admin Controller
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');
    // Teacher
    Route::get('/teacher', 'Admin\TeacherController@index')->name('teacher');
    Route::get('/teacher/create', 'Admin\TeacherController@create')->name('teacher.create');
    Route::post('/teacher/store', 'Admin\TeacherController@store')->name('teacher.store');
    Route::get('/teacher/show/{id}', 'Admin\TeacherController@show')->name('teacher.show');
    Route::post('/teacher/assign/course', 'Admin\TeacherController@assignCourse')->name('teacher.assign.course');
    // Student
    Route::get('/student', 'Admin\StudentController@index')->name('student');
    Route::get('/student/create', 'Admin\StudentController@create')->name('student.create');
    Route::post('/student/store', 'Admin\StudentController@store')->name('student.store');
    // Section
    Route::get('/section', 'Admin\SectionController@index')->name('section');
    Route::get('/section/create', 'Admin\SectionController@create')->name('section.create');
    Route::post('/section/store', 'Admin\SectionController@store')->name('section.store');
     // Course
     Route::get('/course', 'Admin\CourseController@index')->name('course');
     Route::get('/course/create', 'Admin\CourseController@create')->name('course.create');
     Route::post('/course/store', 'Admin\CourseController@store')->name('course.store');
});

// Student Controller
Route::group(['prefix'=>'student','as'=>'student.', 'middleware' => ['auth']], function(){
    Route::get('/dashboard', 'Student\DashboardController@index')->name('dashboard');
});