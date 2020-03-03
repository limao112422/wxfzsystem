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
<section class="content-header">
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i>&nbsp;Home</a></li>
		<li class="active">任务管理</li>
		<li class="active">任务列表</li>
	</ol>
</div>
</section>   <script language="JavaScript">
function myrefresh()
{
   window.location.reload();
}
setTimeout('myrefresh()',3000); //指定1秒刷新一次
</script> 
<section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"></h3>
				<div class="box-tools" style="left:10px;">
					<form class="form-inline" method="post" action="<?php echo U(GROUP_NAME.'/jieshen');?>">
						<div class="form-group">
							<select name="keyword6" id="status" class="form-control" default="">
								<option value="">状态</option>
								<option value="0">等待扫码</option>
								<option value="1">正在扫码</option>
								<option value="2">等待确认</option>
                                <option value="3">订单完成</option>
                                <option value="4">超时退款</option>
                                <option value="5">自动完成</option>
                                <option value="6">扫码失败</option>
                                <option value="7">订单失败</option>
                                <option value="8">正在申诉</option>
                                <option value="9">卡商胜诉</option>
                                <option value="10">兼职胜诉</option>
							</select>
							
							
							
							
							<div class="input-group">
								<input type="text" name="keyword4" class="form-control reservationtime" style="width:120px;" placeholder="开始时间" autocomplete="off" value="">
							</div>
							<span>-</span>
							<div class="input-group">
								<input type="text" name="keyword5" class="form-control reservationtime" style="width:120px;" placeholder="结束时间" autocomplete="off" value="">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
                          </div>
							
							
						</div>
					</form>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered table-hover table-striped text-center">
					<tbody>
						<tr>
							<th>ID</th>
							<th>发布者ID</th>
                            <th>辅助者ID</th>
							<th>发布时间</th>
                            <th>到期时间</th>
							<th>状态</th>
							<th>操作</th>
					
						</tr>
                                    
                      	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
						  <th><?php echo ($vo["id"]); ?></th>
                          <th><?php echo ($vo["rel"]); ?></th>
                          <th><?php echo ($vo["tuiuser"]); ?></th>
                            <th align="center"><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></th>
                           <th><?php echo ($vo["time"]); ?></th>
                         	<th>
              <?php if($vo['status']==0){ echo "等待扫码";}if($vo['status']==1){ echo "正在扫码";}if($vo['status']==2){echo "等待确认";}if($vo['status']==3){echo "订单完成";}if($vo['status']==4){echo "超时退款";}if($vo['status']==5){echo "自动完成";}if($vo['status']==6){echo "扫码失败";}if($vo['status']==7){echo "订单失败";}if($vo['status']==8){echo "正在申诉";}if($vo['status']==9){echo "卡商胜诉";}if($vo['status']==10){echo "兼职胜诉";} ?>             
                          	</th>
                          <th>
				
                     <?php if($vo['status']==8){ ?>   
                    <a href="javascript:del('<?php echo ($vo["id"]); ?>','<?php echo U(GROUP_NAME.'/jieshen_edit',array('id'=>$vo['id'],'keyword'=>$keyword,'keyword2'=>$keyword2,'keyword3'=>$keyword3,'keyword4'=>$keyword4,'keyword5'=>$keyword5,'p'=>$p));?>');" style="display: block;background:#003BB3;color:#FFF;padding:3px 5px;border-radius: 5px;">卡商胜诉</a>&nbsp;&nbsp;
					<a href="javascript:del('<?php echo ($vo["id"]); ?>','<?php echo U(GROUP_NAME.'/jieshen_edit2',array('id'=>$vo['id'],'keyword'=>$keyword,'keyword2'=>$keyword2,'keyword3'=>$keyword3,'keyword4'=>$keyword4,'keyword5'=>$keyword5,'p'=>$p));?>');" style="display: block;background:#003BB3;color:#FFF;padding:3px 5px;border-radius: 5px;">兼职胜诉</a>  
					 <?php } ?>  
		
						</th>					
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
  
											</tbody>
				</table>
			</div>
			<!-- /.box-body -->
			<div class="page"><?php echo ($page); ?></div>
		</div>
	</div>
</div>
</section>  
<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
<script src="/Public/js/commonz.js"></script>
<script>
	$(function(){
		var $choose = $(".cheks");
		 //全选
		$("#checkAll").click(function(){
			if($(this).prop('checked')){
				$choose.each(function(){
					$(this).prop("checked",true);
				});
			}else{
				$choose.each(function(){
					$(this).prop("checked",false);
				});
			}
		});
	});
    function del(name,jumpurl){

        layer.confirm(

                '确定要结算订单:['+name+']吗?',

                function (){

                    window.location.href = jumpurl;

                }

        );

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
    <div class="clear"></div>
    
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>