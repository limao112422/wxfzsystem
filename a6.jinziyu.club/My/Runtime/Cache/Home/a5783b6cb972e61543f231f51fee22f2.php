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
	<?php if(session('admin_user')){ ?>
    <header class="main-header">
  <a href="<?php echo U(GROUP_NAME.'/Main_index');?>" class="logo">
    <span class="logo-mini"><b>后</b>台</span>
    <span class="logo-lg">
      <img src="/Public/css/img/logo.png">
      <b><?php echo C('cfg_sitetitle');?></b>
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
                </ul>
			</li>
          <li class="treeview">
				<a href="#">
					<i class=" fa fa-bars"></i> 
					<span>信息管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Block_index');?>">
							<i class="fa fa-angle-right"></i> 
							帮助中心
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/text_index');?>">
							<i class="fa fa-angle-right"></i> 
							公告管理
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
							财务流水
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
					<i class=" fa fa-users"></i> 
					<span>用户管理</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
							<i class="fa fa-angle-right"></i> 
							用户管理
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Qudao_index');?>">
							<i class="fa fa-angle-right"></i> 
							下单员管理
						</a>
                  </li>
				</ul>
			</li>	
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>任务管理</span>
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
						<a href="<?php echo U(GROUP_NAME.'/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							任务记录
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
	
           
		</ul>
	</section>
</aside>
	<?php } else { ?>
  <header class="main-header">
  <a href="<?php echo U('Qudao/Main_index');?>" class="logo">
    <span class="logo-mini"><b>后</b>台</span>
    <span class="logo-lg">
      <img src="/Public/css/img/logo.png">
      <b><?php echo C('cfg_sitetitle');?></b>
    </span>

  </a>
  <nav class="navbar navbar-static-top">
    <a href="<?php echo U('Qudao/Main_index');?>" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="<?php echo U('Qudao/Main_index');?>" class="user-panel dropdown-toggle" data-toggle="dropdown" style="height: 50px; display: flex;">
            <img src="/Public/css/img/avatar2.png" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo session('qudao');?> </span>
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
              <a href="<?php echo U('Qudao/logout');?>">
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
				<a href="<?php echo U('Qudao/Main_index');?>">
					<i class="fa fa-home"></i> <span>首页</span>
				</a>
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
						<a href="<?php echo U('Qudao/Caiwu_index');?>">
							<i class="fa fa-angle-right"></i> 
							财务流水
						</a>
					</li>
					<li>
						<a href="<?php echo U('Qudao/tixian_index');?>">
							<i class="fa fa-angle-right"></i> 
							账户充值
						</a>
					</li>
								</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class=" fa fa-registered"></i> 
					<span>任务管理</span>
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
						<a href="<?php echo U('Qudao/list_add');?>">
							<i class="fa fa-angle-right"></i> 
							任务发布
						</a>
					</li>
					<li>
						<a href="<?php echo U('Qudao/jieshen');?>">
							<i class="fa fa-angle-right"></i> 
							任务记录
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
	    	<li class="treeview">
				<a href="#">
					<i class=" fa fa-users"></i> 
					<span>邀请号商</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="<?php echo U('Qudao/Haos_index');?>">
							<i class="fa fa-angle-right"></i> 
							下级号商管理
						</a>
					</li>
				</ul>
			</li>	
           
		</ul>
	</section>
</aside>
  <?php }?>
    <div class="content-wrapper" style="min-height: 848px;">

            <link rel="stylesheet" href="/Public/css/switch.css">
<link href="/Public/css/select2.min.css" rel="stylesheet" />
<script src="/Public/js/select2.min.js"></script>
<section class="content-header">
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i> Home</a></li>
		<li class="active">系统设置</li>
	</ol>
