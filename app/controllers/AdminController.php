<?php

class AdminController extends BaseController {

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
    //登入 控制器
	public function login()
	{
      $account=Input::get('account');
      $password=Input::get('password');
      if (Auth::attempt(array('account' => $account, 'password' => $password,'active' => 1,'admin' => 1))) {

      } else {

      }
	}



  
    //登出 控制器
    public function logout()
    {

    }
}
