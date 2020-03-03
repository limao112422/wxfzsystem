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
						<a href="<?php echo U(GROUP_NAME.'/list_add');?>">
							<i class="fa fa-angle-right"></i> 
							任务发布
						</a>
					</li>
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
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/User_index');?>">
					<i class="fa fa-user"></i> <span>用户管理</span>
				</a>
			</li>
			
		
			<li>
				<a href="<?php echo U(GROUP_NAME.'/Admin_index');?>">
				 <i class="fa fa-users"></i> <span>下单员管理</span>
				</a>
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
						<a href="<?php echo U(GROUP_NAME.'/list_add');?>">
							<i class="fa fa-angle-right"></i> 
							任务发布
						</a>
					</li>
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
		
			
		
     <?php } ?>
           
		</ul>
	</section>
</aside>


    <div class="content-wrapper" style="min-height: 848px;">

            <script src="/Public/layui/layui.js"></script>
  <script>
            function checkAll(){
                //1.获取编号前面的复选框
                var checkAllEle = document.getElementById("checkAll");
                //2.对编号前面复选框的状态进行判断
                if(checkAllEle.checked==true){
                    //3.获取下面所有的复选框
                    var checkOnes = document.getElementsByName("id[]");
                    //4.对获取的所有复选框进行遍历
                    for(var i=0;i<checkOnes.length;i++){
                        //5.拿到每一个复选框，并将其状态置为选中
                        checkOnes[i].checked=true;
                    }
                }else{
                    //6.获取下面所有的复选框
                    var checkOnes = document.getElementsByName("id[]");
                    //7.对获取的所有复选框进行遍历
                    for(var i=0;i<checkOnes.length;i++){
                        //8.拿到每一个复选框，并将其状态置为未选中
                        checkOnes[i].checked=false;
                    }
                }
            }
        </script>
<link rel="stylesheet" href="/Public/css/switch.css">
<link href="/Public/css/select2.min.css" rel="stylesheet" />
<style>
  .form-group{
  	float:left;
  }
