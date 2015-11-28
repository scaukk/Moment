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
        // AJAX POST
        // 接受参数{"content":"文字内容","isPublic":"是否公开","imgcount":"图片张数"}
        // 如果有上传文件，在此处理
        // 成功返回true，前端再接着展示新增的分享
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 删除分享
     * ps: 开启事务，同时删除点赞和评论
     * @return [type] [description]
     */
    public function delshare(){
        // AJAX POST
        // 同时删除该分享下的评论和赞，前端要给出警告
        // 接受参数{"sid":"分享内容id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 评论/回复
     * @return [type] [description]
     */
    public function comment(){
        // AJAX POST
        // 接受参数{"sid":"分享内容id","content":"评论内容","pid":"如果是回复，则是所回复的评论的id值;如果是一级评论，则是0"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 删除评论/回复
     * ps: 如果该评论有回复，同时删除其下的回复
     * @return [type] [description]
     */
    public function delcomment(){
        // AJAX POST
        // 删除该评论下的回复
        // 接受参数{"cid":"评论id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 点赞
     * @return [type] [description]
     */
    public function thumb(){
        // AJAX POST
        // 接受参数{"sid":"分享内容id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 取消点赞
     * @return [type] [description]
     */
    public function cclthumb(){
        // AJAX POST
        // 接受参数{"sid":"分享内容id"}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

}