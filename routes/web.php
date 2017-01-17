<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/latihan', function () {
    return view('latihan');
});
Route::get('/haloworld', 'CommentsController@haloWorld');
Route::get('/myprofile',function()
{
	return view('myprofile');
});
Route::get('/master', 'masterController@index');
Route::get('/master/{id}', 'masterController@show');
