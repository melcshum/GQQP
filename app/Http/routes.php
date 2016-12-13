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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'UserController@index', function($username){
    $user = User::where('name', $username)->firstOrFail();

    return View::make('profile')->with('user', $user);
});

Route::get('/config', 'ConfigController@index');

Route::get('/changeInfor', 'UserController@changeInfor');
Route::post('/updateInfor', 'UserController@updateInfor');

Route::get('/question', 'QuestionController@index');
Route::get('/searchQuestion', 'QuestionController@search');