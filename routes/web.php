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


Route::get('/','HomeController@main'); 
/*function () {
    return view('main');
});*/
Route::get('/pickup-location','HomeController@pickupLocation');

Route::get('/getPostalCodes','HomeController@getPostalCodes')->name('getPostalCodes');

Route::get('/viewInstructors','HomeController@viewInstructors')->name('viewInstructors');
Route::get('/displayCourses','HomeController@displayCourses');


Route::post('bookCourse','HomeController@bookCourse');