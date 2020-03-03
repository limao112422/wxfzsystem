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
<script src="/Public/layui/layui.js"></script>
<section class="content-header">
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U('Qudao/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i>&nbsp;Home</a></li>
		<li class="active">财务管理</li>
	</ol>
</div>
</section>
<section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"></h3>
				<div class="box-tools" style="left:10px;">
					<form class="form-inline" method="post" action="<?php echo U('Qudao/Caiwu_index');?>">	
						<div class="form-group">
							<div class="input-group input-group-md">
								<input name="keyword4" type="text" style="width:100px;" class="inpMain" placeholder="搜索：开始时间" value="<?php echo ($keyword4); ?>" id="test1">
		/
		<input name="keyword5" type="text" style="width:100px;" class="inpMain" placeholder="搜索：结束时间" value="<?php echo ($keyword5); ?>" id="test2">
							</div>
							<div class="input-group input-group-md" style="width: 250px;">
								<!--select name="mem" class="form-control" default="">
									<option value="" selected="selected">总站</option>
																	</select-->
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
							<div class="form-group">
																	<!--a href="javascript:;" onclick="isee(this);" class="btn btn-success" style="margin-left:10px;">允许查看</a-->							</div>
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
							<th>说明</th>
							<th>金额</th>
							<th>时间</th>
						</tr>
                      
						
                      <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								  <td align="center"><?php echo ($vo["id"]); ?></td>
                    <td align="center"><?php echo ($vo["text"]); ?></td>
					<td align="center"><?php if($vo['motype']==1){echo '+';}else{echo '-';} echo ($vo["money"]); ?></td>
                    <td align="center"><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></td>
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
<script>
	function clickCheckbox(id,ob , field){
		$.post("/m.php?m=Member&c=Center&a=setStatus",{id:id,field:field},function(d){
			if(d){
				if($(ob).find(".switch-off").length>0){
					$(ob).find(".switch-animate").removeClass('switch-off');
					$(ob).find(".switch-animate").addClass('switch-on');
				}else{
					$(ob).find(".switch-animate").removeClass('switch-on');
					$(ob).find(".switch-animate").addClass('switch-off');
				}
			}else{
				layer.msg('请求失败！');
			}
		});
	}
	
	function isee(ob){
		var $this = $(ob);
		$.post("/m.php?m=Member&c=Center&a=setIsee",function(d){
			if(d){
				console.log(d);
				layer.alert("操作成功！",function(){
					if(d.info == 1){
						$this.html("不可查看");
						$this.removeClass("btn-success").addClass("bg-maroon");
					}else{
						$this.html("允许查看");
						$this.removeClass("bg-maroon").addClass("btn-success");
					}
					layer.closeAll();					
				});
				
			}else{
				layer.msg('请求失败！');
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
</div><div class="datetimepicker datetimepicker-dropdown-bottom-right dropdown-menu" style="left: 256px; z-index: 1060;"><div class="datetimepicker-minutes" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 六月 2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><fieldset class="minute"><legend>下午</legend><span class="minute">5:00</span><span class="minute">5:05</span><span class="minute">5:10</span><span class="minute">5:15</span><span class="minute">5:20</span><span class="minute">5:25</span><span class="minute">5:30</span><span class="minute">5:35</span><span class="minute">5:40</span><span class="minute active">5:45</span><span class="minute">5:50</span><span class="minute">5:55</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今天</th></tr></tfoot></table></div><div class="datetimepicker-hours" style="display: none;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">6 六月 2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><fieldset class="hour"><legend>上午</legend><span class="hour hour_am">12</span><span class="hour hour_am">1</span><span class="hour hour_am">2</span><span class="hour hour_am">3</span><span class="hour hour_am">4</span><span class="hour hour_am">5</span><span class="hour hour_am">6</span><span class="hour hour_am">7</span><span class="hour hour_am">8</span><span class="hour hour_am">9</span><span class="hour hour_am">10</span><span class="hour hour_am">11</span></fieldset><fieldset class="hour"><legend>下午</legend><span class="hour hour_pm">12</span><span class="hour hour_pm">1</span><span class="hour hour_pm">2</span><span class="hour hour_pm">3</span><span class="hour hour_pm">4</span><span class="hour active hour_pm">5</span><span class="hour hour_pm">6</span><span class="hour hour_pm">7</span><span class="hour hour_pm">8</span><span class="hour hour_pm">9</span><span class="hour hour_pm">10</span><span class="hour hour_pm">11</span></fieldset></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今天</th></tr></tfoot></table></div><div class="datetimepicker-days" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">六月 2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr><tr><th class="dow">一</th><th class="dow">二</th><th class="dow">三</th><th class="dow">四</th><th class="dow">五</th><th class="dow">六</th><th class="dow">日</th></tr></thead><tbody><tr><td class="day old">27</td><td class="day old">28</td><td class="day old">29</td><td class="day old">30</td><td class="day old">31</td><td class="day">1</td><td class="day">2</td></tr><tr><td class="day">3</td><td class="day">4</td><td class="day">5</td><td class="day today active">6</td><td class="day">7</td><td class="day">8</td><td class="day">9</td></tr><tr><td class="day">10</td><td class="day">11</td><td class="day">12</td><td class="day">13</td><td class="day">14</td><td class="day">15</td><td class="day">16</td></tr><tr><td class="day">17</td><td class="day">18</td><td class="day">19</td><td class="day">20</td><td class="day">21</td><td class="day">22</td><td class="day">23</td></tr><tr><td class="day">24</td><td class="day">25</td><td class="day">26</td><td class="day">27</td><td class="day">28</td><td class="day">29</td><td class="day">30</td></tr><tr><td class="day new">1</td><td class="day new">2</td><td class="day new">3</td><td class="day new">4</td><td class="day new">5</td><td class="day new">6</td><td class="day new">7</td></tr></tbody><tfoot><tr><th colspan="7" class="today">今天</th></tr></tfoot></table></div><div class="datetimepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="month">一</span><span class="month">二</span><span class="month">三</span><span class="month">四</span><span class="month">五</span><span class="month active">六</span><span class="month">七</span><span class="month">八</span><span class="month">九</span><span class="month">十</span><span class="month">十一</span><span class="month">十二</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今天</th></tr></tfoot></table></div><div class="datetimepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-left"></span> </th><th colspan="5" class="switch">2010-2019</th><th class="next" style="visibility: visible;"><span class="glyphicon glyphicon-arrow-right"></span> </th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year active">2019</span><span class="year old">2020</span></td></tr></tbody><tfoot><tr><th colspan="7" class="today">今天</th></tr></tfoot></table></div></div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=Center&a=index";
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