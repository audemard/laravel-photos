<?php

Route::get('/', 'FirstController@index');

Route::get('/about', 'FirstController@about');



Auth::routes();


Route::get('/suivre/{id}','UserController@suivre')->middleware('auth')->where('id', '[0-9]+');


Route::resource('photos', 'PhotoController')->only([
    'create', 'store', 'destroy'
]);


Route::resource('users', 'UserController')->only([
   'show'
]);

Route::get('/search/{s}', 'FirstController@search');

Route::post('/users/updateoverview', 'UserController@updateoverview')->middleware('auth');

Route::get('/newuser', function() {
    return redirect("/users/".Auth::id());
});