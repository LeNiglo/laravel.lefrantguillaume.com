<?php

namespace App\Http\Controllers;

class AdminController extends Controller {

	public function index($action, $id) {
		return View::make('admin.index');
	}

	public function contacts($action, $id) {
		if ($action === 'show') {
			return View::make('admin.contacts');
		} else if ($action === 'remove') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('contacts')
					->where('id', '=', $id)
					->delete()));
			} else {
				return json_encode(array('success' => false));
			}
		} else if ($action === 'update') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('contacts')
					->where('id', '=', $id)
					->update(array('name' => Input::get('name'),
						'email' => Input::get('email'),
						'color' => Input::get('color')))));
			} else {
				return json_encode(array('success' => false));
			}
		} else if ($action === 'create') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('contacts')
					->insert(array('name' => Input::get('name'),
						'email' => Input::get('email')))));
			} else {
				return json_encode(array('success' => false));
			}
		} else {
			return false;
		}
	}

	public function check_out($action, $id) {
		if ($action === 'show') {
			return View::make('admin.check_out');
		} else if ($action === 'remove') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('check_out')
					->where('id', '=', $id)
					->delete()));
			} else {
				return json_encode(array('success' => false));
			}
		} else if ($action === 'update') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('check_out')
					->where('id', '=', $id)
					->update(array('title' => Input::get('title'),
						'html' => Input::get('html')))));
			} else {
				return json_encode(array('success' => false));
			}
		} else if ($action === 'create') {
			if (Request::ajax()) {
				return json_encode(array('success' => DB::table('check_out')
					->insert(array('title' => Input::get('title'),
						'html' => Input::get('content'),
						'contact_id' => Input::get('contact')))));
			} else {
				return json_encode(array('success' => false));
			}
		} else {
			return false;
		}
	}

	public function golden_book($action, $id) {
		return View::make('admin.golden_book');
	}

	public function exp_skls($action, $id) {
		return View::make('admin.exp_skls');
	}

	public function showLogin() {
		return View::make('admin.login');
	}

	public function doLogin() {
		$userdata = array(
			'name' 		=> Input::get('username'),
			'password' 	=> Input::get('password'));
		$auth = DB::table('users')->where('name', '=', $userdata['name'])->first();
		if (!$auth)
			return Redirect::to('login')->with('msg', 'Login Failed : Username does not match.');
		if (Crypt::decrypt($auth->password) === $userdata['password']) {
			Session::put('user', $auth);
			return Redirect::to('admin');
		} else {
			return Redirect::to('login')->with('msg', 'Login Failed : Bad User/Password combination');
		}
	}

	public function doLogout() {
		Session::forget('user');
		return Redirect::to('login')->with('msg', 'Logged Out.');
	}

}
