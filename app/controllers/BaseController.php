<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	//protected $layout = '';

	protected function setupLayout()
	{
		if (stristr(Route::currentRouteName(),'admin')!==false)
		//if (! is_null($this->layout))
		{
			$this->layout = View::make('admin.master');
		}
		else
		{
			$this->layout = View::make('layouts.master');
		}
	}

}
