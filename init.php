<?php defined('SYSPATH') OR die('No direct access allowed.');

if (Kohana::$environment > Kohana::PRODUCTION)
{
	// add catch-all route
	Route::set('catch-all', '<url>', array('url' => '.*'))
		->defaults(array(
			'controller' => 'comingsoon',
			'action'     => 'index',
		));
}