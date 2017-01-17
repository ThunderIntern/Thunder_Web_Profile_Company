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

Route::get('/', function () {
	    return view('welcome');
});

Route::get('/asiqi', function () {
	    return "laravelku";
});

Route::get('/blog', 'BlogController@index');
Route::get('/blog/{id}', 'BlogController@show');

Route::get('/project', function () {
	    return view('asd') ;
});

Route::get('/qwerty', function () {
	    return view('model') ;
});

Route::get('/erd', function () {
	    return view('asw') ;
});

Route::get('/pro', function () {
	    return view('/layout/project') ;
});