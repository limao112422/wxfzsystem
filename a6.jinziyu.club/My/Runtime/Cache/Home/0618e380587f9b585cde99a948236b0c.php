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
					<!--li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_index');?>">
								<i class="fa fa-angle-right"></i> 
								精准核对
							</a>
						</li-->
						<li>
							<a href="<?php echo U(GROUP_NAME.'/Creply_vague');?>">
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
					<i class=" fa fa-registered"></i> 
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
					<i class=" fa fa-registered"></i> 
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

            <link href="/Public/css/select2.min.css" rel="stylesheet" />
<script src="/Public/js/select2.min.js"></script>
<script src="/Public/layui/layui.js"></script>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div>
		<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;">
				<i class=" fa fa-home">
				&nbsp;</i>Home</a>
			</li>
			<li class="active">网贷信息</li>
			<li class="active">模糊核对</li>
		</ol>
	</div>
</section>
<style>
	.searchCount{
	    display: block;
		height: 40px;
		line-height: 40px;
		float: right;
		color: #f39c12;
		text-decoration: underline;
		cursor:pointer;
	}
</style>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<form class="form-horizontal" style="margin-top:30px" method="POST" action="<?php echo U(GROUP_NAME.'/Creply_vague');?>" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">核对机构</label>
							<div class="col-sm-6">
								<select class="singleSelect form-control" name="keyword3" id="gid">
									<option value="">请选择</option>
                                    <?php if(is_array($ck_pro )): $i = 0; $__LIST__ = $ck_pro ;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo['id']==$keyword3){echo "selected";} ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								</select>
								<p class="help-block help-block-error col-sm-7 col-xs-10"></p>
							</div>
						</div>					

						<div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">核对日期</label>
							<div class="col-sm-6">
									<input name="keyword4" type="text" style="width:100px;" class="inpMain" placeholder="搜索：开始时间" value="<?php echo ($keyword4); ?>" id="test1">
		/
		<input name="keyword5" type="text" style="width:100px;" class="inpMain" placeholder="搜索：结束时间" value="<?php echo ($keyword5); ?>" id="test2">
							</div>
						</div>					

						<div class="form-group">
							<label for="exampleInputEmail1" class="control-label col-sm-3">核对比例</label>
							<div class="col-sm-6">
								<input type="text" name="bl" class="form-control col-sm-9" value="" style="width:70%">
								
                              	<input name="submit"type="submit" value="查看总站" class="btn btn-primary" style="width:20%"><?php echo ($count); ?>
								<p class="help-block help-block-error col-sm-7 col-xs-10">请先查看总站申请量后输入大于0，小于1的数值</p>
							</div>
						</div>

					</div>
				
					<!-- /.box-body -->
					<div class="box-footer">
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-9">
										<input name="submit" type="submit" value="确定核对" class="btn btn-primary" style="width:70%">
								</div>
							</div>
						</div>					
				</form>
			</div>
		</div>
	</div>
</section>

<script>

	$(function(){
		$('.singleSelect').select2();
	});
	
	
	//查看总站总申请量
	function searchCount(){
		var gid = $('#gid option:selected').val();
		var times = $('#times').val();
		if(gid == ""){
			layer.msg('请选择核对机构！');
			return false;
		}
		if(times == ""){
			layer.msg('请选择核对日期！');
			return false;
		}
		$.post("/m.php?m=Member&c=Creply&a=searchCount",{gid:gid,times:times},function(d){
			if(d){
				if(d){
					layer.alert(d.info);
				}else{
					layer.msg(d.info);
				}
			}else{
				layer.msg("请求失败！");
			}
		})
	}
	
	$.fn.datetimepicker.dates['zh-CN'] = {
		days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
		daysShort: ["日", "一", "二", "三", "四", "五", "六", "日"],
		daysMin: ["日", "一", "二", "三", "四", "五", "六", "日"],
		months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
		monthsShort: ["一", "二", "三", "四", "五", "六", "七", "八", "九", "十", "十一", "十二"],
		meridiem: ["上午", "下午"],
		today: "今天"
	};

	$('.reservationtime').datetimepicker({
		format: 'yyyy-mm-dd',
		language: 'zh-CN',
		weekStart: 1,
		todayBtn: 1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0,
		showMeridian: 1
	});

</script>

    </div>
  
    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
</div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=Creply&a=vague";
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
layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  //执行一个laydate实例
  laydate.render({
    elem: '#test1' //指定元素
  });
   //执行一个laydate实例
  laydate.render({
    elem: '#test2' //指定元素
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