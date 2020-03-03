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
			    <h1>银行管理</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<a href="<?php echo U('/admin');?>">主页 ></a><a href="<?php echo U('/admin/bank');?>">银行管理 ></a><a href="<?php echo U('/admin/bankadd');?>">添加银行</a>
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0">
					<table style="width:100%;padding:10px">
					  <tr style="text-align:left">
					    <th style="width:10%">ID</th>
					    <th style="width:60%">标题</th>
					    <th style="width:10%">排序</th>
					    <th style="width:20%">操作</th>
					  </tr>
					  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    <td style="width:10%"><?php echo ($v["id"]); ?></td>
						    <td style="width:60%"><?php echo ($v["name"]); ?></td>
						    <td style="width:10%"><?php echo ((isset($v["sort"]) && ($v["sort"] !== ""))?($v["sort"]):"0"); ?></td>
						    <td style="width:20%"><a href="<?php echo U('/admin/bankedit',array('id'=>$v['id']));?>">编辑</a>&nbsp;&nbsp;<a href="<?php echo U('/admin/bankdel',array('id'=>$v['id']));?>">删除</a></td>
						  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</table>
					
					<div class="pages"><?php echo ($page); ?></div>
					
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