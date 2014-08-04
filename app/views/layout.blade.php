<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	{{HTML::style('css/style.css')}}
</head>
<body>
	@include('bar.navbar')
	<div id="container">
	@yield('content')
	</div>
	@include('bar.foot')
</body>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
</html>
