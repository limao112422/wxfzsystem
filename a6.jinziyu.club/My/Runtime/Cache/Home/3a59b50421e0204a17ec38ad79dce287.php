<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="../Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
</head>
<body>
	<div id="page">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1>HOME</h1>
		</header>
		<div class="hui-wrap">
		    <div class="hui-list" style="background:#FFFFFF; margin-top:28px;">
		        <a href="javascript:hui.toast('Hello Hcoder UI !');" style="height:auto; height:80px; padding-bottom:8px;">
		    		<div class="hui-list-icons" style="width:110px; height:80px;">
		    			<img src="../Public/image/u.png" style="width:66px; margin:0px; border-radius:50%;" />
		    		</div>
		    		<div class="hui-list-text" style="height:79px; line-height:79px;">
		    			<div class="hui-list-text-content">
		    				默认昵称
		    			</div>
		    			<div class="hui-list-info">
		    				<span class="hui-icons hui-icons-right"></span>
		    			</div>
		    		</div>
		    	</a>
		    	<a href="javascript:hui.toast('Hello Hcoder UI !');">
		    		<div class="hui-list-text">
		    			账户余额 : 1000元 &nbsp;|&nbsp; 积分 : 2000
		    		</div>
		    	</a>
		    </div>
		    <div class="hui-list" style="background:#FFFFFF; margin-top:28px;">
		        <ul>
		        	<li>
		            	<a href="javascript:void(0);">
		            		<div class="hui-list-icons">
				    			<img src="../Public/img/list/scrollnews.png" />
				    		</div>
				    		<div class="hui-list-text">
				    			我的通知
				    			<div class="hui-list-info">
				    				<span class="hui-icons hui-icons-right"></span>
				    			</div>
				    		</div>
		            	</a>
		           	</li>

		           	<li>
		            	<a href="javascript:void(0);">
		            		<div class="hui-list-icons">
				    			<img src="../Public/img/list/order.png" />
				    		</div>
				    		<div class="hui-list-text">
				    			帮助中心
				    			<div class="hui-list-info">
				    				<span class="hui-icons hui-icons-right"></span>
				    			</div>
				    		</div>
		            	</a>
		           	</li>

		           	<li>
		            	<a href="javascript:void(0);">
		            		<div class="hui-list-icons">
				    			<img src="../Public/img/list/swiper.png" />
				    		</div>
				    		<div class="hui-list-text">
				    			分享给朋友
				    			<div class="hui-list-info">
				    				<span class="hui-icons hui-icons-right"></span>
				    			</div>
				    		</div>
		            	</a>
		           	</li>
		           	<li>
		            	<a href="javascript:void(0);">
		            		<div class="hui-list-icons">
				    			<img src="../Public/img/list/formcheck.png" />
				    		</div>
				    		<div class="hui-list-text">
				    			修改密码
				    			<div class="hui-list-info">
				    				<span class="hui-icons hui-icons-right"></span>
				    			</div>
				    		</div>
		            	</a>
		           	</li>
		           	<li>
		            	<a href="javascript:void(0);">
		            		<div class="hui-list-icons">
				    			<img src="../Public/img/list/ht.png" />
				    		</div>
				    		<div class="hui-list-text">
				    			意见反馈
				    			<div class="hui-list-info">
				    				<span class="hui-icons hui-icons-right"></span>
				    			</div>
				    		</div>
		            	</a>
		           	</li>
		        </ul>
		    </div>
		    <div style="background:#FFFFFF; margin-top:28px;">
		        <button type="button" class="hui-button hui-button-large" onclick="hui.toast('退出');">
		        	<span class="hui-icons hui-icons-logoff"></span>退出系统
		       	</button>
		    </div>
		</div>
	</div>

	<div class="customers">
	    <div class="qservice">
	        <a href="<?php echo U('/user/surname');?>">
	        <div id="svebar_1">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe">家谱</div>
	          </div>
	        </div>
	        </a>
	    </div>
	    <div class="qservice">
	        <a href="">
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


<script type="text/javascript" src="../Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>