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
			    <h1>贷款管理</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<a href="<?php echo U('/admin');?>">主页 ></a><a href="<?php echo U('/admin/loan');?>">贷款管理 ></a><a href="<?php echo U('/admin/loanadd');?>">添加贷款</a>
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<form action="" method="POST" enctype="multipart/form-data">
					<div class="hui-form-items">
			        	<div class="hui-form-items-title">名称</div>
			            <input type="text" class="hui-input hui-input-clear" name="name" placeholder="请输入贷款名称"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">缩略图</div>
			            <input type="file" class="hui-input hui-input-clear" name="img[]" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">推广链接</div>
			            <input type="text" class="hui-input hui-input-clear" name="link" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">额度范围（元）</div>
			            <input type="text" class="hui-input hui-input-clear" name="price" value="1000-3000" />
			        </div>

			        <div style="padding:10px 15px;" id="tags1" class="hui-tags">
						<div tagVal="0">推荐</div>
						<div tagVal="1">高通过率</div>
						<div tagVal="2">有身份证</div>
						<div tagVal="3">有信用卡</div>
					</div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">借款周期（天）</div>
			            <input type="text" class="hui-input hui-input-clear" name="day" value="7"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">利息范围（%）</div>
			            <input type="text" class="hui-input hui-input-clear" name="red" value="0.03"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">审核时间（时）</div>
			            <input type="text" class="hui-input hui-input-clear" name="sday" value="2"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">放款人数</div>
			            <input type="text" class="hui-input hui-input-clear" name="member" value="990"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">佣金</div>
			            <input type="text" class="hui-input hui-input-clear" name="pay" value="3" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">佣金类型</div>
			            <select name="paytype" class="hui-input hui-input-clear">
				            <option value="0">%</option>
				            <option value="1">元</option>
				            <option value="2">元/申请</option>
				            <option value="3">元/单</option>
			            </select>
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">追加佣金</div>
			            <input type="text" class="hui-input hui-input-clear" name="pays" value="0" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">追加类型</div>
			            <select name="paystype" class="hui-input hui-input-clear">
				            <option value="0">%放款奖励</option>
				            <option value="1">元奖励</option>
				            <option value="2">元/申请奖励</option>
				            <option value="3">元/单奖励</option>
			            </select>
			        </div>
			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">介绍</div>
			            <textarea placeholder="请输入详细介绍" name="d" style="width:100%;border:1px solid #ebebeb;font-size: 13px" rows="5" ></textarea>
			        </div>

			        <div style="margin:50px 0 30px 0;padding:10px;">
			        	<input type="hidden" id="type" name="type" value="">
				        <input type="submit" class="hui-button hui-button-large hui-primary" value="添加" />
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