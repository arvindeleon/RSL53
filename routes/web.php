<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/setupwizard', function(){
	return view('includes.first_wizard');
})->middleware('auth');
Route::get('/', function () {
    return view('pages.frontend.index');
})->middleware('auth', 'auth.first');
Route::get('/backend', function () {
    return view('pages.backend.index');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth.admin');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'auth.admin']] ,function() {
	Route::get('/', 'AdminController@index');
});
Route::group(['prefix' => 'teacher', 'middleware' => ['auth', 'auth.teacher']], function(){

});
Route::group(['prefix' => 'student', 'middleware' => ['auth', 'auth.student', 'auth.first']], function(){
	
});