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
			return Redirect::to('/control');
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
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,0);
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
		curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		$datas = curl_exec($ch);
		curl_close($ch);
		$datas = json_decode($datas, true); // 將json字串轉成陣列
		$projects=Project::all();
		foreach($projects as $project){
			for($i=0;$i<count($datas);$i++){
				if($project->clone==$datas[$i]['clone_url']){
					$proserver[]=$project;
					unset($datas[$i]);
					$datas=array_values($datas);
				}
			}
		}
		return View::make('control')->with('projects',$proserver)->with('proremotes',$datas);
	}

	private $output;

	public function update($id){
		$project=Project::find($id);
		$commands=array(
			'cd '.$project->server,
			'git pull',
		);
		SSH::run($commands, function($line)
		{
			$this->output.=$line."<br>";
		});
		return Redirect::to('control')->with('output',$this->output);
	}

  
    //登出 控制器
    public function logout()
    {
		Auth::logout();
		return "<meta charset='utf-8' /><meta http-equiv='refresh' content='3;url=http://dacsc.club/github-server' /><p>登出成功</p>";
    }
}
