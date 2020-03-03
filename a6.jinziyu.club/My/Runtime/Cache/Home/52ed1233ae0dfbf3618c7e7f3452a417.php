<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
			    <h1>会员管理</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<a href="<?php echo U('/admin');?>">主页 ></a><a href="<?php echo U('/admin/member');?>">会员管理 ></a>
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<form action="" method="POST" enctype="multipart/form-data">
					<div class="hui-form-items">
			        	<div class="hui-form-items-title">ID</div>
			            <input type="text" class="hui-input hui-input-clear" value="<?php echo ($f["id"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">昵称</div>
			            <input type="text" class="hui-input hui-input-clear" name="nick" value="<?php echo ($f["nick"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">手机</div>
			            <input type="text" class="hui-input hui-input-clear" name="mobile" value="<?php echo ($f["mobile"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">余额</div>
			            <input type="text" class="hui-input hui-input-clear" name="price" value="<?php echo ($f["price"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">锁定</div>
			            <select name="status" class="hui-input hui-input-clear">
			            	<?php if($f['status']): ?><option value="1">是</option><?php endif; ?>
					        <option value="0">否</option>
					        <option value="1">是</option>
					    </select>
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">重置密码</div>
			            <select name="rp" class="hui-input hui-input-clear">
					        <option value="0">否</option>
					        <option value="1">是</option>
					    </select>
			        </div>

			        <div style="margin:50px 0 30px 0;padding:10px;">
				        <input type="submit" class="hui-button hui-button-large hui-primary" value="更新" />
				    </div>
				    </form>
			    </div>


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


hui.tags('#tags1', function(){
	var tagData = hui.getTagsData('#tags1');
	hui('#type').val(tagData.tagsVal);
});

</script>
</body>
</html>