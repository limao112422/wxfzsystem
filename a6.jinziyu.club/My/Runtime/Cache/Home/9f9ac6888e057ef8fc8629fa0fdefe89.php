<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>管理后台</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
</head>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		<img src="/Public/image/banner.jpg" alt="banner" width="100%">
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>管理后台</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<a href="<?php echo U('/admin');?>">主页 > </a><a href="<?php echo U('/admin/loan');?>" target="_blank">贷款管理 > </a><a href="<?php echo U('/admin/card');?>" target="_blank">信用卡管理 > </a><a href="<?php echo U('/admin/bank');?>" target="_blank">银行管理 > </a><a href="<?php echo U('/admin/member');?>" target="_blank">会员管理</a>
					</div>
				</div>
				<form action="" method="POST">
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<div class="hui-form-items">
			        	<div class="hui-form-items-title">名称</div>
			            <input type="text" class="hui-input hui-input-clear" name="name" value="<?php echo ($f["name"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">标题</div>
			            <input type="text" class="hui-input hui-input-clear" name="title" placeholder="网站标题" value="<?php echo ($f["title"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">关键词</div>
			            <input type="text" class="hui-input hui-input-clear" name="k" placeholder="网站关键词" value="<?php echo ($f["k"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">描述</div>
			            <input type="text" class="hui-input hui-input-clear" name="d" placeholder="网站描述" value="<?php echo ($f["d"]); ?>" />
			        </div>
			    </div>
			    <div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
			    	<div class="hui-form-items">
			        	<div class="hui-form-items-title">信用卡类型</div>
			            <input type="text" class="hui-input hui-input-clear" name="type" value="<?php echo ($f["type"]); ?>" />
			        </div>
			        <div style="margin:50px 0 30px 0;padding:10px;">
				        <input type="submit" class="hui-button hui-button-large hui-primary" value="更新" />
				    </div>
			    </div>
			    </form>
			</div>
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript">
var meuns = ['前台', '网站配置', '下一页','返回'];
var cancel = '取消';
hui('#hui-header-menu').click(function(){
    hui.actionSheet(meuns, cancel, function(e){
        if(e.index==0){
        	hui.open('<?php echo U('/map/index',array('id'=>I('id')));?>');
        }else if(e.index==1){
        	hui.open('<?php echo ($pre); ?>');
        }else if(e.index==2){
        	hui.open('<?php echo ($nex); ?>');
        }else if(e.index==3){
        	hui.open('/surname/');
        }
    });
});
</script>
</body>
</html>