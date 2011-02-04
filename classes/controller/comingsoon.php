<?php defined('SYSPATH') OR die('No direct access allowed.');

class Controller_ComingSoon extends Controller_Template {

	public $template = 'comingsoon/template';

	protected function _view($name)
	{
		$prefix = 'comingsoon'.DIRECTORY_SEPARATOR;
		$langs = array(I18n::lang());
		if (I18n::lang() !== Kohana::config('comingsoon.language'))
		{
			$langs[] = Kohana::config('comingsoon.language');
		}

		foreach($langs as $lang)
		{
			$path = $prefix.$lang;
			if (Kohana::find_file('views'.DIRECTORY_SEPARATOR.$path, $name))
			{
				$prefix = $path.DIRECTORY_SEPARATOR;
				break;
			}
		}

		return View::factory($prefix.$name);
	}

	public function action_index()
	{
		$this->template->messages = array();
		$this->template->status = "guest";
		$this->template->title = __('under construction');

		if ($_POST)
		{
			$email = $this->request->post('email');
			$result = ComingSoon::add($email);

			if (is_array($result))
			{
				foreach($result as $message)
					$this->template->messages['error'] = $message;
			}
			elseif($result === TRUE)
			{
				$this->template->messages = array('success' => __('You will be notified when the site launches'));
				$this->template->status = "subscriber";
				$this->template->title = __('thank you for your interest');
			}
			else
			{
				// unknown error
				$this->template->messages = array('error' => __('Sorry, we could not save your email. May be later?'));
			}
		}
		$this->template->content = $this->_view('welcome');
	}

}