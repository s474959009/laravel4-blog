@extends('layout', array('active' => 'logup'))
@section('content')
	<div class="typecho-login">
		{{Form::open(array('class'=>'form-signin'))}}
			<h1>注册</h1>
				<p class="input">
					<input id="inputEmail" class="text-l w-100" value="{{Input::old('email')}}" name="email" type="email" class="input-block-level" placeholder="请输入邮箱"/>
					{{ $errors->first('email', '<span class="help-inline error">:message</span>') }}
				</p>
				<p class="input">
					<input id="inputPassword" class="text-l w-100" name="password" type="password" class="input-block-level" placeholder="请输入密码"/>
					{{ $errors->first('password', '<span class="help-inline error">:message</span>') }}
				</p>
				<p class="input">					
					<input id="inputPassword" class="text-l w-100" name="password_confirmation" type="password" class="input-block-level" placeholder="请输入密码"/>
					{{ $errors->first('password','<span class="help-inline error">:message</span>') }}
				</p>	
				<p class="input">
					<button  class="btn btn-login" type="submit">注册</button>
				</p>
		{{Form::close()}}
	</div>
@stop