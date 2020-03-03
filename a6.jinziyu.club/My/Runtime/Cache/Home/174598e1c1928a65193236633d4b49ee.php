<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>常见问题</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<link rel="stylesheet" type="text/css" href="/Public/layui/css/layui.css" />
 <style>
     .hui-header{
  background:rgb(0, 150, 255);
  }
 </style>
</head>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>常见问题</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="layui-collapse" lay-accordion>
					
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="layui-colla-item">
				    <h2 class="layui-colla-title"><?php echo ($v["name"]); ?></h2>
				    <div class="layui-colla-content layui-show"><?php echo ($v["cont"]); ?></div>
				  </div><?php endforeach; endif; else: echo "" ;endif; ?>
				

			</div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/layui/layui.js" ></script>
</body>
<script>
//注意：折叠面板 依赖 element 模块，否则无法进行功能性操作
layui.use('element', function(){
  var element = layui.element;
  
  //…
});
</script>
</html>