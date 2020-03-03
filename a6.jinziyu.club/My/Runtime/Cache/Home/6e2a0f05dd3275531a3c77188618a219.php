<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>会人中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<script src="//at.alicdn.com/t/font_740160_nk0zsfzda9m.js"></script>
<style type="text/css">
    .icon {
       width: 1.5em; height: 1.5em;
       vertical-align: -0.15em;
       fill: currentColor;
       overflow: hidden;
       
    }
</style>
</head>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>加入会员</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<!--<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						你已经是会员了
					</div>
				</div>-->
				<?php if($f['vip'] == 1 ): ?><div class="hui-list" style="background:#FFFFFF;line-height: 25px; margin-top:10px;border:0;text-align: center;">
						<div style="margin-top: 20px;font-family: '微软雅黑';color:red;">
							<svg class="icon" aria-hidden="true" style="line-height: 30px;color: red!important;">
								 <use xlink:href="#icon-VIP1"></use>
							</svg>
							 尊敬的<?php echo (yc_phone($f["mobile"])); ?>会员你好<br/>
							 <!--<?php echo C('cfg_money');?>-->
							<span style="font-size: 12px;color:#ccc;">您已经开通我们尊贵的vip会员</span>					
						</div>
						<div style="margin:40px">
							<a href="<?php echo U('/');?>"  class="hui-button hui-button-large hui-primary" style="color:#FFFFFF!important;"/>立即去推广</a>
						</div>
	
				    </div>
					
    			<?php else: ?>
    			
					<div class="hui-list" style="background:#FFFFFF; line-height: 25px;margin-top:10px;border:0;text-align: center;">
						<div style="margin-top: 20px;font-family: '微软雅黑';color:red;">
							<!--<svg class="icon" aria-hidden="true" style="line-height: 30px;">
								 <use xlink:href="#icon-VIP1"></use>
							</svg>-->
							 尊敬的普通会员你好<br/>
							 <!--<?php echo C('cfg_money');?>-->
							<span style="font-size: 13px;color:#ccc;">您当前是普通会员，无法推广产品，<?php if(C('cfg_money')==0 || C('cfg_money')==''){echo "免费";}else{echo C('cfg_money').'元';;} ?>开通vip推广产品！</span>					
						</div>
						<div style="margin:40px">
							<a href="<?php echo U('/User/pay');?>" class="hui-button hui-button-large hui-primary" style="color:#FFFFFF!important;"/>立即开通</a>
						</div>
	
				   </div><?php endif; ?>
			</div>
			<div style="height:80px"></div>
			    
	</div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>