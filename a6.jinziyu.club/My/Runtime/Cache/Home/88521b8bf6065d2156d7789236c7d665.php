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
			    <h1>信用卡管理</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<a href="<?php echo U('/admin');?>">主页 ></a><a href="<?php echo U('/admin/card');?>">信用卡管理 ></a><a href="<?php echo U('/admin/cardadd');?>">添加信用卡</a>
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<form action="" method="POST" enctype="multipart/form-data">
					<div class="hui-form-items">
			        	<div class="hui-form-items-title">银行</div>
			            <select name="bank" class="hui-input hui-input-clear">
			            	<?php if(is_array($bank)): foreach($bank as $key=>$v): if($f['bank'] == $v['id']): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endif; ?>
				            	<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
			            </select>
			        </div>
					<div class="hui-form-items">
			        	<div class="hui-form-items-title">系列</div>
			            <input type="text" class="hui-input hui-input-clear" name="name" value="<?php echo ($f["name"]); ?>"   />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">推广链接</div>
			            <input type="text" class="hui-input hui-input-clear" name="link" value="<?php echo ($f["link"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">额度范围（元）</div>
			            <input type="text" class="hui-input hui-input-clear" name="price" value="<?php echo ($f["price"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">取现额度（元）</div>
			            <input type="text" class="hui-input hui-input-clear" name="money" value="<?php echo ((isset($f["money"]) && ($f["money"] !== ""))?($f["money"]):'0'); ?>" />
			        </div>

			        <div style="padding:10px 15px;" id="tags1" class="hui-tags">
						<div tagVal="0">推荐</div>
						<div tagVal="1">高通过率</div>
						<div tagVal="2">有身份证</div>
					</div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">资金周期（天）</div>
			            <input type="text" class="hui-input hui-input-clear" name="day" value="<?php echo ($f["day"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">利息范围（%）</div>
			            <input type="text" class="hui-input hui-input-clear" name="red" value="<?php echo ($f["red"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">审核时间（时）</div>
			            <input type="text" class="hui-input hui-input-clear" name="sday" value="<?php echo ($f["sday"]); ?>"  />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">放款人数</div>
			            <input type="text" class="hui-input hui-input-clear" name="member" value="<?php echo ($f["member"]); ?>"  />
			        </div>
			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">介绍</div>
			            <textarea placeholder="请输入详细介绍" name="d" style="width:100%;border:1px solid #ebebeb;font-size: 13px" rows="5" ><?php echo ($f["d"]); ?></textarea>
			        </div>

			        <div style="margin:50px 0 30px 0;padding:10px;">
			        	<input type="hidden" id="type" name="type" value="<?php echo ($f["type"]); ?>">
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