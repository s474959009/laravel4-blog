<?php 

class UserController extends BaseController {

	//登陆页面
	public function getLogin()
	{
		return View::make('user.login');
	}

	//登陆操作
	public function postLogin()
	{
		$userInfo = array('email' => Input::get('email'), 'password' => Input::get('password'));
		$rememberMe = Input::get('remember_me','0');

		//登陆
		if(Auth::attempt($userInfo, $rememberMe))
		{
			return Redirect::intended();
		} else {
			return Redirect::back()->with('error','登录失败请重试')->withInput();
		}
	}

	//用户退出
	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	//注册页面
	public function getLogup()
	{
		return View::make('user.registe');
	}

	//注册操作
	public function postLogup()
	{
		$data = Input::all();

		$rule = array(
			'email' => 'required|email|unique:users',
			'password' => 'required|between:6,24|alpha_dash|confirmed',
			);

		$messages = array(
			'email.required' => '请输入邮箱地址',
			'email.email' => '请输入正确邮箱',
			'email.unique' => '邮箱已注册',
			'password.required'=> '请输入密码',
			'password.between' => '密码过长(短)',
			'password.alpha_dash' => '密码格式为字母、数字、中划线或下划线字符',
			'password.confirmed' => '密码不一致'
			);

		$validator = Validator::make($data, $rule, $messages);

		if($validator->passes())
		{
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Input::get('password');
			if($user->save())
			{
				return Redirect::to('login')->with('success','注册成功,请登录');
			} else {
				return '注册失败';
			}
		} else {
			return Redirect::back()->withInput()->withErrors($validator);
		}
	}

	public function getHome()
	{	$user = Auth::user()->id;
		$articles = Article::where('user_id', $user)->orderBy('updated_at', 'desc')->paginate(6);
		$categories = Category::orderBy('id')->paginate(6);
		return View::make('user.home')->with(compact('articles', 'categories'));
	}

}