<?php
/**
 * 项目公共配置
 */
return array(
	
	// 展示运行过程信息，开发时开启，上线时设为false
	'SHOW_PAGE_TRACE'		=>	true,


	'DEFAULT_MODULE'        =>  'Home',  // 默认模块

	'TMPL_ENGINE_TYPE'		=>	'Smarty',// 默认模板引擎为smarty
	'TMPL_ENGINE_CONFIG'	=>	array(	 // smarty配置
		'left_delimiter'	=>	"<{",	 // 开始标志
		'right_delimiter' 	=>	"}>",	 // 结束标志
	),
);