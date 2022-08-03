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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route for frontend layout
Route::group(['namespace' => 'Frontend'], function() {
    Route::get('/','PageController@homePage');
    Route::get('/contact-us','PageController@contactUs');
    Route::get('/about-us','PageController@aboutUs');
    Route::get('/services','PageController@services');
    Route::get('/facilitation-service','PageController@facilitationService');
    Route::get('/claims-service','PageController@claimsService');
    Route::get('/project-service','PageController@projectService');
    Route::get('/working','PageController@working');
});

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
