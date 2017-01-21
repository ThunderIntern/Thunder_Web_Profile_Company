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
	    return view('welcome');
});

Route::get('/', function () {
	    return view('/layout/project') ;
});
Route::post('/sendmail', function (\illuminate\Http\Request $request){
	// dd($request);
	Mail::to($request->input('email'))
		->send(new \App\Mail\MyMail(($request->input('email')),($request->input('bisnis')),($request->input('overview'))));
	return redirect()->back();
})->name('sendmail');