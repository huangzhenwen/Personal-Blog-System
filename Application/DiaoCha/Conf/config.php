<?php
return array(
	//'配置项'=>'配置值'
	

	//默认设定跳转
	'DEFAULT_MODULE'        =>  'DiaoCha',  	// 默认模块
	'DEFAULT_CONTROLLER'    =>  'Index', 		// 默认控制器名称
	'DEFAULT_ACTION'        =>  'index', 		// 默认操作名称
		

	//URL设置
	'URL_MODEL'             =>  1,

	//模版中禁用源生PHP代码<? ? >
	 'TMPL_DENY_PHP'         =>  false,
		
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'tpoa',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'hzw',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
	
	//开启Trace
	'SHOW_PAGE_TRACE' 		=> false,	//开启Trace追踪

	//开启Session
	'SESSION_AUTO_START'	=> true,
		
	//班级
	"CLASS" =>array('PHP14期就业班','PHP15期基础班','PHP16期基础班','IOS12期就业班'	)
);