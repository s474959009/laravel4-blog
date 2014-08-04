@extends('layout', array('active' => 'login'))
@section('content')
		<div class="typecho-login">
			{{Form::open(array('class'=>'form-signin'))}}
				<h1>登陆</h1>
				<p class="input">
					<input id="inputEmail"  class="text-l w-100" value="{{ Input::old('email') }}" type="email" name="email" class="input-block-level" placeholder="请输入邮箱"/>
				</p>
				<p class="input">
					<input id="inputPassword"  class="text-l w-100" type="password" name="password" class="input-block-level" placeholder="请输入密码"/>
				</p>
				<p class="input">
					  <button class="btn btn-login" type="submit">登陆</button>
				</p>
				<p class="input">
					<label class="checkbox"><input type="checkbox" value="1" name="remember_me"/> 记住我</label>
				</p>
				@include('notify')
			{{Form::close()}}
		</div>
@stop