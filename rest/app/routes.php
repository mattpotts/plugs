<?php

use \Illuminate\Support\Facades\Redirect;

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

Route::get('/', function() {
	return Response::view('dashboard');
});

Route::get('/1/up', function() {
	$script = realpath(sprintf('%s/../gpio/up1.py', base_path()));
	$command = sprintf('sudo python %s', $script);
	exec($command);

	Redirect::to('/');
});

Route::get('/1/down', function() {
	$script = realpath(sprintf('%s/../gpio/down1.py', base_path()));
	$command = sprintf('sudo python %s', $script);
	exec($command);

	Redirect::to('/');
});
