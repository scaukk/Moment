<?php
namespace Home\Controller;
use Think\Controller;

/**
 * Home收藏控制器
 */
class FavController extends BaseController {

    /**
     * 收藏用户
     * @return [type] [description]
     */
    public function user(){
        // AJAX POST
        // 接受参数{"uid":"被收藏用户的id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 取消收藏用户
     * @return [type] [description]
     */
    public function ccluser(){
        // AJAX POST
        // 接受参数{"uid":"被收藏用户的id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 收藏分享
     * @return [type] [description]
     */
    public function content(){
        // AJAX POST
        // 接受参数{"sid":"被收藏评论的id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 取消收藏分享
     * @return [type] [description]
     */
    public function cclcontent(){
        // AJAX POST
        // 接受参数{"sid":"被收藏评论的id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }
}