<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style type="text/css">
	html,body {height: 100%;overflow-y:hidden;}
	.mlist{overflow: hidden;width:98%;margin:0 auto;padding:5px 0;height:100%;}
	.mtable{width:16.2%;height:89%;overflow: hidden;float:right;border:1px solid #999;}
	.mlist .tops{height:16%;border-bottom: 1px solid #999;}
	.mlist .tops p{width:21px;height:79px;writing-mode:tb-rl;text-align: center;float: right;font-size: 16px}
	.mlist .mid{height:20%;border-bottom: 1px solid #999}
	.mlist .mid p{width:30px;font-size:27px;height:90px;text-align: center;display: table-cell;vertical-align: bottom;}
	.mlist .bot{height:64%;margin: 8px 0;}
	.mlist .bot .bimg {
	    width: 23px;
	    height: 81.06px;
	    float: right;
	}
	.mlist .bot i {
	    width: 23px;
	    height: 81.06px;
	    background: url(/Public/image/dai.png) no-repeat;
        background-size: 100%;
	    font-style: normal;
	    font-size: 12px;
	    line-height: 12px;
	    color: #000;
	    text-align: center;
	    display: table-cell;
	    vertical-align: middle;
	}
	.mlist .bot p{writing-mode:tb-rl;float:right;font-size:14px;}
	
</style>
</head>
<body style="background:#fff;">
	<div id="layout">11</div>
	<div id="page" style="height:100%;">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1>世系图</h1>
		    <div id="hui-header-menu"></div>
		</header>
		<div class="hui-wrap" style="height:100%;padding-top: 26px;">
			<div class="mlist">

			<?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><div class="mtable" <?php if(($v['book']) and ($v['surname'])): ?>onclick="location='<?php echo U('/surname/homeedit',array('id'=>$v['id']));?>'"<?php endif; ?> <?php if($k == 6): else: ?>style="border-left:0"<?php endif; ?>>
					<div class="tops"><?php if($v['books'] == -1): elseif($v['books'] == -2): ?><div style="width:25px;margin: 0 auto"><p>始祖</p></div><?php elseif($v['type'] == 3): ?><div style="width:25px;margin: 0 auto"><p>配</p></div><?php elseif(($v['rank'] == 1) AND ($v['sex'] == 0)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p>长子</p></div><?php elseif(($v['rank'] == 2) AND ($v['sex'] == 0)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p>次子</p></div><?php elseif(($v['rank']) AND ($v['sex'] == 0)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p><?php echo ($v["ranks"]); ?>子</p></div><?php elseif(($v['rank'] == 1) AND ($v['sex'] == 1)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p>长女</p></div><?php elseif(($v['rank'] == 2) AND ($v['sex'] == 1)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p>次女</p></div><?php elseif(($v['rank']) AND ($v['sex'] == 1)): ?><div style="width:38px;margin: 0 auto"><p style="font-size: 13px;width:17px"><?php echo ($v["bookss"]); ?></p><p>之女</p></div><?php endif; ?></if></div>
					<div class="mid"><div style="width:30px;margin: 0 auto"><p><?php echo ($v["fname"]); ?></p></div></div>
					<div class="bot">
						<?php if($v['name']): ?><div style="width:43px;margin:0 auto">
								<div class="bimg">
									<i>第<?php echo ($v["surs"]); ?>代</i>
								</div>
								<p style="margin:2px 1px 2px 0"><?php echo ($v["name"]); ?>字辈</p>
							</div>
						<?php else: ?>
						<div style="width:38px;margin:2px auto">
							<p>
							<?php if($v['bookd']['print']): echo ($v["bookd"]["print"]); else: ?>
								<?php if($v['children']): ?>生子&nbsp;&nbsp;<?php if(is_array($v["children"])): foreach($v["children"] as $key=>$va): ?>&nbsp;<?php echo ($va["fname"]); ?>&nbsp;<?php endforeach; endif; endif; ?>
								<?php if($v['children1']): ?>&nbsp;&nbsp;生女&nbsp;&nbsp;<?php if(is_array($v["children1"])): foreach($v["children1"] as $key=>$va): ?>&nbsp;<?php echo ($va["fname"]); ?>&nbsp;<?php endforeach; endif; endif; ?>
								<?php if($v['bookd']['mmember'] > 0): ?>过继<?php endif; endif; ?>	
							</p>
						</div><?php endif; ?>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>

		</div>
		    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript">
var meuns = ['首页', '上一页', '下一页','返回'];
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
</script>
</body>
</html>