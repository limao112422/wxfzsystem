<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <?php echo C('cfg_sitetitle');?> </title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
	<link href="/Public/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/css/adminlte.min.css">
	<link rel="stylesheet" href="/Public/css/_all-skins.min.css">
	<link rel="stylesheet" href="/Public/css/blue.css">
	<link rel="stylesheet" href="/Public/css/bootstrap-datetimepicker.min.css">
	<link href="https://novel.youshuge.com/img/favicon.ico" rel="icon" type="image/x-icon">
	<link rel="stylesheet" href="/Public/css/layer.css">
	<script src="/Public/js/jquery-2.2.3.min.js"></script>
	<script src="/Public/js/bootstrap.min.js"></script>
	<script src="/Public/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/Public/js/app.min.js"></script>
	<script src="/Public/js/layer.js"></script>
	<style type="text/css">
		.skin-purple-light .wrapper, .skin-purple-light .main-sidebar, .skin-purple-light .left-side {
			background-color: #f9f9f9;
		}

		.skin-purple-light .sidebar-menu > li > .treeview-menu {
			background-color: #e8e8e8;
		}

		.skin-purple-light .sidebar-menu > li > a {
			font-weight: unset;
		}

		.skin-purple-light .treeview-menu > li.active > a, .skin-purple-light .sidebar-menu > li.active > a, .skin-purple-light .treeview-menu > li.active > a {
			background-color: #e6f7ff;
			border-right: 2px solid #168fff;
			color: #57b6ff;
			font-weight: unset;
		}

		.skin-purple-light .sidebar-menu > li:hover > a, .skin-purple-light .sidebar-menu > li:hover > a, .skin-purple-light .treeview-menu > li > a:hover, .skin-purple-light .sidebar-menu > li > a:hover {
			color: #57b6ff;
		}

		.sidebar-menu .treeview-menu > li > a {
			padding-left: 40px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.sidebar-menu .treeview-menu {
			padding-left: 0;
		}

		.skin-purple-light .sidebar a {
			color: #666;
		}

		.wysiwyg-color-black {
			color: black !important;
		}

		.wysiwyg-color-silver {
			color: silver !important;
		}

		.wysiwyg-color-gray {
			color: gray !important;
		}

		.wysiwyg-color-maroon {
			color: maroon !important;
		}

		.wysiwyg-color-red {
			color: red !important;
		}

		.wysiwyg-color-purple {
			color: purple !important;
		}

		.wysiwyg-color-green {
			color: green !important;
		}

		.wysiwyg-color-olive {
			color: olive !important;
		}

		.wysiwyg-color-navy {
			color: navy !important;
		}

		.wysiwyg-color-blue {
			color: blue !important;
		}

		.wysiwyg-color-orange {
			color: orange !important;
		}
		.glyphicon {
			margin-right: 6px;
		}
		.wechat{
			line-height: 50px;
			width: 100%;
			display: block;
			text-align: center;
			font-size: 24px;
			color: #ecfd02;
		}
	</style>
	<link rel="stylesheet" href="/Public/css/laydate.css" id="layuicss-laydate">
	<style type="text/css">
		.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>
</head>
<body class="sidebar-mini skin-purple-light" style="height: auto;">
<div class="wrapper" style="height: auto;">

    <header class="main-header">
  <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="logo">
    <span class="logo-mini"><b>演</b>示</span>
    <span class="logo-lg">
      <img src="/Public/css/img/logo.png">
      <b>电销联盟系统</b>
    </span>

  </a>
  <nav class="navbar navbar-static-top">
    <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="user-panel dropdown-toggle" data-toggle="dropdown" style="height: 50px; display: flex;">
            <img src="/Public/css/img/avatar2.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo session('admin_name');?> </span>
            <span>
              <i class="fa fa-angle-down"></i>
              <i class="fa fa-angle-up hidden"></i>
            </span>
          </a>
          <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close" style="width: 150px;">
            <!--li>
              <a href="<?php echo U(GROUP_NAME.'/Admin_chagemypass');?>"><i class="fa fa-fw fa-key"></i> 修改密码</a>
            </li-->
            <li class="divider"></li>
            <li class="divider"></li>
            <li>
              <a href="<?php echo U(GROUP_NAME.'/logout');?>">
                <i class="fa fa-fw fa-power-off"></i> 安全退出
              </a>
            </li>
          </ul>
        </li>


      </ul>
    </div>
    <b class="wechat">管理后台</b>
  </nav>
</header>
    <!-- dcHead 结束 -->
    <aside class="main-sidebar">
	<section class="sidebar" style="height: auto;">
		<ul class="sidebar-menu">
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Main_index');?>">
					<i class="fa fa-home"></i> <span>首页</span>
				</a>
			</li>
	<?php $m=D('admin'); $id=session("admin_user"); $admin=$m->where(array('id'=>$id))->find(); $gid=$admin['gid']; if($gid==1){ ?>
            	<li class="treeview">
				<a href="#">
					<i class=" fa fa-tasks"></i> 
					<span>系统设置</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/System_index');?>">
							<i class="fa fa-angle-right"></i> 
							系统设置
						</a>
					</li>
                   	<li>
						<a href="<?php echo U(GROUP_NAME.'/Img_index');?>">
							<i class="fa fa-angle-right"></i> 
							轮播图管理
						</a>
					</li>
                </ul>
			</li>
              <li class="treeview">
				<a href="#">
					<i class=" fa fa-money"></i> 
					<span>财务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							分成记录
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jiesuan');?>">
							<i class="fa fa-angle-right"></i> 
							提现管理
						</a>
					</li>
								</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>网贷信息</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<!--li>
						<a href="<?php echo U(GROUP_NAME.'/bank_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷分类
						</a>
					</li-->
					<li>
						<a href="<?php echo U(GROUP_NAME.'/list_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷列表
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							申请记录
						</a>
					</li>
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
						<li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								数据核对
							</a>
						</li>					</ul>
			</li>
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>代理管理</span>
				</a>
			</li>
			
		
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-users"></i> 
					<span>管理组</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Admin_index');?>">
							<i class="fa fa-angle-right"></i> 
							合伙人管理
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Daili_index');?>">
							<i class="fa fa-angle-right"></i> 
							团队管理
						</a>
                  </li>
				</ul>
			</li>	
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-bars"></i> 
					<span>数据统计</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_index');?>">
							<i class="fa fa-angle-right"></i> 
							合伙人推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_team');?>">
							<i class="fa fa-angle-right"></i> 
							团队推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_users');?>">
							<i class="fa fa-angle-right"></i> 
							代理推广统计
						</a>
					</li>
					<!--li>
						<a href="<?php echo U(GROUP_NAME.'/Center_qun');?>">
							<i class="fa fa-angle-right"></i> 
							群组推广统计
						</a>
					</li-->
				</ul>
			</li>	
      
<?php }elseif($gid==0){ ?>
           <li class="treeview">
				<a href="#">
					<i class=" fa fa-money"></i> 
					<span>财务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							分成记录
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/tixian_index');?>">
							<i class="fa fa-angle-right"></i> 
							提现管理
						</a>
					</li>
								</ul>
			</li>
		<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>网贷信息</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/list_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷列表
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							申请记录
						</a>
					</li>
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
									</ul>
			</li>
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>代理管理</span>
				</a>
			</li>
			
		
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-users"></i> 
					<span>管理组</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Daili_index');?>">
							<i class="fa fa-angle-right"></i> 
							团队列表
						</a>
                  </li>
				</ul>
			</li>	
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-bars"></i> 
					<span>数据统计</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_team');?>">
							<i class="fa fa-angle-right"></i> 
							团队推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_users');?>">
							<i class="fa fa-angle-right"></i> 
							代理推广统计
						</a>
					</li>
					<!--li>
						<a href="<?php echo U(GROUP_NAME.'/Center_qun');?>">
							<i class="fa fa-angle-right"></i> 
							群组推广统计
						</a>
					</li-->
				</ul>
			</li>	
     <?php } else { ?>
            <li class="treeview">
				<a href="#">
					<i class=" fa fa-money"></i> 
					<span>财务管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							分成记录
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/tixian_index');?>">
							<i class="fa fa-angle-right"></i> 
							提现管理
						</a>
					</li>
								</ul>
			</li>
          	<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>网贷信息</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/list_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷列表
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							申请记录
						</a>
					</li>
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
									</ul>
			</li>
          	<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>代理管理</span>
				</a>
			</li>
			
		
			
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-bars"></i> 
					<span>数据统计</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					
				
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_users');?>">
							<i class="fa fa-angle-right"></i> 
							代理推广统计
						</a>
					</li>
					<!--li>
						<a href="<?php echo U(GROUP_NAME.'/Center_qun');?>">
							<i class="fa fa-angle-right"></i> 
							群组推广统计
						</a>
					</li-->
				</ul>
			</li>	
         <?php } ?>
		</ul>
	</section>
</aside>


    <div class="content-wrapper" style="min-height: 848px;">

            <section class="content-header">
	<div>
		<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;">
				<i class=" fa fa-home">
				&nbsp;</i>Home</a>
			</li>
			<li class="active">网贷设置</li>
			<li class="active">添加网贷</li>
		</ol>
	</div>
</section>

<style>
.col-sm-3 {
    width: 15%;
}
</style>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<form class="form-horizontal" style="margin-top:30px" method="POST" id="form" action="<?php echo U(GROUP_NAME.'/list_edit',array('id'=>$aid));?>" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">标题</label>
							<div class="col-sm-6">
								<input type="text" name="name" class="form-control col-sm-9" value="<?php echo ($info["name"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">简介</label>
							<div class="col-sm-6">
								<input type="text" name="d" class="form-control col-sm-9" value="<?php echo ($info["d"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
					
						<div class="form-group">
							<label for="pass" class="control-label col-sm-3">结算方式</label>
							<div class="col-sm-6">
								<select class="form-control col-sm-9" id="jiesuan" name="jiesuan" default="">
                                    <option value="">请选择</option>
									<option value="1">日结</option>
									<option value="2">周结</option>
									<option value="3">月结</option>
								</select>
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
					
						<!--div class="form-group">
							<label for="pass" class="control-label col-sm-3">分类</label>
							<div class="col-sm-6">
								<select class="form-control col-sm-9" id="ishot" name="bank" default="">
                                  <option value="<?php echo ($now_typeid); ?>" ><?php echo ($now_typename); ?></option>
                                  <?php if(is_array($bank)): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                              </select>
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div-->
						
						
						
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">封面图</label>
							<div class="col-sm-6">
								<input type="text" name="img" id="thumbnail" value="<?php echo ($info["img"]); ?>" size="30" class="inpMain" />


                <button id="Upload_img" class="btn" type="button">上传</button>


                <div style="display: none;">


                    <input id="imgFile" type="file" name="imgFile" style="display: none;">


                </div>


                <div id="res_show_img" style="display: none;"></div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">推广二维码背景图</label>
							<div class="col-sm-6">
								  <input type="text" name="timg" id="thumbnail2" value="<?php echo ($info["timg"]); ?>" size="30" class="inpMain" />


                <button id="Upload_img2" class="btn" type="button">上传</button>


                <div style="display: none;">


                    <input id="imgFile2" type="file" name="imgFile2" style="display: none;">


                </div>


                <div id="res_show_img2" style="display: none;"></div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">佣金</label>
							<div class="col-sm-6">
								<input type="text" name="pay" class="form-control col-sm-9" value="<?php echo ($info["pay"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">链接</label>
							<div class="col-sm-6">
								<input type="text" name="link" class="form-control col-sm-9" value="<?php echo ($info["link"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">甲方后台地址</label>
							<div class="col-sm-6">
								<input type="text" name="dz" class="form-control col-sm-9" value="<?php echo ($info["dz"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">甲方后台账号</label>
							<div class="col-sm-6">
								<input type="text" name="zh" class="form-control col-sm-9" value="<?php echo ($info["zh"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">甲方后台密码</label>
							<div class="col-sm-6">
								<input type="text" name="mm" class="form-control col-sm-9" value="<?php echo ($info["mm"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">贷款额度</label>
							<div class="col-sm-6">
							<select class="form-control col-sm-9" id="ishot" name="price" default="<?php echo ($info["price"]); ?>">
                    <option value="1000以下"  >1000以下</option>
                    <option value="1000-5000"  >1000-5000</option>
                    <option value="5000以上">5000以上</option>
                </select>				
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">申请人数</label>
							<div class="col-sm-6">
								<input type="text" name="member" class="form-control col-sm-9" value="<?php echo ($info["member"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>	
                      	<div class="form-group">
							<label for="name" class="control-label col-sm-3">平台备注</label>
							<div class="col-sm-6">
								<input type="text" name="bz" class="form-control col-sm-9" value="<?php echo ($info["bz"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>
						<div class="form-group">
							<label for="name" class="control-label col-sm-3">排序权值</label>
							<div class="col-sm-6">
								<input type="text" name="sort" class="form-control col-sm-9" value="<?php echo ($info["sort"]); ?>">
								<p class="help-block help-block-error col-sm-7 col-xs-10">排序权值越大，前后台显示越前</p>
							</div>
						</div>
						
					
						
						<!--div class="form-group">
							<label for="pass" class="control-label col-sm-3">所需材料</label>
							<div class="col-sm-6">
								<textarea name="need" id="need" class="longinput" style="margin: 0px; height: 400px; width:100%;"></textarea>
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div-->
						
					</div>
						
					<!-- /.box-body -->

					<div class="box-footer">
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<!-- --><input type="hidden" name="id" id="id" value="<?php echo ($aid); ?>" /> 
								<button type="button" id="ajaxBtn" class="btn btn-primary">保存</button>
								<button type="button" class="btn btn-inverse" style="margin-left:20px;" onclick="history.go(-1)">返回</button>
							</div>	
						</div>
					</div>
				</form>
			</div>
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div>
</section>
<script src="/Public/Baidu/ueditor.config.js"></script>
<script src="/Public/Baidu/ueditor.all.min.js"></script>
<script>
	var ue1 = UE.getEditor('liuc');
	var ue2 = UE.getEditor('need');
</script>

<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=Goods&a=edit";
    var href = '';
	console.log(route);
    $('.sidebar-menu').find('a').each(function () {
        $(this).parent('li').removeClass('active');
        href = $(this).attr('href');
        if ((href.indexOf(route) != -1)) {
            $(this).parent('li').addClass('active');
            $(this).parents('.treeview').addClass('active');
			return false;
		}
    });

    $('.dropdown-toggle').click(function (ev) {
        $(this).find('.fa-angle-down').toggleClass('hidden');
        $(this).find('.fa-angle-up').toggleClass('hidden');
    });
	
	// 调整默认选择内容
	$("select").each(function(index, element) {
		$(element).find("option[value='"+$(this).attr('default')+"']").attr('selected','selected');
	});
</script>
<script>


    //上传缩略图


    $(function (){


        //如果有图片就显示


        if($("#thumbnail").val() != '' && $("#thumbnail").val() != null){


            $("#res_show_img").show();


            $("#res_show_img").html('<img src="'+$("#thumbnail").val()+'" width="150px">');


        }





        $("#Upload_img").click(function (){


            $("#show_Img").html('');


            $("#show_Img").css('display','none');


            $("#imgFile").click();


        });


        $("#imgFile").change(function(){


            $("#Upload_img").html('上传中...');


            var tmp_path = $("#imgFile").val();


            if(tmp_path != '' && tmp_path != null){


                var pic = $('#imgFile')[0].files[0];


                var fd = new FormData();


                fd.append('imgFile', pic);


                $.ajax({


                    url:"/Public/main/js/kindeditor/php/upload_json.php",


                    type:"post",


                    dataType:'json',


                    data: fd,


                    cache: false,


                    contentType: false,


                    processData: false,


                    success:function(data){


                        if(data && data.error == '0'){


                            $("#res_show_img").show();


                            var imgurl = data.url;


                            $("#res_show_img").html('<img src="'+imgurl+'" width="150px">');


                            $("#thumbnail").val(imgurl);


                            layer.msg('上传成功');


                        }else{


                            layer.msg('上传出错了...');


                        }


                        $("#Upload_img").html('重新上传');


                    },


                    error:function (){


                        $("#Upload_img").html('重新上传');


                    }


                });


            }


        });


    });


</script>

<script>


    //上传缩略图


    $(function (){


        //如果有图片就显示


        if($("#thumbnail2").val() != '' && $("#thumbnail2").val() != null){


            $("#res_show_img2").show();


            $("#res_show_img2").html('<img src="'+$("#thumbnail2").val()+'" width="150px">');


        }





        $("#Upload_img2").click(function (){


            $("#show_Img2").html('');


            $("#show_Img2").css('display','none');


            $("#imgFile2").click();


        });


        $("#imgFile2").change(function(){


            $("#Upload_img2").html('上传中...');


            var tmp_path = $("#imgFile2").val();


            if(tmp_path != '' && tmp_path != null){


                var pic = $('#imgFile2')[0].files[0];


                var fd = new FormData();


                fd.append('imgFile2', pic);


                $.ajax({


                    url:"/Public/main/js/kindeditor/php/upload_json2.php",


                    type:"post",


                    dataType:'json',


                    data: fd,


                    cache: false,


                    contentType: false,


                    processData: false,


                    success:function(data){


                        if(data && data.error == '0'){


                            $("#res_show_img2").show();


                            var imgurl = data.url;


                            $("#res_show_img2").html('<img src="'+imgurl+'" width="150px">');


                            $("#thumbnail2").val(imgurl);


                            layer.msg('上传成功');


                        }else{


                            layer.msg('上传出错了...');


                        }


                        $("#Upload_img2").html('重新上传');


                    },


                    error:function (){


                        $("#Upload_img2").html('重新上传');


                    }


                });


            }


        });


    });


</script>

    </div>
    <div class="clear"></div>
    
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>