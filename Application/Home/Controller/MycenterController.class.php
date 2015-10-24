<?php
namespace Home\Controller;
use Think\Controller;

/**
 * Home个人中心控制器
 */
class MycenterController extends BaseController {

    /**
     * 设置屏蔽/开启自己的分享
     * @return [type] [description]
     */
    public function sharetoggle() {
        // AJAX POST
        // 接受参数{无}
        // 成功返回true
        // TODO，失败返回错误信息数组[格式待定]
    }

    /**
     * 自己分布的所有分享
     * @return [type] [description]
     */
    public function selfshare() {
        // 独立1个页面展示
        // GET请求
    }

    /**
     * 自己点赞/评论过的分享(self Thumbed aNd Commented)
     * @return [type] [description]
     */
    public function selftncshare() {
        // 独立1个页面展示自己点赞/评论过的分享
        // GET请求
    }

    /**
     * 登出
     * @access public
     * @return void
     */
    public function logout() {
        session('LOGIN_FLAG', null);
        session('USERDATA', null);
        session('SESSION_EXPIRE', null);

        $this->redirect('User/login', '', 3, '安全退出！跳转至登录页面...');
    }

    /**
     * 修改密码
     * @access public
     * @return void
     */
    public function chpwd() {
        if (IS_POST){
            $cur_ask = 'Mycenter/chpwd';
            $verify = new \Think\Verify();
            if ($verify->check(I('post.verify'))) {
                $this->redirect($cur_ask, '', 3, '验证码错误！');
                return;
            }

            $old_pwd = I('post.oldpassword');
            if ($old_pwd == '') {
                $this->redirect($cur_ask, '', 3, '原密码不能为空！');
                return;
            }
            $new_pwd = I('post.password');
            $renew_pwd = I('post.repassword');
            if ($new_pwd !== $renew_pwd){
                $this->redirect($cur_ask, '', 3, '两次输入的密码不一致！');
                return;
            }
            
            $model = D('User');
            if ($model->chpwd(self::$user_id, $old_pwd, $new_pwd)){
                $this->redirect($cur_ask, '', 3, '修改密码成功');
                return;
            }  else {
                $this->redirect($cur_ask, '', 3, $model->getError());
                return;
            }
        }  else {
            $this->display();
        }
    }

}
