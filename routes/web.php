<?php

Route::get('/', 'FirstController@index');

Route::get('/about', 'FirstController@about');


Route::get('/article/{id}', 'FirstController@article')->where('id', '[0-9]+');

Route::get('/photos/create', 'FirstController@create')->middleware('auth');
Route::post('/photos', 'FirstController@store')->middleware('auth');;


Auth::routes();

