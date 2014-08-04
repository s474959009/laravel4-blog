@extends('layout', array('active'=>'send'))
@section('style')
      .form-signin {
        max-width: 700px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

@stop
@section('content')
	{{Form::open(array('class'=>'form-signin'))}}
		<h2>发布</h2>
      @if($errors->has('title'))
      <div class="control-group error">
      @else
      <div class="control-group">
      @endif
			<label class="control-label" for="inputEmail">标题</label>
			<div class="controls">
				<input id="inputEmail" type="text" value="{{ Input::old('title') }}" name="title" class="input-block-level" placeholder="请输入标题"/>
			 {{ $errors->first('title', '<span class="help-inline error">:message</span>') }}
      </div>
		</div>
    @if($errors->has('content'))
    <div class="control-group error">
    @else
    <div class="control-group">
    @endif
			<label class="control-label" for="inputEmail">内容</label>
			<div class="controls">
				 <textarea id="content" class="input-block-level" name="content" rows="10" placeholder="请输入内容">{{ Input::old('content') }}</textarea>
       {{ $errors->first('content', '<span class="help-inline error">:message</span>') }}			
      </div>
		</div>	
		<div class="control-group">
			<div class="controls">
				<button class="btn" type="submit">发布</button>
			</div>
		</div>			
@stop