<?php
$is_active = function ($name='') use ($active)
{
    if ($active === $name)
    {
        return 'actives';
    } else {
        return '';
    }
}
?>
<header>
	<div>
	<div id="imglogo">
				<a href="/"><img title="Lorazepam's Blog" alt="Lorazepam's Blog" src="http://yangjian.me/img/logo.svg"></a>
			</div>
		<div id="textlogo">
		<h1 class="site-name">
		Lorazepam's Blog
		</h1>
		<h2 class="blog-moto">业精于勤而荒于嬉,行成于思而毁于随</h2>
		</div>
		<nav class="animated">
			<ul>
	@if(Auth::guest())
				<li><a class="blog-nav-item {{ $is_active('home')}}" href="{{ route('home') }}" >首页</a></li>
				<li><a class="blog-nav-item {{ $is_active('login')}}"  href="{{ route('login') }}">登陆</a></li>
				<li><a class="blog-nav-item {{ $is_active('logup')}}"  href="{{ route('logup') }}">注册</a></li>
	@elseif(!Auth::user()->is_admin)
				<li><a class="blog-nav-item {{ $is_active('home')}}" href="{{ route('home') }}" >首页</a></li>
				<li><a class="blog-nav-item {{ $is_active('userhome')}}" href="{{ route('userhome') }}">管理</a></li>
				<li><a class="blog-nav-item {{ $is_active('send')}}" href="{{ route('send') }}">发布</a></li>
				<li><a class="blog-nav-item {{ $is_active('logout')}}" href="{{ route('logout') }}">退出</a></li>
	@endif
			</ul>
		</nav>
	</div>
</header>
