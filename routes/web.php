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

Route::get('/customers/index', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::get('/customers/edit/{id}', 'CustomersController@edit');
Route::get('/customers/read/{id}', 'CustomersController@read');
Route::post('/customers/create', 'CustomersController@save');
Route::put('/customers/edit', 'CustomersController@update');
