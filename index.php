<?php

// 应用入口文件

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 绑定Home模块到当前入口文件
define('BIND_MODULE','Home');
define('BUILD_CONTROLLER_LIST','Base,Index,User,Content,Fav,Mycenter,Common');
define('BUILD_MODEL_LIST','Base,User,Content,Favuser,Thumb');

// 定义应用目录
define('APP_PATH','./Application/');

define('SITE_URL', "http://127.0.0.1");//服务器域名
// define('SITE_URL', "http://momopluto.xicp.net");//服务器域名

define('TITLE','Moment');// 网站名称

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';