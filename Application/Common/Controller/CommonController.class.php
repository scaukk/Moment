<?php
namespace Common\Controller;
use Think\Controller;
class CommonController extends Controller {
/**
 * 总控制器，直接继承Controller
 */

	/**
	 * 初始化方法
	 * @return [type] [description]
	 */
	protected function _initialize(){

	}

	/**
	 * 数据返回，根据是否AJAX决定返回返回类型
	 * @access protected
	 * @param mixed $data 要返回的数据
	 * @param String $type AJAX返回数据格式
	 * @param int $json_option 传递给json_encode的option参数
	 * @return unknown
	 */
	protected function dataReturn($data,$type='',$json_option=0){

		if (IS_AJAX) {
			$this->ajaxReturn($data,$type,$json_option);
		}else{
			return $data;
		}
	}
}

?>