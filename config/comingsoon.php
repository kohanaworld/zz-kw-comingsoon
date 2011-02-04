<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	// rule for module activating
	'active'   => Kohana::$environment > Kohana::PRODUCTION,
	// default language
	'language' => 'en-us',
	// path to images
	'imgpath' => '/media/i/comingsoon/',
);