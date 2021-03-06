<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use melblaravel\Http\Requests\Request;

\DB::listen(function($sql) {
    //var_dump($sql);
});

Route::get('/', function () {
    return view('welcome');
});




Route::resource('blogs', 'PostController');
Route::resource('dashboard', 'Admin\DashboardController');
Route::get('blogs/user/{id}', 'PostController@userPosts');
Route::get('blogs/adminPosts/{id}', 'PostController@adminPosts');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
