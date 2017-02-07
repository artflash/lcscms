<?php
namespace app\admin\controller;

/**
* 图片相关管理
*/
class Picture extends BaseController
{
	/*
	* 图片列表
	 */
	public function pictureList()
	{
		return $this ->fetch();
	}

	/**
	 * 添加图片
	 * @return [type] [description]
	 */
	public function pictureAdd()
	{
		return $this ->fetch();
	}
}