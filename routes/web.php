<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/homee', function () {
    return view('welcome');
});

// Route::get('/log', 'authenticateController@signup')-name('log');

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Auth::routes();


Route::get('/logins', 'joinUsController@show');

Route::post('sign', 'joinUsController@store');

 Route::get('/sign', 'joinUsController@create');
// Route::get('/', 'joinUsController@index');



