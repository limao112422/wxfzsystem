<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style>
	.shome{font-family: "微软雅黑";position: relative;background: url(/Public/image/jp_manager_top_bg.jpg) no-repeat;}
	.shome .stang{margin:60px 10px 30px 10px;overflow: hidden;}
	.shome .smenu{background: rgba(255,255,255,0.06);}
	.shome .smenu .mlist{width:33%;text-align: center;float:left;padding:4px 0;}
	.shome .smenu .mlist p{color:#ad9282;font-size: 14px;font-weight: 600;line-height: 20px}
	.zibei{margin:10px 0;background: #fff}
	.zibei .zlist{width:33%;float:left;text-align: center;padding:20px 0;}
	.zlist img{width:35%;margin-bottom: 5px}
	.zlist p{font-size:13px;}

</style>
</head>
<body>
	<div id="page">
		<header class="hui-header" style="background:none;">
		    <div id="hui-back"></div>
		    <h1><?php echo ($f["name"]); ?></h1>
		    <div id="hui-header-menu"></div>
		</header>
		<div class="shome">
			<div class="stang">
				<div style="margin-top:7%;float:left"><div style="color:#ad9282;margin-bottom: 8px">堂号：<span style="color:#ebebeb"><?php echo ($f["tname"]); ?></span></div><div style="color:#ad9282">地望：<span style="color:#ebebeb"><?php echo ($f["aname"]); ?></span></div></div> <img src="/Public/image/jp_manager_citang_iv.png" style="width:30%;float:right">
			</div>
			<div class="smenu">
				<div class="mlist">
					<p>成员</p>
					<p><span style="color:#ebebeb"><?php echo ($f["count"]); ?></span>人</p>
				</div>
				<div class="mlist" style="border-left:1px solid #ad9282">
					<p>激活</p>
					<p><span style="color:#ebebeb"><?php echo ($f["nums"]); ?></span>人</p>
				</div>
				<div class="mlist" style="background: #ce4f40;float:right">
					<a href=""><p style="padding:13px 0;color:#ebebeb">通知激活</p></a>
				</div>
			</div>
		</div>

		<div style="overflow: hidden;margin:10px 0;padding:0 10px;line-height: 50px;background:#fff;color:#f44200">您未将ID绑定到家谱成员</div>

		<div class="zibei">
			<div class="zlist"><a href="<?php echo U('/surname/adddeep',array('id'=>$f['id']));?>"><img src="/Public/image/jiapu_zibeichakan.png" /><p>字辈谱</p></a></div>
			<div class="zlist" style="border-left: 1px solid #ebebeb"><a href="<?php echo U('/map/index',array('id'=>$f['id'],'s'=>1));?>"><img src="/Public/image/jiapu_zhijiehcakan.png" /><p>全部世系谱</p></a></div>
			<div class="zlist" style="border-left: 1px solid #ebebeb;float: right"><a href="<?php echo U('/map/family',array('id'=>$f['id']));?>"><img src="/Public/image/jiapu_zhixichakan.png" /><p>直系世系谱</p></a></div>
		</div>
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>	
</body>
</html>