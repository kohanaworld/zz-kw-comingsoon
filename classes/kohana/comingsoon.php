<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Kohana_ComingSoon {

	protected static $_config;

	public static function config($param, $default = NULL)
	{
		if (is_null(self::$_config))
		{
			self::$_config = Kohana::config('comingsoon');
			self::$_config['imgpath'] = rtrim(self::$_config['imgpath']).'/';
		}

		return Arr::get(self::$_config, $param, $default);
	}

	public static function add($email)
	{
		$model = new Model_ComingSoon_Email;
		try {
			$result = $model->add($email);
			return $result;
		}
		catch (Database_Exception $e)
		{
			Kohana::$log->add(Log::ERROR, $e->getMessage(). ' ['.$e->getFile().'# '.$e->getLine().']');
			return FALSE;
		}
	}

}