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

            
<link rel="stylesheet" href="/Public/css/switch.css">

<section class="content-header">
  
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i>&nbsp;Home</a></li>
		<li class="active">网贷列表</li>
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
					<form class="form-inline" method="post"  action="<?php echo U(GROUP_NAME.'/list_index');?>">
						<div class="form-group">
							<select name="keyword2" class="form-control" default="">
								<option value="">状态</option>
								<option value="1">上架</option>
								<option value="2">下架</option>
							</select>
						</div>
						<div class="form-group">
							<div class="input-group input-group-md" style="width: 250px;">
								<input type="text" name="keyword" class="form-control pull-right" placeholder="网贷名称" value="">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
                        <?php if($gid==1){ ?>	
						<div class="form-group">
								<a href="<?php echo U(GROUP_NAME.'/list_add');?>" class="btn btn-success" style="margin-left:10px;">添加网贷</a>
							</div>	
                      <?php } ?>
                  </form>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<table class="table table-bordered table-hover table-striped text-center">
					<tbody>
						<tr>
							<th>ID</th>
							<th>图片</th>
							<th>标题</th>
							
                            <th>佣金</th>
                            <th>结算方式</th>
							<th width="200">甲方后台地址</th>
							<th>甲方后台账号</th>
							<th>甲方后台密码</th>
							<th>平台备注</th>
	
							<th>上下架</th>
                           <?php if($gid==1){ ?>	
							<th width="200">操作</th>
                          	<?php } ?>
						</tr>
                        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                           
								<td><?php echo ($vo["id"]); ?></td>
								<td><img src="<?php echo ($vo["img"]); ?>" style="width:50px;height:50px;border-radius:5px;" /></td>
								<td><?php echo ($vo["name"]); ?></td>
                          		 <td><?php echo ($vo["pay"]); ?></td>
                          <td>
                          <?php if($vo['jiesuan']==1){echo '日结';}else if($vo['jiesuan']==2){echo '周结';}else {echo'月结';} ?>
						</td>
                         
								<td><?php echo ($vo["dz"]); ?></td>
								<td><?php echo ($vo["zh"]); ?></td>
								<td><?php echo ($vo["mm"]); ?></td>
		
								<td><?php echo ($vo["bz"]); ?></td>
								<td><span style="color:#f39c12"><?php echo ($vo["type"]); ?></span></td>
							 <?php if($gid==1){ ?>	
                          		<td>
                                  	<a href="<?php echo U(GROUP_NAME.'/list_edit',array('id'=>$vo['id']));?>"  class="cannel_vip btn bg-maroon margin"  style="background-color:#00a65a !important">
									编辑
									</a>	
									<a href="javascript:delCat('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/list_del',array('id'=>$vo['id']));?>')"  class="cannel_vip btn bg-maroon margin">
									<i class="fa fa-times"></i>删除
									</a>								
                          		</td>
                          	<?php } ?>
							</tr><?php endforeach; endif; ?>
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
		$.post("/m.php?m=Member&c=Goods&a=setStatus",{id:id,field:field},function(d){
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
	
</script>
<div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>

<script src="/Public/js/commonz.js"></script>
<script>
	var route = "c=Goods&a=loan";
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