<?php
namespace Home\Controller;
use Common\Controller\CommonController;
class BaseController extends CommonController {
/**
 * Home模块总控制器，直接继承CommonController
 */

	protected static $user_id		=	'';// 用户id
	protected static $nickname		=	'';// 用户昵称
	protected static $userdata		=	'';// 用户数据
	protected static $navigation	=	array();// 导航选中配置

	/**
	 * Home模块初始化方法
	 * @return [type] [description]
	 */
    protected function _initialize(){
    	echo "Home/BaseController";
    }
}