<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>我的上级</title>
<link href="/Public/layui/css/layui.css" rel="stylesheet" type="text/css">
    <script src="/Public/layui/layui.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
</head>
<style>
	*{font-size:14px;}
    .hui-header{
  background:rgb(0, 150, 255);
  }
</style>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		<!--<img src="/Public/image/banner.jpg" alt="banner" width="100%">-->
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>我的上级</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0;padding:10px;font-size:13px;">
					<p style="text-align:center">订单申诉或者任何问题均可联系上级处理</p>
                  	<hr class="layui-bg-blue">
					<p style="text-align:center">上级联系方式：<?php echo ($mobile); ?></p>
					  
			    </div>


			</div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>