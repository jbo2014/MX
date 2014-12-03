<?php

class ServiceController extends BaseController {

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

	public $menu = 'service';
	public $breadcrumb = '';

	public function index()
	{
		//return View::make('hello');
		$this->breadcrumb = trans('service.service');
		$this->layout->abc = 'abc';
		$this->layout->content = View::make('Service.index');
	}

}
