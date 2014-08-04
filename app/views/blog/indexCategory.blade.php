@extends('layout' , array('active' => 'home'))
@section('content')
<div id="main">
@foreach($articles as $article)
		<section itemprop="blogPost" itemscope="" class="post">
			<a itemprop="url" title=" {{{$article->title}}}" href="{{ route('article', $article->slug) }}">
				<h1 itemprop="name">{{{$article->title}}}
				<div class="pull-right">
		        <h2><i class="iconfont">&#xe600;  </i>{{{ Comment::where('article_id', '=', $article->id)->count()}}}</h2> 
		        </div>	
				</h1>
				<p itemprop="description">{{{strip_tags(Str::limit($article->content,'120'))}}}</p>
				<time itemprop="datePublished" datetime="2014-03-19T16:00:00.000Z">由 {{$article->email}} 更新于 {{$article->updated_at}}</time>
			 </a>
		</section>
@endforeach
<div class="span8 pagination pagination-centered offset2">
{{$articles->links()}}
</div>
</div>
@include('category', array('activeCategory' => $category_id))
@stop
