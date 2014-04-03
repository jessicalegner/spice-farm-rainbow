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

Route::get('/login', array('as' => 'login','uses' => function()
{
    return View::make('forms/login');
}));

Route::post('/auth/login', array('as' => 'handleLogin', 'uses' => 'AuthController@login'));

Route::group(array('before' => 'auth'), function() {

	Route::get('/auth/logout', 'AuthController@logout');

	Route::get('/spice/new', 'SpiceController@newSpice');
	Route::get('/spice/new/{upc}', 'SpiceController@newSpiceWithData');
	Route::post('/spice/add', array('as' => 'handleAddSpice', 'uses' => 'SpiceController@store'));
	Route::get('/spice/destroy/{id}', array('as' => 'handleDeleteSpice', 'uses' => 'SpiceController@destroy'));

	Route::get('/', 'SpiceController@userInventory');

});