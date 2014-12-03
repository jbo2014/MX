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

//Route::get('/', function(){	return View::make('hello'); });

/* admin */
Route::group(array('namespace' => 'Admin'), function()
{
    //
    Route::get('admin/login', 'LoginController@index');
});



/* front */
Route::get('/', 'HomeController@index');

Route::get('service', 'ServiceController@index');