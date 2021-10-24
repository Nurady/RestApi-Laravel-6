<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/post', 'PostController@index');
Route::get('/post/{id}', 'PostController@show');
Route::post('/post', 'PostController@store');
Route::put('/post/{post}', 'PostController@update');
Route::delete('/post/{post}', 'PostController@destroy');
