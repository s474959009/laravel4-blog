@extends('layout', array('active' => 'userhome'))
@section('content')
<div id="main" class="moveMain typecho-psot controls clearfix">
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
                  <tr>
                  <td colspan="4">
                  <nav id="page-nav" class="clearfix">
                  {{$articles->links()}}
                  </nav>
                  </td>
                  </tr>
            </tbody>
        </table>
</div>
@include('user.side', array('activeSide'=>'articles'))
@stop