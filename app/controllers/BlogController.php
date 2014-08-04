<?php 

class BlogController extends BaseController
{
	//blog主页
	public function getIndex()
	{
        $articles   = Article::orderBy('id', 'desc')->paginate(6);
        $categories = Category::orderBy('id')->get();
		return View::make('blog.index')->with(compact('categories', 'articles'));
	}

	//blog文章展示页面
	public function getBlogShow($slug)
	{
		$article = Article::where('slug', $slug)->first();
		is_null($article) AND App::abort(404);
		$categories = Category::orderBy('id')->get();

		return View::make('blog.articleShow')->with(compact('categories', 'article'));
	}

	//文章发布页面
	public function getArticleCreate()
	{
		$categories = Category::lists('name','id');
		return View::make('blog.createArticle')->with(compact('categories'));
	}

	//blog文章发布
	public function postArticle()
	{
		$data = Input::all();
		$rules = array(
				'title' => 'required|unique:articles',
				'slug' => 'required|unique:articles',
				'content' => 'required',
				'category' => 'exists:categories,id',
			);
		$errors = array(
			'title.required' => '请输入文章标题',
			'title.unique' => '和已有文章标题重复',
			'slug.required' => '请输入文章slug',
			'slug.unique' => '和已有文章slug重复',
			'content.required' => '请输入文章内容',
			'category.exists' => '请选择文章分类',
			);

		$validator = Validator::make($data, $rules, $errors);
		if($validator->passes()) {
			$article = new Article;
			$article->user_id = Auth::user()->id;
			$article->email = Auth::user()->email;
			$article->category_id = $data['category'];
			$article->title = $data['title'];
			$article->content = $data['content'];
			$article->slug = $data['slug'];
			if($article->save()) {
				return Redirect::back()->with('success', '文章添加成功');
			} else {
					return Redirect::back()->withInput()->with('error', '文章添加失败');
				}
		} else {
			return Redirect::back()->withInput()->withErrors($validator);
		}
	}

	//添加分类页
	public function getCategory()
	{
		$categories = Category::orderBy('id')->paginate(6);
		return View::make('blog.createCategory')->with(compact('categories'));
	}

	//添加分类操作
	public function postCategory()
	{
		$data = Input::all();
		$rules = array(
			'name' => 'required|unique:categories'
			);
		$errors = array(
			'name.required' => '请输入分类名称',
			'name.unique' => '该分类已存在'
			);
		$validator = Validator::make($data, $rules, $errors);

		if($validator->passes()) {
			$category = new Category;
			$category->name = $data['name'];

			if($category->save()) {
				return Redirect::back()->with('success', '分类添加成功');
			} else {
				return Redirect::back()->with('error', '分类添加失败');
			} 
		} else {
			return Redirect::back()->withErrors($validator);
		}
	}

	//文章分类
    public function getCategoryArticles($category_id)
    {
        $articles   = Article::where('category_id', $category_id)->orderBy('created_at', 'desc')->paginate(6);
        $categories = Category::orderBy('id')->get();
        return View::make('blog.indexCategory')->with(compact('articles', 'categories', 'category_id'));
    }

    //文章页面
    public function getArticle($slug)
    {
    	$article = Article::where('slug', $slug)->get();
    	return View::make('blog.article')->with(compact('article'));
    }

    //文章修改页面
    public function getEditArticle($id)
    {
    	$article = Article::find($id);
    	$category_id = $article->category_id;
    	$categories = Category::lists('name','id');
    	$category = Category::where('id', $category_id)->first();
    	return View::make('blog.editArticle')->with(compact('article', 'category', 'categories'));
    }

    //文章修改操作
    public function postEditArticle($id)
    {
    	$data = Input::all();
		$rules = array(
				'title' => 'required|unique:articles',
				'slug' => 'required|unique:articles',
				'content' => 'required',
				'category' => 'exists:categories,id',
			);
		$errors = array(
			'title.required' => '请输入文章标题',
			'title.unique' => '和已有文章标题重复',
			'slug.required' => '请输入文章slug',
			'slug.unique' => '和已有文章slug重复',
			'content.required' => '请输入文章内容',
			'category.exists' => '请选择文章分类',
			);

		$validator = Validator::make($data, $rules, $errors);
		if($validator->passes()) {
			$article = Article::find($id);
			$article->category_id = $data['category'];
			$article->title = $data['title'];
			$article->content = $data['content'];
			$article->slug = $data['slug'];
			if($article->save()) {
				return Redirect::to('home')->with('success', '文章修改成功');
			} else {
					return Redirect::back()->withInput()->with('error', '文章修改失败');
				}
		} else {
			return Redirect::back()->withInput()->withErrors($validator);
		}
    }

    public function delArticle($id)
    {
    	$user_id = Auth::user()->id;
    	$article_user_id = Article::find($id)->user_id;
    	if($user_id == $article_user_id)
    	{
    		$del = Article::find($id)->delete();
	    	if($del) {
	       		return Redirect::to('home')->with('success','文章删除成功'); 		
	    	} else {
	    		return Redirect::back()->with('error','文章删除失败');
	    	}

    	} else {
    		return Redirect::back()->with('error','没有权限删除该篇文章');
    	}

    }

    //分类修改页面
    public function getEditCategory($id)
    {
    	$categories = Category::orderBy('id')->paginate(6);
    	$category = Category::find($id);
    	return View::make('blog.editCategory')->with(compact('categories', 'category'));
    }

    //分类修改操作
    public function postEditCategory($id)
    {
    	$data = Input::all();
		$rules = array(
			'name' => 'required|unique:categories'
			);
		$errors = array(
			'name.required' => '请输入分类名称',
			'name.unique' => '该分类已存在'
			);
		$validator = Validator::make($data, $rules, $errors);

		if($validator->passes()) {
			$category = Category::find($id);
			$category->name = $data['name'];

			if($category->save()) {
				return Redirect::to('home')->with('success', '分类修改成功');
			} else {
				return Redirect::to('home')->with('error', '分类修改失败');
			} 
		} else {
			return Redirect::to('home')->withErrors($validator);
		}
    }

    //删除分类操作
    public function delCategory($id)
    {
    	$del = Category::find($id)->delete();

	    if($del) {
	      	return Redirect::to('home')->with('success','分类删除成功'); 		
	    } else {
	   	 	return Redirect::to('home')->with('error','分类删除失败');
	    }
    }

    //提交评论操作
    public function postComment($slug)
    {
    	$content = e(Input::get('content'));
		if (mb_strlen($content)<3){
            return Redirect::back()->withInput()->with('error', '评论不得少于3个字符。');
		}
		$article = Article::where('slug', $slug)->first();
		$comment = new Comment;
		$comment->content = $content;
		$comment->article_id = $article->id;
		$comment->user_id = Auth::user()->id;
		if($comment->save()) {
			return Redirect::back()->with('success', '评论成功');
		} else {
			return Redirect::back()->withInput()->with('error', '评论失败');
		}
    }
}