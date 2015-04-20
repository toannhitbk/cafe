<?php namespace App\Http\Controllers\Backend;


class LoginController extends BackendBaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function login(){
		if(\Request::getMethod()=='POST'){
			$inputs = \Request::all();
			print_r($inputs);die();
		}
		return view('backend.login');
	}

}
