<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//
// Route::get('/', function()
// {
// 	return View::make('hello');
// });





// always return 'Hello Codeup', if a name was entered then return 'Hello (name)'
// Route::get("/sayhello/{name?}"), function($name = null)){
// 	if (!$name){
// 		return "Hello Codeup!";
// 	} else{
// 		return "Hello, $name";
// 	}
// });


// Route::get('/{resummePortfolio}'), function($resummePortfolio){
// 	if ($resummePortfolio == 'resume'){
// 		Redirect::to('/resume');
// 	} else if ($resummePortfolio == 'portfolio'){
// 		Redirect::to('/portfolio');
// 	}
// }
//

// my-first-view.php
// Route::get('/sayhello/{name?}', function($name = 'Codeup'){
// 	$data = ['name' => $name];
//     return View::make('my-first-view')->with($data);
// });


//
// Route::get('/rolldice/{guess?}', function($guess = null){
// 	$data = [
// 		'guess' => $guess
// 	];
// 	return View::make('roll-dice')->with($data);
// });
//
//

Route::get('/', 'HomeController@showWelcome');
Route::get('/resume', 'HomeController@showResume');
Route::get('/portfolio', 'HomeController@showPortfolio');
// not working right now
Route::get('/rollDice/{guess}', 'HomeController@showRollDice');

// this is gonna re route me to the page that doesnt work.
Route::get('/throwDie/{guess}', 'HomeController@randomGuess');

// GRAVEYARD //
// Route::get('/resume', function(){
// 	return View::make('resume');
// });
//
// Route::get('/portfolio', function(){
// 	return View::make('portfolio');
// });
