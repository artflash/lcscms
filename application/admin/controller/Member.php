<?php
namespace app\admin\controller;

/**
* 会员管理
*/
class Member extends BaseController
{
	/**
	 * 会员列表
	 * @return [type] [description]
	 */
	public function memberList()
	{
		return $this ->fetch();
	}

	/**
	 * 添加会员
	 * @return [type] [description]
	 */
	public function memberAdd()
	{
		return $this ->fetch();
	}

}