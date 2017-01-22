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

Route::get('/', function () {
	    return view('/layout/project') ;
});
Route::post('/sendmail', function (\illuminate\Http\Request $request){
	Mail::to($request->input('email'))
		->send(new \App\Mail\MyMail(($request->input('email')),($request->input('bisnis')),($request->input('overview'))));
	return redirect()->back();
})->name('sendmail');
Route::post('/joinmail',function(\illuminate\Http\Request $request){
	Mail::to($request->input('email'))
		->send(new \App\Mail\joinmail(($request->input('email')),($request->input('bidang')),($request->input('upload')),($request->input('letter'))));
	return redirect()->back();
})->name('joinmail');
Route::post('/proposemail', function (\illuminate\Http\Request $request){
	Mail::to($request->input('email'))
		->send(new \App\Mail\proposemail(($request->input('email')),($request->input('bisnis')),($request->input('overview'))));
	return redirect()->back();
})->name('proposemail');