<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST'    => array('Home'),
    'DEFAULT_MODULE'       => 'Home',  // 默认模块
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2, //URL模式
	'WEIXINPAY_CONFIG'       => array(
    'APPID'              => '', // 微信支付APPID
    'MCHID'              => '', // 微信支付MCHID 商户收款账号
    'KEY'                => '', // 微信支付KEY
    'APPSECRET'          => '', // 公众帐号secert (公众号支付专用)
    'NOTIFY_URL'         => 'http://baijunyao.com/Api/Weixinpay/notify', // 接收支付状态的连接
    )
);
