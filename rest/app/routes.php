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

Route::get('/', function() {
	$script = realpath(sprintf('%s/../gpio/up1.py', base_path()));
	$command = sprintf('sudo python %s', $script);
	echo get_current_user(), "\n";
	echo $command, "\n";
	return exec($command);

	return 'test';
});

Route::get('/up', function() {
	$script = realpath(sprintf('%s/../gpio/up1.py', base_path()));
	$command = sprintf('sudo python %s', $script);
	exec($command);
});

Route::get('/down', function() {
	$script = realpath(sprintf('%s/../gpio/down1.py', base_path()));
	$command = sprintf('sudo python %s', $script);
	exec($command);
});