</div>
</section><!-- Main content -->
<section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header" style="min-height: 35px;">
				<h3 class="box-title"></h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
                <form action="<?php echo U(GROUP_NAME.'/System_index');?>" method="post">
				<table class="table table-bordered table-hover table-striped text-center" style="font-size: 14px;">
					<tbody>
                      
					<tr>
						
						
          			  <th>名称</th>
                       

           			 <th>内容</th>
            	
					</tr>  	
                       <tr>
                        <td align="right">站点名称</td>
                        <td>
                            <input type="text" name="sitename" value="<?php echo C('cfg_sitename');?>" size="80" class="inpMain" />
                        </td>
                    </tr> 
                  	 <tr>
                        <td align="right">站点标题</td>
                        <td>
                            <input type="text" name="sitetitle" value="<?php echo C('cfg_sitetitle');?>" size="80" class="inpMain" />
                        </td>
                    </tr> 
         		
					   <tr>
                        <td align="right">用户端邀请分成比例</td>
                        <td>
                            <input type="text" name="fencheng" value="<?php echo C('cfg_fencheng');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                       <tr>
                        <td align="right">下单端邀请分成比例</td>
                        <td>
                            <input type="text" name="fencheng2" value="<?php echo C('cfg_fencheng2');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                        <tr>
                        <td align="right">最低提现金额</td>
                        <td>
                            <input type="text" name="min" value="<?php echo C('cfg_min');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                      
					   <tr>
                        <td align="right">提现手续费比例</td>
                        <td>
                            <input type="text" name="tixian" value="<?php echo C('cfg_tixian');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                       <tr>
                        <td align="right">最低任务发布金额</td>
                        <td>
                            <input type="text" name="yongjin" value="<?php echo C('cfg_yongjin');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                        <tr>
                        <td align="right">任务发布手续费比例</td>
                        <td>
                            <input type="text" name="shouxu" value="<?php echo C('cfg_shouxu');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                             <tr>
                        <td align="right">APP下载地址</td>
                        <td>
                            <input type="text" name="dowurl" value="<?php echo C('cfg_dowurl');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                             <tr>
                        <td align="right">客服微信</td>
                        <td>
                            <input type="text" name="wxno" value="<?php echo C('cfg_wxno');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                             <tr>
                        <td align="right">短信接口地址</td>
                        <td>
                            <input type="text" name="SMS_API" value="<?php echo C('cfg_SMS_API');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                             <tr>
                        <td align="right">短信接口账号</td>
                        <td>
                            <input type="text" name="SMS_USER" value="<?php echo C('cfg_SMS_USER');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                             <tr>
                        <td align="right">短信接口密码</td>
                        <td>
                            <input type="text" name="smspass" value="<?php echo C('cfg_smspass');?>" size="80" class="inpMain" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">平台推广二维码背景图</td>
                        <td>
                            <input type="text" name="xiatu" id="thumbnail" value="<?php echo C('cfg_xiatu');?>" size="80" class="inpMain" />
                            <button id="Upload_img" class="btn" type="button">上传</button>
                            <div style="display: none;">
                                <input id="imgFile" type="file" name="imgFile" style="display: none;">
                            </div>
                            <div id="res_show_img" style="display: none;"></div>                        </td>
                    </tr>
                       <tr>
                        <td align="right">平台LOGO</td>
                        <td>
                            <input type="text" name="vipimg" id="thumbnail6" value="<?php echo C('cfg_vipimg');?>" size="30" class="inpMain" />
                            <button id="Upload_img6" class="btn" type="button">上传</button>
                            <div style="display: none;">
                                <input id="imgFile6" type="file" name="imgFile" style="display: none;">
                            </div>
                            <div id="res_show_img6" style="display: none;"></div>                        </td>
                    </tr>	
               </tbody>
				</table>
			</div>
              <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
                <tr>
                    <td width="120"></td>
                    <td width="743">
                        <input class="btn" type="submit" onclick="tijiao()"value="提交" />
                    </td>
                </tr>
            </table>
			<!-- /.box-body -->
			<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>
</div>
</section>



<style>
	.do-txt{
		display:none;
	}
	.do-txt .txts span{
		
	}
	.do-txt .txts{
		padding:20px 10px 5px;
		position: relative;
		display:flex;
	}
	.do-txt .txts select{
		border: 1px solid #ddd;
		padding: 2px 10px;
	}
	.do-txt button{
		width: 50%;
		margin: 30px 25%;
		height: 35px;
		border: none;
		background: #f0882c;
		color: #fff;
		border-radius: 5px;
		font-size: 15px;
		cursor:pointer;
	}
	.layui-layer{
		z-index:999!important;
	}
	.layui-layer-shade{
		z-index:99!important;
	}
</style>

