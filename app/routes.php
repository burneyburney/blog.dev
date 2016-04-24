<?php

 /*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.2
|
*/


Route::get('/', 'PostsController@index');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');
Route::get('/rollDice/{guess}', 'HomeController@showRollDice');
Route::get('/throwDie/{guess}', 'HomeController@randomGuess');
Route::get('/whackamole', 'HomeController@showWhackamole');
// did this in class instead of using the ONE line
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts/store','PostsController@store');

Route::get('/posts/{post}','PostsController@show');
Route::get('/posts/{post}/edit','PostsController@edit');
Route::put('/posts/{post}','PostsController@update');
Route::delete('/posts/{post}','PostsController@destroy');
