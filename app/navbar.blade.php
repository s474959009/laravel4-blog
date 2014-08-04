<?php
$is_active = function ($name='') use ($active)
{
    if ($active === $name)
    {
        return ' class="active"';
    } else {
        return '';
    }
}
?>

<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="{{ route('home') }}">Lavarel</a>
			<ul class="nav">
	@if(Auth::guest())
				<li{{ $is_active('home')}}><a href="{{ route('home') }}">首页</a></li>
				<li{{ $is_active('login')}}><a href="{{ route('login') }}">登陆</a></li>	
				<li{{ $is_active('logup')}}><a href="{{ route('logup') }}">注册</a></li>
	@elseif(!Auth::user()->is_admin)
				<li{{ $is_active('userhome')}}><a href="{{ route('userhome')}}">{{ Auth::user()->email }}</a></li>
				<li{{ $is_active('send')}}><a href="{{ route('send') }}">发布</a></li>			
				<li{{ $is_active('logout')}}><a href="{{ route('logout') }}">退出</a></li>
	@endif
			</ul>
		</div>
	</div>
</div>