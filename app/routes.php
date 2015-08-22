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

Route::get('/', function()
{
	return View::make('index');
});
Route::post('/', 'indexController@login');
Route::get('/apply', function()
{
    return View::make('apply');
});
Route::post('/apply', 'indexController@apply');
Route::get('/norem','RemindersController@getRemind');
Route::post('/norem','RemindersController@postRemind');
Route::group(array('before' => 'auth'), function()
{
    Route::get('/control','indexController@control');
});

Route::get('/admin', function()
{
  return View::make('admin.index');  
});

Route::post('/admin', 'AdminController@login');

Route::when('*', 'csrf', array('post'));


