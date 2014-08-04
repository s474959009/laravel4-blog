@extends('layout', array('active' => 'userhome'))
@section('content')
<div class="moveMain typecho-psot controls clearfix">
    @include('notify')
	 <h1>
        文章管理
        <div class="pull-right">
            <a href="{{ Route('send') }}" class="btn btn-sm btn-primary">
                添加新文章
            </a>
        </div>
    </h1>
      <table class="table table-bordered table-striped table-condensed">
      <tbody>
                <tr>
                    <th width="35%">标题</th>
                    <th width="25%">创建时间</th>
                    <th width="20%">所属分类</th>
                    <th width="20%">操作</th>
                </tr>
                @for ($i = 0; $i < count($articles); $i++)
                <tr>
                    <td>
                        <a href="{{ route('article', $articles[$i]->slug) }}" target="_blank">
                                                {{{ $articles[$i]->title }}}
                        </a>
                    </td>
                    <td>{{ $articles[$i]->created_at }}</td>
                    <td>{{{ $articles[$i]->category->name }}}</td>
                    <td class="btn-group">
                        <a href="{{ route('editArticle', $articles[$i]->id) }}" class="btn btn-xs">编辑</a>
                        <a href="{{ route('delArticle', $articles[$i]->id)}}" class="btn btn-xs btn-danger">
                        删除</a>                    	
                    </td>
                </tr>
                @endfor
                      @if(count($articles)>=6)
                  <tr>
                  <td colspan="4">
                  <nav id="page-nav" class="clearfix">
                  {{$articles->links()}}
                  </nav>
                  </td>
                  </tr>
                    @endif
            </tbody>
        </table>

    <br/>
     <h1>
        分类管理
        <div class="pull-right">
            <a href="{{ Route('category') }}" class="btn btn-sm btn-primary">
                添加新分类
            </a>
        </div>
    </h1>
        <table class="table table-striped  table-bordered table-hover">
              <tbody>
                <tr>
                    <th width="35%">分类名称</th>
                    <th width="25%">创建时间</th>
                    <th width="20%">文章总数</th>
                    <th width="20%">操作</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                    <td>
                        <a href="{{ route('categoryArticles', $category->id) }}" target="_blank">
                                                {{{ $category->name }}}
                        </a>
                    </td>
                    <td>{{{ $category->created_at }}}</td>
                    <td>{{{ Article::where('category_id', '=', $category->id)->count()}}}</td>
                    <td class="btn-group">
                        <a href="{{ route('editCategory', $category->id) }}" class="btn btn-xs">编辑</a>
                        <a href="{{ route('delCategory', $category->id) }}" class="btn btn-xs btn-danger">
                        删除</a>                      
                    </td>
                </tr>
                @endforeach
                 @if(count($categories)>=6)
                  <tr>
                  <td colspan="4">
                  <nav id="page-nav" class="clearfix">
                  {{$categories->links()}}
                  </nav>
                  </td>
                  </tr>
                    @endif
            </tbody>
        </table>
</div>
@stop