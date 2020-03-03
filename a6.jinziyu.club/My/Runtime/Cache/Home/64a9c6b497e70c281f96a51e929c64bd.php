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
		<li class="active">提现管理</li>
	</ol>
</div>
</section><!-- Main content --><section class="content">
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header" style="min-height: 35px;">
				<h3 class="box-title"></h3>
				<div class="box-tools" style="left:10px;">
					<form class="form-inline" method="post" action="<?php echo U(GROUP_NAME.'/jiesuan');?>">
						<div class="form-group">
							
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" style="width:120px;" placeholder="用户名" value="<?php echo ($keyword); ?>">
                              	
							</div>
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
				<table class="table table-bordered table-hover table-striped text-center" style="font-size: 14px;">
					<tbody>
					<tr>
					
						 <th width="50" align="center">ID</th>
                <th width="150" align="center">用户id</th>
                <th width="100" align="center">结算金额</th>
                <th width="80">结算类型</th>
                <th width="80">结算帐号</th>
                <th width="150" align="center">创建时间</th>
                <th width="100" align="center">结算状态</th>
                <th width="80">操作</th>
					</tr>
                            	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                   
                 
							  <td align="center"><?php echo ($vo["id"]); ?></td>
                    <td align="center"><?php echo ($vo["userid"]); ?></td>
                    <td align="center"><?php echo ($vo["moneys"]); ?></td>
					<td align="center">支付宝</td>
					<td align="center"><?php echo ($vo["payno"]); ?></td>
                    <td align="center"><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></td>
					<td align="center">
						<?php if($vo['status']==1){echo "<font color='green'>结算成功</font>";}else if($vo['status']==0){echo "待结算";}else if($vo['status']==2){echo "结算失败已退款";} ?>
					</td>
                <td align="center">

                   <!-- <a href="<?php echo U(GROUP_NAME.'/text_edit',array('id'=>$vo['id']));?>">编辑</a> |-->
					<?php if($vo['status']==1){ echo "<font color='green'>结算成功</font>";}else if($vo['status']==2){ echo "<font color='red'>结算失败</font>";}else{ ?>
                    <a href="javascript:del('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/jiesuanstatus',array('id'=>$vo['id']));?>');" style="background:#003BB3;float:left;color:#FFF;padding:3px 5px;width: 50px;border-radius: 5px;display: block;">结算成功</a>
					 <a href="javascript:del('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/jiesuanstatus2',array('id'=>$vo['id']));?>');" style="background:#003BB3;float:left;color:#FFF;padding:3px 5px;width: 50px;border-radius: 5px;margin-left:5px;display: block;">结算失败</a>
					<?php } ?>

                </td>
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
<div class="do-txt">	
	<div class="txts">
		<span>选择群组：</span>
		<select class="singleSelect" id="qunid" style="width: 300px;">
			<option value="">请选择</option>
			<option value="100">A</option><option value="1">业务A群</option>		</select>
	</div>
	<button id="subMobile">提交</button>
</div>

<script>

	$(function(){
		$('.singleSelect').select2();
	
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

	var user_id = 0;
	function charge(uid){
		user_id = uid;
		$('#myModal').modal('show');
	}
	
	
	function addQun(){
		layer.open({
			type: 1,
			title: "请先选择用户后移动到群组",
			skin: 'layui-layer-rim', //加上边框
			area: ['450px', '210px'], //宽高
			content: $('.do-txt'),
		});
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
   function del(a,jumpurl){
        layer.confirm(
                '确定要结算该订单吗?',
                function (){
                    window.location.href = jumpurl;
                }
        );
    }
</script>

    </div>
  
    <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>
</div>
<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=User&a=index";
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

    function delCat(name,jumpurl){

        layer.confirm(

                '确定要删除自由块:['+name+']吗?',

                function (){

                    window.location.href = jumpurl;

                }

        );

    }

</script>

    </div>
    <div class="clear"></div>
    
    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>