<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('home');
});


Route::get('/edulevels','EdulevelController@data');
Route::get('/edulevels/add','EdulevelController@add');
Route::post('/edulevels','EdulevelController@addProcess');
Route::get('/edulevels/edit/{id}','EdulevelController@edit');
Route::put('edulevels/{id}','EdulevelController@update');
Route::delete('edulevels/{id}','EdulevelController@delete');