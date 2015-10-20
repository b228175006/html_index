<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'               => 'mysql',     // 数据库类型
    'DB_HOST'               => '127.0.0.1', // 服务器地址
    'DB_NAME'               => 'tp_kdindex',          // 数据库名
    'DB_USER'               => 'root',      // 用户名
    'DB_PWD'                => 'root',          // 密码
    'DB_PREFIX'             => 'tp_',    // 数据库表前缀
    'SHOW_PAGE_TRACE' =>true,//调试页面Trace
    'URL_CASE_INSENSITIVE'  =>  true,  //URL地址不区分大小写
    //模板相关配置
    'TMPL_PARSE_STRING'=>array(
		'__Public__' => __ROOT__.'/Public',
		'__Css__' => __ROOT__.'/Public/css',
		'__Js__' => __ROOT__.'/Public/js',
		'__Image__'=>__ROOT__.'/Public/image'
		),
);