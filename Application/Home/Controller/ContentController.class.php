<?php
namespace Home\Controller;
use Think\Controller;

/**
 * Home分享内容控制器
 */
class ContentController extends BaseController {

	/**
	 * 发布分享内容
	 * @return [type] [description]
	 */
    public function share(){
        
    }

    /**
	 * 删除分享
	 * ps: 开启事务，同时删除点赞和评论
	 * @return [type] [description]
	 */
    public function delshare(){
        
    }

    /**
	 * 评论/回复
	 * @return [type] [description]
	 */
    public function comment(){
        
    }

    /**
	 * 删除评论/回复
	 * ps: 如果该评论有回复，同时删除其下的回复
	 * @return [type] [description]
	 */
    public function delcomment(){
        
    }

    /**
	 * 点赞
	 * @return [type] [description]
	 */
    public function thumb(){
        
    }

    /**
	 * 取消点赞
	 * @return [type] [description]
	 */
    public function cclthumb(){
        
    }

}