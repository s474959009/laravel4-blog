@extends('layout' , array('active' => 'home'))
@section('content')
<div id="main" class="post" itemprop="blogPost" itemscope="">
<article itemprop="articleBody">
  <header class="article-info clearfix">
		<h1>
             <a itemprop="url" title="{{$article->title}}" href="{{ route('article', $article->slug) }}">{{$article->title}}</a>
          </h1>
		<p class="article-author">By  {{$article->email}}</p>
		<p class="article-time">
    发布于:
    <time itemprop="datePublished" datetime="2014-03-19T16:00:00.000Z">{{substr($article->created_at, 0, 10)}}</time>
     更新于:
    <time itemprop="dateModified" datetime="2014-03-21T02:06:30.000Z">{{substr($article->updated_at, 0, 10)}}</time>
            </p>
  </header>
	<div class="article-content">
		<p>{{$article->content}}</p>
	</div>
  <footer class="article-footer clearfix">
  <section class="comment">
      <ul class="media-list">
    <h4>评论</h4>
    <?php $article->load('comments.user')  ?>
       @foreach($article->comments as $comment)
       <li class="media">
           <div class="well well-lg">
               <h5 class="media-heading">{{ $comment->user->email }}
                   <small class="pull-right">发表于：{{ $comment->created_at }}</small>
               </h5>
               {{ $comment->content }}
           </div>
       </li>
       @endforeach
    @include('notify')
   </ul>
       @if(Auth::check())
    <form class="form-horizontal" method="post" autocomplete="off">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <textarea name="content" class="form-control" rows="4">{{ Input::old('content') }}</textarea>
        <button type="submit" class="btn btn-moment pull-right" style="margin:1em 0;">发表评论</button>
    </form>
    @else
        <a class="btn btn-primary" href="{{ route('login') }}">登录</a>
        <a class="btn btn-success" href="{{ route('logup') }}">注册</a>
        <button class="btn btn-moment pull-right" style="margin:1em 0;">发表评论</button>
    @endif
   </section>
  </footer>
</div>
</article>
@include('category', array('activeCategory' => 'home'))
@stop
