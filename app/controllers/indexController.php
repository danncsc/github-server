<?php

class indexController extends BaseController {

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
        if (Auth::attempt(array('account' => $account, 'password' => $password,'active' => 1))) {
			return Redirect::to('/controll');
        } else {
			return Redirect::to('/')->with('error','1');
        }
	}

	public function apply(){
		$account=Input::get('account');
		$password=Input::get('password');
		$name=Input::get('name');
		if($account!=""&&$password!=""&&$name!=""){
			$password=Hash::make($password);
			$user=new User;
			$user->name=$name;
			$user->account=$account;
			$user->password=$password;
			$user->save();
			return "<meta charset='utf-8' /><meta http-equiv='refresh' content='3;url=http://dacsc.club/github-server' /><p>註冊成功！請靜待管理員審核</p>";
		}else{
			return "<meta charset='utf-8' /><meta http-equiv='refresh' content='3;url=http://dacsc.club/github-server' /><p>帳密名字不能為空</p>";
		}
	}

	public function control(){
		$url = "https://api.github.com/users/danncsc/repos";
		$data = file_get_contents($url); // 取得json字串
		$data = json_decode($data, true); // 將json字串轉成陣列
		return View::make('control')->with('projects',$data);
	}

  
    //登出 控制器
    public function logout()
    {
		Auth::logout();
		return "<meta charset='utf-8' /><meta http-equiv='refresh' content='3;url=http://dacsc.club/github-server' /><p>登出成功</p>";
    }
}
