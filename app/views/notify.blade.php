@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable" style="margin-top:1em;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable" style="margin-top:1em;">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{{ $message }}
</div>
@endif