<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_ComingSoon_Email extends Model {

	protected $_table_name = 'comingsoon_emails';

	protected $_name = 'comingsoon_email';

	public function get_all($limit = 10, $offset = 0)
	{
		return DB::select('email')
			->from($this->_table_name)
			->limit($limit)
			->offset($offset)
			->execute();
	}

	public function add($email)
	{
		$valid = Validation::factory(array('email' => $email))
			->rule('email', 'not_empty')
			->rule('email', 'email')
			->rule('email', array($this, 'email_exists'), array(':value', ':validation'));

		if ( ! $valid->check())
		{
			return $valid->errors('validation');
		}

		DB::insert($this->_table_name, array('email'))
			->values(array($email))
			->execute();

		return TRUE;
	}

	public function email_exists($email, Validation $validation)
	{
		$count = DB::select(array('COUNT("*")', 'total_count'))
			->from($this->_table_name)
			->where('email', '=', $email)
			->execute()
			->get('total_count');

		if ($count > 0)
		{
			$validation->error('email', 'email_available', array($email));
		}
	}
}