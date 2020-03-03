<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>我的下级</title>
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
			    <h1>我的下级</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0;padding:10px;font-size:13px;">
					<table style="width:100%;margin:auto;">
					  <tr style="text-align:left">
					    <th style="width:10%">ID</th>
					    <th style="width:20%">注册手机号</th>
					    <th style="width:20%">完成任务</th>
					    <th style="width:20%">注册时间</th>
					  </tr>
					  <br/>
					
					下级人数：<?php echo ($c); ?>
						<hr class="layui-bg-blue">
					  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    <td style="width:10%"><?php echo ($v["id"]); ?></td>
						    <td style="width:20%"><?php echo (yc_phone($v["mobile"])); ?></td>
						    <td style="width:10%"><?php echo ($v["num"]); ?>次</td>
						    <td style="width:20%"><?php echo (date("Y-m-d",$v["reg_time"])); ?></td>
						  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						
					  
					</table>
					
					<div class="pages"><?php echo ($page); ?></div>
					
			    </div>


			</div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>