<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>会人中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
</head>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		<img src="/Public/image/banner.jpg" alt="banner" width="100%">
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>活动排行榜</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						tip：活动排行榜
						
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<table style="width:100%;padding:10px">
					  <tr style="text-align:left">
					    <th style="width:10%">ID</th>
					    <th style="width:20%">昵称</th>
					    <th style="width:10%">推荐</th>
					  </tr>
					  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    <td style="width:10%"><?php echo ($v["id"]); ?></td>
						    <td style="width:20%"><?php echo (yc_phone($v["mobile"])); ?></td>
						    <td style="width:10%"><?php echo ($v["num"]); ?></td>
						  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
					
					<div class="pages"><?php echo ($page); ?></div>
					
			    </div>


			</div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>