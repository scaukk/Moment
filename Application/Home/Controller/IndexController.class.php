<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){

    	echo \Tools\Ver::$name;
    	
    	// p(get_defined_constants(true));
    	
    	die;
        $this->display();
    }
}