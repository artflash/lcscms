<?php
namespace app\admin\controller;

/**
* 文章相关控制器
*/
class Article extends BaseController
{
	/*
	* 文章列表
	 */
	public function articleList()
	{
		return $this ->fetch();
	}

	/**
	 * 添加文章
	 */
	public function articleAdd()
	{
		return $this ->fetch();
	}
	
}