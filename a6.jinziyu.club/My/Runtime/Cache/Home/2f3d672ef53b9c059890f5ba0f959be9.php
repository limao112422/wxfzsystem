<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style>select{color:#3385ff;}</style>
</head>
<body>
	<div id="page">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1>创建家谱</h1>
		    <div style="width:44px"></div>
		</header>
		<div class="hui-wrap">
			<form action="" method="POST">
		    <div class="hui-list" style="background:#FFFFFF; margin-top:10px;">
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">姓</div>
		            <input type="text" name="s" class="hui-input" placeholder="请输入家谱姓氏" autofocus="autofocus" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">谱名</div>
		            <input type="text" name="n" class="hui-input" placeholder="请输入家谱名称,必填" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title" id="btn1">堂号 <img src="/Public/image/help_icon.png" width="13" /></div>
		            <input type="text" name="t" class="hui-input" placeholder="请输入房号/堂号/支号，可不填" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title" id="btn2">地望 <img src="/Public/image/help_icon.png" width="13" /></div>
		            <input type="text" name="ad" class="hui-input" placeholder="请输入家族地望，可不填" />
		        </div>
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title" id="btn2">访问权限</div>
		        	<select name="o" class="hui-input">
		        		<option value="0">全谱公开</option>
		        		<option value="1">世系图仅对成员公开</option>
		        		<option value="2">全谱仅对成员公开</option>
		        	</select>
		        </div>

		        <div style="margin:50px 0 30px 0;padding:10px;">
			        <input type="submit" class="hui-button hui-button-large hui-primary" value="确认创建" />
			    </div>

		    </div>
			</form>
		</div>
	</div>

	<div class="customers">
	    <div class="qservice">
	        <a href="<?php echo U('/surname');?>">
	        <div id="svebar_1">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe">家谱</div>
	          </div>
	        </div>
	        </a>
	    </div>
	    <div class="qservice">
	        <a href="<?php echo U('/news');?>">
	        <div id="svebar_2">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe">消息</div>  
	          </div>
	        </div>
	        </a>
	    </div>

	    <div class="qservice">
	        <a href="<?php echo U('/user');?>">
	        <div id="svebar_3">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe" style="color:#e10d12">我的</div>
	          </div>
	        </div>
	        </a>
	    </div> 
	</div>


<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/js/hui-popover-msg.js" charset="utf-8"></script>
<script type="text/javascript">
	hui('#btn1').popoverMsg('left', 'down', '<div style="text-align:center;">古代同姓族人往往数世同堂，堂号就成为某一支族人的称号。</div>');
	hui('#btn2').popoverMsg('left', 'down', '<div style="text-align:center;">一个姓氏或家族的发祥地与望出地。</div>');
</script>
</body>
</html>