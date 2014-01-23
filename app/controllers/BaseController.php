<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	protected $data = array();

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->data['locale'] = 'en';
			$this->data['environment'] = App::environment();

			echo App::environment();

			$this->layout = View::make($this->layout, $this->data);
		}
	}

}
