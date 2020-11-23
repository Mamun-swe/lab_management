<?php

use Illuminate\Support\Facades\Route;

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

// Auth Controllers
Route::get('/register', 'AuthController@registerView')->name('register');
Route::post('/register', 'AuthController@registration')->name('register');

Route::get('/', 'AuthController@loginView')->name('login');
Route::post('/login', 'AuthController@login')->name('login');
Route::post('/logout', 'AuthController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');
