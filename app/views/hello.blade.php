@extends('layout', array('active' => 'userhome'))
@section('style')
		body {
			margin:0;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
@stop

@section('content')
	<div class="welcome">
		<h1>You have arrived.</h1>
		@foreach($emails as $email)
			<p>{{$email->email}}</p>
		@endforeach
	</div>
@stop