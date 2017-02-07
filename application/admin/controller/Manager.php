<?php
namespace app\admin\controller;

/**
* 管理员权限管理
*/
class Manager extends BaseController
{
	/**
	 * 管理员列表
	 * @return [type] [description]
	 */
	public function adminList()
	{
		return $this ->fetch();
	}

	/**
	 * 添加管理员
	 * @return [type] [description]
	 */
	public function adminAdd()
	{
		return $this ->fetch();
	}

	/**
	 * 管理员权限
	 * @return [type] [description]
	 */
	public function adminPermission()
	{
		return $this ->fetch();
	}

	/**
	 * 角色管理
	 * @return [type] [description]
	 */
	public function adminRole()
	{
		return $this ->fetch();
	}

	/**
	 * 添加角色
	 * @return [type] [description]
	 */
	public function adminRoleAdd()
	{
		return $this ->fetch();
	}

}