</style>
<script src="/Public/js/select2.min.js"></script>
<section class="content-header">
<div>
	<ol class="breadcrumb" style="background: none; margin-bottom: 0px;">
		<li><a href="<?php echo U(GROUP_NAME.'/Main_index');?>" style="color: #333;"><i class=" fa fa-home"></i>&nbsp;Home</a></li>
		<li class="active">网贷设置</li>
		<li class="active">核对记录</li>
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
					<form class="form-inline" method="post" action="<?php echo U(GROUP_NAME.'/Creply_index');?>">
						<div class="form-group">
							
							<div class="input-group input-group-md">
								<input type="text" name="keyword" class="form-control pull-right" style="width:120px;" placeholder="申请电话" value="">
								<div class="input-group-btn">
									<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
								</div>
							</div>
							<!--div class="form-group">
									<a href="javascript:;" onclick="doTxt();" class="btn btn-info" style="margin-left:10px;">导入txt</a>
								</div-->
                           
                      </div>
					</form>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
            
              
								
				<table class="table table-bordered table-hover table-striped text-center">
					<tbody>
						<tr>
							<th>
								<label>
									<input type="checkbox" id="checkAll" onclick="checkAll()"/>全选
								</label>
							</th>
							
							<th>网贷ID</th>
							<th>标题</th>
							<th>申请者姓名</th>
							<!--th>申请者身份证</th-->
                            <th>申请者手机号</th>
							<!--th>推荐者ID</th-->
							<th>推荐者姓名</th>
							<th>申请时间</th>
							<th>操作</th>
						</tr>
                  
                         <form method="post" action="<?php echo U(GROUP_NAME.'/jieshen_edit',array('id'=>$vo['id'],'keyword'=>$keyword,'p'=>$p));?>">
                             <!--div class="form-group">
									 <input name="submit"type="submit" value="一键申请" class="btn btn-danger" style="margin-left:10px;"/>
								</div-->
                          			<div class="form-group">
									 <input name="submit"type="submit" value="批量驳回" class="btn btn-danger" style="margin-left:10px;"/>
								</div>
								
                          		<!--div class="form-group">
									 <input name="submit"type="submit" value="一键删除" class="btn bg-maroon" style="margin-left:10px;"/>
								</div-->
                           <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<th>
								<input type = 'checkbox' name = 'id[]' id = 'checkbox' value = "<?php echo ($vo["id"]); ?>" class="checkbox">
							</th>
							
							<th><?php echo ($vo["id"]); ?></th>
							<th><?php echo ($vo["bankname"]); ?></th>
							<th><?php echo ($vo["name"]); ?></th>
							<!--th><?php echo ($vo["shenno"]); ?></th-->
                            <th><?php echo ($vo["shouji"]); ?></th>
							<!--th>推荐者ID</th-->
							<?php if($vo['tuiuser']=='admin'){ ?>
							<th>无</th>
							<?php }else{ ?>
                      		<th><?php echo ($vo["nick"]); ?>|<?php echo ($vo["tuiuser"]); ?></th>
                      		<?php } ?>
							<th><?php echo (date('Y-m-d H:i:s',$vo["addtime"])); ?></th>
							<th>
                          		
						<?php if($vo['status']==1){ echo "<font color=''>结算成功</font>";}else if($vo['status']==3 || $vo['status']==2){ echo "<font color=''>无需结算</font>";}else{ ?>
                    <a href="javascript:del('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/heshijine',array('id'=>$vo['id'],'keyword'=>$keyword,'keyword2'=>$keyword2,'keyword3'=>$keyword3,'keyword4'=>$keyword4,'keyword5'=>$keyword5,'p'=>$p));?>');" style="display: block;background:#003BB3;color:#FFF;padding:3px 5px;border-radius: 5px;">结算</a>&nbsp;&nbsp;
					<a href="javascript:del('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/heshijine2',array('id'=>$vo['id'],'keyword'=>$keyword,'keyword2'=>$keyword2,'keyword3'=>$keyword3,'keyword4'=>$keyword4,'keyword5'=>$keyword5,'p'=>$p));?>');" style="display: block;background:#003BB3;color:#FFF;padding:3px 5px;border-radius: 5px;">无效</a>
					<?php } ?>
                          	</th>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                          </form>
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
		<span>号码规则：</span>
		<select id="mtype">
			<option value="">请选择</option>
			<option value="1">前三后四</option>
			<option value="2">前三后三</option>
			<option value="3">前三后二</option>
			<option value="4">前七后零</option>
			<option value="5">前二后四</option>
			<option value="6">前二后三</option>
		  <option value="7">前一后四</option>
		</select>
	</div>
	<div class="txts">
		<span>网贷机构：</span>
		<select class="singleSelect" id="gid" style="width: 300px;">
			<option value="">请选择</option>
			<option value="666">开心拿</option><option value="398">漫天星</option><option value="572">阿丽塔</option><option value="600">全得力金融</option><option value="629">快拿钱</option><option value="638">秒拿钱.</option><option value="682">借分期</option><option value="673">急用借</option><option value="675">快拿钱.</option><option value="679">你我借</option><option value="684">海螺</option><option value="705">金叶子</option><option value="711">攒钱花..</option>		</select>
	</div>
	<div class="txts">
		<span>TXT文件：</span>
		<input type="file" id="mobile-txt" />
	</div>
	<div class="txts">
		<span>核对日期：</span>
		<input type="text" name="times" id="times" value="" class="smallinput reservationtime" style="width:200px;border: 1px solid #ddd;padding: 3px;"  />
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
	
	
	//显示导入TXT
	function doTxt(){
		layer.open({
			type: 1,
			title: "导入TXT核对数据",
			skin: 'layui-layer-rim', //加上边框
			area: ['450px', '400px'], //宽高
			content: $('.do-txt'),
		});
	}
	
	//一键申请/未申请
	function setStatusAll(status){
		var ids = [];
		$('.cheks').each(function(){
			if($(this).prop('checked')){
				ids.push($(this).val());
			}
		});
		if(ids.length == 0){
			layer.alert('请勾选记录');
			return false;
		}
		layer.confirm("确定一键申请勾选记录操作？",function(){
			layer.load(2);
			$.post("/m.php?m=Member&c=Creply&a=setStatusAll",{ids:ids.join(","),status:status},function(d){
				if(d){
					if(d.status){
						layer.alert(d.info,function(){
							location.reload();
						});
					}else{
						layer.msg(d.info);
					}
				}else{
					layer.closeAll();
					layer.msg('请求失败！');
				}
			});
		});
	}
	
	
	//一键删除
	function delAll(){
		layer.confirm("确定一键清空核对记录操作？",function(){
			layer.load(2);
			$.post("/m.php?m=Member&c=Creply&a=delAll",function(d){
				if(d){
					if(d.status){
						layer.alert(d.info,function(){
							location.reload();
						});
					}else{
						layer.msg(d.info);
					}
				}else{
					layer.closeAll();
					layer.msg('请求失败！');
				}
			});
		});
	}
	
	
	
	//设置申请/未申请
	function setStatus(id,status){
		if(id){
			layer.load(2);
			$.post("/m.php?m=Member&c=Reply&a=setStatus",{id:id,status:status},function(d){
				if(d){
					if(d.status){
						layer.alert("操作成功",function(){
							location.reload();
						})
					}else{
						layer.msg(d.info);
					}
				}else{
					layer.msg('请求失败！');
				}
			})
		}
	}
	
	
	//提交核对数据
	$('#subMobile').click(function(){
		var formData = new FormData();
		
		var mtype = $('#mtype option:selected').val();
		if(mtype == ""){
			layer.msg('请选择号码类型!');
			return false;
		}
		
		var gid = $('#gid option:selected').val();
		if(gid == ""){
			layer.msg('请选择网贷机构!');
			return false;
		}
		formData.append("gid",gid);
		if($('#mobile-txt')[0].files[0] == undefined){
			layer.msg('请上传核对文件!');
			return false;
		}
		var times = $('#times').val();
		if(mtype == ""){
			layer.msg('请选择核对日期!');
			return false;
		}
		formData.append("times",times);
		formData.append("mtype",mtype);
		
		//文件
		formData.append('file', $('#mobile-txt')[0].files[0]);
		$.ajax({
			url:"/m.php?m=Member&c=Creply&a=upMobileTxt",
			type:"post",
			data:formData,
			cache: false,
			processData: false,
			contentType: false,
			beforeSend: function () {
				// 禁用按钮防止重复提交
				layer.load(2);
				$("#subMobile").attr({ disabled: "disabled" });
			},
			success:function(data){
				console.log(data);
				layer.closeAll();
				layer.alert("操作成功！",function(){
					location.reload();
				});
			},
			error:function(e){
				layer.closeAll();
				layer.alert("网络错误，请重试！！");
			}
		});
	})
	
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
	var route = "c=Creply&a=index";
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

    function del(name,jumpurl){

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