<script>

    function delCat(name,jumpurl){

        layer.confirm(

                '确定要删除自由块:['+name+']吗?',

                function (){

                    window.location.href = jumpurl;

                }

        );

    }

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

	//上传缩略图
    $(function (){
        //如果有图片就显示
        if($("#thumbnail3").val() != '' && $("#thumbnail3").val() != null){
            $("#res_show_img3").show();
			//alert($("#thumbnail3").val());
            $("#res_show_img3").html('<img src="'+$("#thumbnail3").val()+'" width="150px">');
        }

        $("#Upload_img3").click(function (){
            $("#show_Img3").html('');
            $("#show_Img3").css('display','none');
            $("#imgFile3").click();
        });
        $("#imgFile3").change(function(){
            $("#Upload_img3").html('上传中...');
            var tmp_path = $("#imgFile3").val();
            if(tmp_path != '' && tmp_path != null){
                var pic = $('#imgFile3')[0].files[0];
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
                            $("#res_show_img3").show();
                            var imgurl = data.url;
                            $("#res_show_img3").html('<img src="'+imgurl+'" width="150px">');
                            $("#thumbnail3").val(imgurl);
                            layer.msg('上传成功');
                        }else{
                            layer.msg('上传出错了...');
                        }
                        $("#Upload_img3").html('重新上传');
                    },
                    error:function (){
                        $("#Upload_img3").html('重新上传');
                    }
                });
            }
        });
    });


	//上传缩略图
    $(function (){
        //如果有图片就显示
        if($("#thumbnail4").val() != '' && $("#thumbnail4").val() != null){
            $("#res_show_img4").show();
            $("#res_show_img4").html('<img src="'+$("#thumbnail4").val()+'" width="150px">');
        }

        $("#Upload_img4").click(function (){
            $("#show_Img4").html('');
            $("#show_Img4").css('display','none');
            $("#imgFile4").click();
        });
        $("#imgFile4").change(function(){
            $("#Upload_img4").html('上传中...');
            var tmp_path = $("#imgFile4").val();
            if(tmp_path != '' && tmp_path != null){
                var pic = $('#imgFile4')[0].files[0];
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
                            $("#res_show_img4").show();
                            var imgurl = data.url;
                            $("#res_show_img4").html('<img src="'+imgurl+'" width="150px">');
                            $("#thumbnail4").val(imgurl);
                            layer.msg('上传成功');
                        }else{
                            layer.msg('上传出错了...');
                        }
                        $("#Upload_img4").html('重新上传');
                    },
                    error:function (){
                        $("#Upload_img4").html('重新上传');
                    }
                });
            }
        });
    });


	//上传缩略图
    $(function (){
        //如果有图片就显示
        if($("#thumbnail5").val() != '' && $("#thumbnail5").val() != null){
            $("#res_show_img5").show();
            $("#res_show_img5").html('<img src="'+$("#thumbnail5").val()+'" width="150px">');
        }

        $("#Upload_img5").click(function (){
            $("#show_Img5").html('');
            $("#show_Img5").css('display','none');
            $("#imgFile5").click();
        });
        $("#imgFile5").change(function(){
            $("#Upload_img5").html('上传中...');
            var tmp_path = $("#imgFile5").val();
            if(tmp_path != '' && tmp_path != null){
                var pic = $('#imgFile5')[0].files[0];
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
                            $("#res_show_img5").show();
                            var imgurl = data.url;
                            $("#res_show_img5").html('<img src="'+imgurl+'" width="150px">');
                            $("#thumbnail5").val(imgurl);
                            layer.msg('上传成功');
                        }else{
                            layer.msg('上传出错了...');
                        }
                        $("#Upload_img5").html('重新上传');
                    },
                    error:function (){
                        $("#Upload_img5").html('重新上传');
                    }
                });
            }
        });
    });
  	//上传缩略图
    $(function (){
        //如果有图片就显示
        if($("#thumbnail6").val() != '' && $("#thumbnail6").val() != null){
            $("#res_show_img6").show();
            $("#res_show_img6").html('<img src="'+$("#thumbnail6").val()+'" width="150px">');
        }

        $("#Upload_img6").click(function (){
            $("#show_Img6").html('');
            $("#show_Img6").css('display','none');
            $("#imgFile6").click();
        });
        $("#imgFile6").change(function(){
            $("#Upload_img6").html('上传中...');
            var tmp_path = $("#imgFile6").val();
            if(tmp_path != '' && tmp_path != null){
                var pic = $('#imgFile6')[0].files[0];
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
                            $("#res_show_img6").show();
                            var imgurl = data.url;
                            $("#res_show_img6").html('<img src="'+imgurl+'" width="150px">');
                            $("#thumbnail6").val(imgurl);
                            layer.msg('上传成功');
                        }else{
                            layer.msg('上传出错了...');
                        }
                        $("#Upload_img6").html('重新上传');
                    },
                    error:function (){
                        $("#Upload_img6").html('重新上传');
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