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

	Route::get('product/{upc}', function($upc)
	{
		$client = new \Guzzle\Service\Client('http://api.v3.factual.com/t/products-cpg?q="' . $upc . '"}');
		$auth = new \Guzzle\Plugin\Oauth\OauthPlugin([
			'consumer_key' => 'HixxECiJzhDAITGTerWl0yiHDgJAY3gJNiViLjEH',
			'consumer_secret' => 'YBMZ3BPgVWqMU5gB6FUkwwwVoT7lYYcYZinWPJms'
		]);
		$client->addSubscriber($auth);
		$response = $client->get()->send();
		$product = $response->json()['response']['data'];

		dd($product);
	});

	Route::get('/', 'SpiceController@userInventory');

});