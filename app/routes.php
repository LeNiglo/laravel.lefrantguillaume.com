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

Route::get('/', function()
{
	return View::make('home', array('pageName' => 'Home Page'));
});

Route::get('cv', function()
{
	return View::make('cv', array('pageName' => 'Curriculum Vitae'));
});

Route::get('about_me', function()
{
	return View::make('about', array('pageName' => 'About Me'));
});

Route::get('projects', function()
{
	return View::make('projects', array('pageName' => 'Projects'));
});

Route::get('check_out', function()
{
	return View::make('check_out', array('pageName' => 'Check Out'));
});

Route::get('contact', function()
{
	return View::make('contact', array('pageName' => 'Contact'));
});

Route::get('golden', function()
{
	return View::make('golden', array('pageName' => 'Golden Book'));
});

/*
| Admin Section
*/

Route::get('login', array('uses' => 'AdminController@showLogin'));
Route::post('login', array('uses' => 'AdminController@doLogin'));
Route::any('logout', array('uses' => 'AdminController@doLogout'));

Route::group(array('prefix' => 'admin'), function()
{
	Route::any('/{function?}/{action?}/{id?}', array('before' => 'myAuth', function($function = 'index', $action = 'show', $id = -1)
	{
		return App::make('AdminController')->$function($action, $id);
	}));
});

/*
|--------------------------------------------------------------------------
| Post Routes
|--------------------------------------------------------------------------
|
| Routes for Ajax & Post calls. Redirect to the AjaxController.
|
*/

Route::post('ajax/thumb/{id}', 'AjaxController@thumbUp');

Route::post('ajax/send_mail', array('before' => 'csrf', 'uses' => 'AjaxController@sendMail'));

Route::post('ajax/golden_book', array('before' => 'csrf', 'uses' => 'AjaxController@inputGoldenBook'));

Route::post('ajax/check_out_seen/{id}', 'AjaxController@checkOutSeen');

Route::post('ajax/refresh_golden_book', 'AjaxController@loadGoldenBook');
Route::post('ajax/admin_contacts', 'AjaxController@loadAdminContacts');

Route::post('ajax/admin_checks', 'AjaxController@loadAdminCheck');
