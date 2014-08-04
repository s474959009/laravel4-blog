@extends('layout', array('active'=>'send'))
@section('content')
<div class="moveMain typecho-psot">
  {{Form::open(array('class'=>'form-signin'))}}
    <h1>发布文章</h1>
    @include('notify')
    <p class="input">
      <label class="control-label">分类</label> <a class="btn btn-primary" href="{{ route('category') }}">添加分类</a>
         {{ Form::select('category', $categories, 1, array('class' => 'text-l w-100','multiple' => 'multiple')) }}
         {{ $errors->first('category', '<div class="error">:message</div>') }}
    </p>
    <p class="input">    
      <label class="control-label">标题</label>
          <input  class="w-100" type="text" value="{{ Input::old('title') }}" name="title"  placeholder="请输入标题"/>
         {{ $errors->first('title', '<div class="error">:message</div>') }}
    </p>
  
      <label class="control-label">slug</label><br/>
        <p class="input-prepend">
        <span class="add-on">{{ str_finish(URL::to('/'), '/article') }}</span>
          <input  type="text" value="{{ Input::old('slug') }}" name="slug"  placeholder="请输入slug"/>
         {{ $errors->first('slug', '<div class="error">:message</div>') }}
        </p>

    <div class="input">  
      <label class="control-label">内容</label>
      <div class="controls clearfix">
         <textarea id="content" class="form-control" name="content" rows="30" placeholder="请输入内容">{{ Input::old('content') }}</textarea>
       {{ $errors->first('content', '<div class="error">:message</div>') }}    
      <button type="submit" class="btn btn-moment pull-right" style="margin:1em 0;">发布</button>
      </div>
    </div>
</div>
@stop