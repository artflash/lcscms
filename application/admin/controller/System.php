<?php
namespace app\admin\controller;

/**
* 系统设置
*/
class System extends BaseController
{
	
	/**
	 * 系统设置
	 * @return [type] [description]
	 */
	public function systemBase()
	{
		return $this ->fetch();
	}

	/**
	 * 栏目管理
	 * @return [type] [description]
	 */
    public function systemCategory()
    {
    	return $this ->fetch();
    }

    /**
     * 系统日志
     * @return [type] [description]
     */
    public function systemLog()
    {
    	return $this ->fetch();
    }

    /**
     * 系统屏蔽词
     * @return [type] [description]
     */
    public function systemShielding()
    {
    	return $this ->fetch();
    }

}