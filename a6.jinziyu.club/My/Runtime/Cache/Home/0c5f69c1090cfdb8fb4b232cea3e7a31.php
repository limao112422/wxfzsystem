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
            <li>
              <a href="<?php echo U(GROUP_NAME.'/Admin_chagemypass');?>"><i class="fa fa-fw fa-key"></i> 修改密码</a>
            </li>
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
					<i class=" fa fa-registered"></i> 
					<span>网贷信息</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
                  	<li>
						<a href="<?php echo U(GROUP_NAME.'/bank_index');?>">
							<i class="fa fa-angle-right"></i> 
							网贷分类
						</a>
					</li>
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
					<li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li>
						<li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_vague');?>">
								<i class="fa fa-angle-right"></i> 
								模糊核对
							</a>
						</li>					</ul>
			</li>
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>员工管理</span>
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
							主管列表
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Daili_index');?>">
							<i class="fa fa-angle-right"></i> 
							组长列表
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
							主管推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_team');?>">
							<i class="fa fa-angle-right"></i> 
							组长推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_users');?>">
							<i class="fa fa-angle-right"></i> 
							员工推广统计
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
         
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>员工管理</span>
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
							组长列表
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
							组长推广统计
						</a>
					</li>
					<li>
						<a href="<?php echo U(GROUP_NAME.'/Center_users');?>">
							<i class="fa fa-angle-right"></i> 
							员工推广统计
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
          	<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>员工管理</span>
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
							员工推广统计
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

             <!-- Content Header (Page header) -->
<section class="content-header">
	<div>
		<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;">
				<i class=" fa fa-home">
				&nbsp;</i>Home</a>
			</li>
			<li class="active">轮播图管理</li>
		</ol>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<form class="form-horizontal" style="margin-top:30px" method="POST" action="<?php echo U(GROUP_NAME.'/Img_add');?>" enctype="multipart/form-data">
					<div class="box-body">
									
						<div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">图片</label>
							<div class="col-sm-6">
							  <input type="text" name="img" id="thumbnail" value="" size="30" class="inpMain" />

                <button id="Upload_img" class="btn" type="button">上传</button>

                <div style="display: none;">

                    <input id="imgFile" type="file" name="imgFile" style="display: none;">

                </div>

                <div id="res_show_img" style="display: none;"></div>
							</div>
						</div>

					</div>
				<div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">名称</label>
							<div class="col-sm-6">
								<input type="text" name="tit" class="form-control col-sm-9" value="">
							</div>
						</div>		
                  <div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">链接</label>
							<div class="col-sm-6">
								<input type="text" name="url" class="form-control col-sm-9" value="">
							</div>
						</div>		
					<!-- /.box-body -->

					<div class="box-footer">
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="button" id="ajaxBtn" class="btn btn-primary">添加</button>
							</div>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</section>

<script>
	$('#paymodel').on('change',function(){
		var model = $('#paymodel option:selected').val();
		if(model){
			$('.paymodel').hide();
			$('.paymodel').eq(model-1).show();
		}else{
			$('.paymodel').hide();
		}
		
	})

</script>

    </div>
  
    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
</div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=User&a=edit";
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

    </div>
    <div class="clear"></div>
    
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>