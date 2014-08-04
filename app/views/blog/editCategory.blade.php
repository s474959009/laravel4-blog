@extends('layout', array('active'=>'send'))
@section('content')
<div class="moveMain typecho-psot controls clearfix">
	{{Form::open(array('class'=>'form-signin'))}}
    <h1>修改分类</h1>
        @include('notify')
      <table class="table table-bordered table-striped table-condensed">
      <tbody>
      <tr><th>现有分类</th></tr>
      @foreach($categories as $catgory)
      <tr><td><a href="#">{{{$catgory->name}}}</a></td></tr>
      @endforeach
      @if(count($categories)>=6)
      <tr><td><nav id="page-nav" class="clearfix">
      {{$categories->links()}}
      </nav>
      </td>
      </tr>
      @endif
      </tbody>
      </table>

      <p class="input">
       <label class="control-label" for="inputEmail">分类</label>
        <input type="text" name="name" class="w-100" placeholder="请输入分类名称"/>
         {{ $errors->first('name', '<span class="alert alert-error">:message</span>') }}
      </p>

        <button type="submit" class="btn btn-moment pull-right" style="margin:1em 0;">修改</button>
    </div>			
@stop