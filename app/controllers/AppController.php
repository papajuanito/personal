<?php

class AppController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	protected $layout = 'layouts.master';

	public function showIndex(){

		$this->layout->content = View::make('index', $this->data);
	}

	public function showWork(){
		$this->layout->content = View::make('work', $this->data);
	}

	public function showSingleWork(){
		$this->layout->content = View::make('work-single', $this->data);
	}

}
