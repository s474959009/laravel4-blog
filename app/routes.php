<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//游客访问页
Route::get('/', array('as' => 'home', 'uses' => 'BlogController@getIndex'));

//文章分类
Route::get('category/{id}', array('as' => 'categoryArticles', 'uses' => 'BlogController@getCategoryArticles'));
Route::get('article/{slug}', array('as' => 'article', 'uses' => 'BlogController@getBlogShow'));


//登陆
Route::group(array('before' => 'guest'), function()
{
	Route::get('login', array('as' => 'login', 'uses' => 'UserController@getLogin'));
	Route::post('login', 'UserController@postLogin');
	Route::get('logup', array('as' => 'logup', 'uses' => 'UserController@getLogup'));
	Route::post('logup', 'UserController@postLogup');
});
//退出
Route::get('logout',array('as' => 'logout', 'before' => 'auth', 'uses' => 'UserController@getLogout'));


//用户主页



//内容管理
Route::group(array('before' => 'auth'), function()
{
	//文章发布
	Route::get('post', array('as' => 'send', 'uses' => 'BlogController@getArticleCreate'));
	Route::post('post', array('as' => 'postSend', 'uses' => 'BlogController@postArticle'));
	//分类发布
	Route::get('category', array('as' => 'category', 'uses' => 'BlogController@getCategory'));
	Route::post('category', array('as' => 'postCategory', 'uses' => 'BlogController@postCategory'));
	//用户主页（文章分类管理）
	Route::get('home', array('as' => 'userhome','uses' => 'UserController@getHome'));
	//文章操作
	Route::get('edit/article/{id}', array('as' => 'editArticle', 'uses' => 'BlogController@getEditArticle'));
	Route::post('edit/article/{id}', array('as' => 'updateArticle', 'uses' => 'BlogController@postEditArticle'));
	Route::get('del/article/{id}', array('as'=>'delArticle', 'uses' => 'BlogController@delArticle'));
	//分类操作
	Route::get('edit/category/{id}', array('as'=>'editCategory', 'uses'=> 'BlogController@getEditCategory'));
	Route::post('edit/category/{id}', array('as'=>'updateCategory', 'uses'=> 'BlogController@postEditCategory'));
	Route::get('del/category/{id}', array('as'=>'delCategory', 'uses'=> 'BlogController@delCategory'));
	//提交评论操作
	Route::post('article/{slug}', 'BlogController@postComment');
});
