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
<body style="background: #F0EFF5;">
	<div id="page">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1>意见反馈</h1>
		    <div style="width:44px"></div>
		</header>
		<div class="hui-wrap">
			<form action="" method="POST">
		    <div class="hui-list" style="background:#FFFFFF; margin-top:10px;">
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">标题</div>
		            <input type="text" name="title" class="hui-input" placeholder="反馈的问题" />
		        </div>

		        <div class="hui-form-items">
		            <textarea placeholder="请输入反馈的内容" name="content" style="width:100%;border: 0;font-size: 13px" rows="5"></textarea>
		        </div>

		        <div style="margin:50px 0 30px 0;padding:10px;">
			        <input type="submit" class="hui-button hui-button-large hui-primary" value="提交" />
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
</body>
</html>