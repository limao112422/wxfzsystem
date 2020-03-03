<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <somnus:sitecfg name="sitetitle" /> </title>
    <link href="/Public/main/css/public.css" rel="stylesheet" type="text/css">
	<link href="//at.alicdn.com/t/font_676503_hdo5gcp6thiu23xr.css" rel="stylesheet" type="text/css">
	
    <script type="text/javascript" src="/Public/main/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/main/js/global.js"></script>
    <script type="text/javascript" src="/Public/main/js/jquery.tab.js"></script>
    <script src="/Public/layer/layer.js"></script>
</head>
<body>
<div id="dcWrap">

    <div id="dcHead">
    <div id="head">
        <div class="logo">
          <a href="<?php echo U(GROUP_NAME.'/Main/index');?>">
            <div style="width: 178px;height: 40px;line-height:40px;text-align:center;color:#FFFFFF;font-size:16px;font-weight:bold;">海之心租号系统</div>
          </a>
        </div>
        <div class="nav">
            <ul>
                <li class="M">
                    <a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="<?php echo U(GROUP_NAME.'/Article/add');?>">文章</a>
                        <a href="<?php echo U(GROUP_NAME.'/Article/addcat');?>">文章分类</a>
                        <!--<a href="<?php echo U(GROUP_NAME.'/link/add');?>">友情链接</a>-->
                        <a href="<?php echo U(GROUP_NAME.'/Admin/add');?>">管理员</a>
                    </div>
                </li>
                <li><a href="<somnus:sitecfg name='siteurl' />" target="_blank">查看站点</a></li>
                <li><a href="<?php echo U(GROUP_NAME.'/Main/clearcache');?>">清除缓存</a></li>
                
            </ul>

            <ul class="navRight">
              <li class="M noLeft">
                  <a href="JavaScript:void(0);">您好，<?php echo session('admin_user');?> </a>
                  <div class="drop mUser">
                      <a href="<?php echo U(GROUP_NAME.'/Admin/chagemypass');?>">修改密码</a>
                  </div>
              </li>
              <li class="noRight">
                  <a href="<?php echo U(GROUP_NAME.'/Index/logout');?>">退出</a>
              </li>
          </ul>
        </div>
    </div>
</div>
    <!-- dcHead 结束 -->
    <div id="dcLeft">
	<div id="menu">
		<ul class="top">
            <li>
                <a href="<?php echo U(GROUP_NAME.'/Main/index');?>">
                    <i class="home"></i>
                    <em>管理首页</em>
                </a>
            </li>
        </ul>
        <ul>
            <li id="nav_System_index">
                <a href="<?php echo U(GROUP_NAME.'/System/index');?>">
                    <i class="system"></i>
                    <em>系统设置</em>
                </a>
            </li>
            <li id="nav_Admin_index">
                <a href="<?php echo U(GROUP_NAME.'/Admin/index');?>">
                    <i class="manager"></i>
                    <em>网站管理员</em>
                </a>
            </li>
            <li id="nav_Block_index">
            	<a href="<?php echo U(GROUP_NAME.'/Block/index');?>">
            		<i class="theme"></i>
            		<em>自由块</em>
            	</a>
            </li>
        </ul>
        <ul>
            <li id="nav_Article_catlist">
                <a href="<?php echo U(GROUP_NAME.'/Article/catlist');?>">
                    <i class="articleCat"></i>
                    <em>文章分类</em>
                </a>
            </li>
            <li id="nav_Article_index">
                <a href="<?php echo U(GROUP_NAME.'/Article/index');?>">
                    <i class="article"></i>
                    <em>文章列表</em>
                </a>
            </li>
        </ul>
		<ul><li id="nav_Acc_fen">
        		<a href="<?php echo U('Acc/fen');?>">
        			<i class="order"></i>
        			<em>帐号分类</em>
        		</a>
        	</li>
        	<li id="nav_Acc_index">
        		<a href="<?php echo U('Acc/index');?>">
        			<i class="plugin"></i>
        			<em>帐号栏目</em>
        		</a>
        	</li>
			<li id="nav_Acc_clist">
        		<a href="<?php echo U('Acc/clist');?>">
        			<i class="backup"></i>
        			<em>帐号列表</em>
        		</a>
        	</li>
        	<li id="nav_Acc_wclist">
        		<a href="<?php echo U('Acc/wclist');?>">
        			<i class="backup"></i>
        			<em>未审核帐号列表</em>
        		</a>
        	</li>
        </ul>
        <ul>
        	<li id="nav_User_index">
        		<a href="<?php echo U('User/index');?>">
        			<i class="user"></i>
        			<em>用户管理</em>
        		</a>
        	</li>
			
        </ul>
		<ul>
			<li id="nav_Order_index">
        		<a href="<?php echo U('Order/index');?>">
        			<i class="product"></i>
        			<em>交易订单</em>
        		</a>
        	</li>
			<li id="nav_Order_yongjin">
        		<a href="<?php echo U('Order/yongjin');?>">
        			<i class="menuPage"></i>
        			<em>佣金记录</em>
        		</a>
        	</li>
			<li id="nav_Order_zijin">
        		<a href="<?php echo U('Order/zijin');?>">
        			<i class="case"></i>
        			<em>资金变化</em>
        		</a>
        	</li>
		</ul>
		<ul>
			<li id="nav_Pay_cz">
        		<a href="<?php echo U('Pay/cz');?>">
        			<i class="link"></i>
        			<em>充值记录</em>
        		</a>
        	</li>
			<li id="nav_User_tx">
        		<a href="<?php echo U('Pay/tx');?>">
        			<i class="guestbook"></i>
        			<em>提现记录</em>
        		</a>
        	</li>
		</ul>
		<ul>
			<li id="nav_Order_pin">
        		<a href="<?php echo U('Order/pin');?>">
        			<i class="show"></i>
        			<em>评价记录</em>
        		</a>
        	</li>
		</ul>
        




	</div>
</div>
<script>
    //设置cur效果
    var MODULE_NAME = "<?php echo MODULE_NAME;?>";
    var ACTION_NAME = "<?php echo ACTION_NAME;?>";
    if(MODULE_NAME != "Main"){
        $("#nav_"+MODULE_NAME+"_"+ACTION_NAME).addClass("cur");
    }
</script>


    <div id="dcMain"> <!-- 当前位置 -->
        <div id="urHere">
            <?php echo ($title); ?>
        </div>
        <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">


            <!DOCTYPE html>
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


        </div>
    </div>
    <div class="clear"></div>
    	<div id="dcFooter">
		 <div id="footer">
		  <div class="line"></div>
			  <ul>
			   版权所有 © 2018 <a href="http://www.ohyu.net/" target="_blank">成都海之心科技</a>，并保留所有权利。
			  </ul>
		 </div>
	</div>

    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>