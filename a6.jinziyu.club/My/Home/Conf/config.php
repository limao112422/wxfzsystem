<?php
return array(
	
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>'127.0.0.1',// 服务器地址
	'DB_NAME'=>'a6_jinziyu_club',// 数据库名
	'DB_USER'=>'a6_jinziyu_club',// 用户名
	'DB_PWD'=>'Xzdc58kKdx83GCGP',// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'h_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集

    //RBAS配置
    
    'DEFAULT_GROUP'   => 'Home', //默认分组
    
    'RBAC_SUPERADMIN' => '15000000000',//超级管理员
	'ADMIN_AUTH_KEY'  => 'GetAdmin',
	'USER_AUTH_ON'    => true,
	'APP_GROUP_LIST'  => 'Home,Admin', //项目分组设定
	'USER_AUTH_TYPE'  => 1,
	'USER_AUTH_KEY'   => 'GetMember',
  	'USER_QUDAO_KEY'   => 'GetQudao',
	'LOAD_EXT_CONFIG' => 'config.site', // 加载扩展配置文件
	'LAYOUT_ON'=>false,
	'LAYOUT_NAME'=>'/Admin/layout',
);