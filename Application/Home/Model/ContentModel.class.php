<?php
namespace Home\Model;
use Think\Model;

/**
 * mn_content表模型
 */
class ContentModel extends BaseModel {

	/**
	 * 自动验证
	 * @var array
	 */
	protected $_validate = array(
		// array('verify','require','验证码必须！'), //默认情况下用正则进行验证
		// array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
		// array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
		// array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
		// array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
	);

/*

以下需要实现的Model方法

获取所有分享的评论和点赞、
获取特定分享的评论和点赞、
获取所有收藏的分享、
获取特定收藏的分享的评论和点赞、
获取自己特定的分享的评论和点赞、
获取自己所有的分享、
获取特定收藏用户的分享、
获取最新发布的分享

*/
}