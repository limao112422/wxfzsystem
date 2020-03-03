<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style>
	.jp-list ul li {
	    float: left;
	    width:100%;
	    height: 160px;
	    padding: 20px 10px;
	    border-bottom: 1px solid #ebebeb;
	}
	.jp-list-img {
		float:left;
	    width: 116px;
	    height: 160px;
	}

	.jp-list ul li i {
	    width: 22px;
	    height: 89px;
	    padding: 13px 77px 62px 17px;
	    background-image: url(/Public/image/jiapu.jpg);
	    font-style: normal;
	    font-size: 16px;
	    line-height: 16px;
	    color: #263169;
	    text-align: center;
	    display: table-cell;
	    vertical-align: middle;
	}
	.jp-list-right{
		padding-left: 14px;
		position: relative;
	}
	.jp-list ul li p {
	    font-size: 16px;
	    color: #585858;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	}

	.jp-list ul li span {
		display: block;
		float: left;
	    background-color: #ff8075;
	    padding: 3px 8px;
	    border-radius: 3px;
	    color: #fff;
	    font-size: 14px;
	    font-weight: bold;
	    margin-top: 10px;
	}
	.jp-list ul li b {
		display: block;
	    font-weight: normal;
	    padding-top: 50px;
	    color: #999;
	    font-size: 14px;
	}
	.jp-list .quan{width:60px;height:60px;position: absolute;right:5%;bottom: 30%;background:url(/Public/image/family_circle_normal.png) no-repeat;background-size: 100% 100%;}
	.jp-list ul li.create {
	    background-color: #f7f7f7;
	}
	.jp-list ul li.create a {
	    display: block;
	    text-align: center;
	    font-size: 16px;
	    padding-top: 10px;
	    color: #999;
	}
</style>
</head>
<body>
	<div id="page">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1>我的家谱</h1>
		    <div id="hui-header-menu"></div>
		</header>
		<div class="hui-wrap">
			<div id="hui-header-sreach" style="width: 97%;">
		    	<div id="hui-header-sreach-icon"></div>
				<form><input type="search" id="searchKey" onkeydown="if(event.keyCode==13)return false;" placeholder="搜索家谱" /></form>
			</div>

		    <div style="background:#FFFFFF; margin:10px 0 40px 0;">
		    	<div class="jp-list">
			    	<ul>
			    		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
				    			<a href="<?php echo U('/surname/home',array('id'=>$v['id']));?>">
		                            <div class="jp-list-img"><i><?php echo ($v["sur"]); ?>氏家谱</i></div>
		                            <div class="jp-list-right">
			                            <p><?php echo ($v["name"]); ?></p>
			                            <span>创建人</span>
			                            <b>编号：<?php echo ($v["id"]); ?></b>
			                            <b>共修入<?php echo ($v["count"]); ?>人</b>
			                            <div class="quan"></div>
			                        </div>
			                    </a>
	                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                        <li class="create">
	                        <a href="<?php echo U('add');?>"><img src="/Public/image/jiapu-create.jpg"><br><br>创建新家谱</a>
	                    </li>

                    </ul>
                </div>
		    </div>
		</div>
	</div>

	<div class="customers">
	    <div class="qservice">
	        <a href="<?php echo U('/surname');?>">
	        <div id="svebar_1">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe" style="color:#e10d12">家谱</div>
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
	            <div class="describe">我的</div>
	          </div>
	        </div>
	        </a>
	    </div> 
	</div>
</body>
</html>