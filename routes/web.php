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

Route::get('/welcome', function () {
	    return view('/layout/master');
});

Route::get('/','bladecontroller@modal');


Route::post('/sendmail','mailcontroller@send');

Route::post('/joinmail','joincontroller@send');


Route::post('/proposemail','proposecontroller@send');
