<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>贷款产品-<?php echo C('cfg_sitename');?></title>

	<meta name="keywords" content="<?php echo C('cfg_sitekeywords');?>" />
	<meta name="description" content="<?php echo C('cfg_sitedescription');?>" />

	<meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- head 中 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
	<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.1/css/jquery-weui.min.css">
	<link rel="stylesheet" type="text/css" href="/Public/static/jcs/main.css">
	<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
	<script src="/Public/static/jcs/jquery1.42.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/Public/static/jcs/jquery.SuperSlide.2.1.3.js" type="text/javascript" charset="utf-8"></script>
	<script src="/Public/static/jcs/TouchSlide.1.1.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>


<div id="app">
	
		<div class="header">
			<div class="header-nav">
				<i class="fa fa-chevron-left"></i>
				<span>

					<?php switch($id): case "1": ?>最新口子<?php break;?>
					    <?php case "2": ?>高通过率<?php break;?>
					    <?php case "3": ?>千元速借<?php break;?>
					    <?php case "4": ?>内部通道<?php break;?>
					    <?php default: ?>贷款产品<?php endswitch;?>
				</span>
			</div>

			<div class="search" style="display: none;">
		      <div class="weui-cell weui-cell_select">
		        <div class="weui-cell__bd">
		          <select class="weui-select" name="select1" style="height: auto;line-height: inherit;">
		            <option selected="" value="1">智能排序</option>
		            <option value="2">按额度（从低到高）</option>
		            <option value="2">按放款速度（从快到慢）</option>
		            <option value="2">按上新时间（从新到旧）</option>
		            <option value="2">申请成率（从高到低）</option>
		          </select>
		        </div>
		      </div>

			</div>
		</div>

		<div style="height: 2rem;"></div>
		<div class="pro">

			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="pro_list clearfix">
					   <a href="<?php echo U('/loan/read',array('id'=>$v['id']));?>">
						<div class="lf"><img src="<?php echo ($v["img"]); ?>" alt=""></div>
						<div class="rg">
							<p class="p1 clearfix"><span><?php echo ($v["name"]); ?></span><span><?php if($v['jiesuan']){echo $v['jiesuan'];}else{echo '-';}?></span></p>
							<p class="p2 clearfix"><span>可借额度：</span><b><?php echo ($v["price"]); ?>元</b></p>
							<p class="p3 clearfix"><span>参考：利率<?php echo ($v["red"]); ?></span><span><?php echo ($v["member"]); ?>人已申请</span></p>
						</div>
					</a>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			
		</div>






	<div style="height: 3rem;background: #fff;"></div>


  <div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="/" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-home"></i>
      </div>
      <p class="weui-tabbar__label">首页</p>
    </a>
    <!--a href="<?php echo U('/card/decardlist');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-rmb red"></i>      	
      </div>
      <p class="weui-tabbar__label red">贷款</p>
    </a>
    <a href="<?php echo U('/community');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-file-text-o"></i>      	
      </div>
      <p class="weui-tabbar__label">资讯</p>
    </a-->
    <a href="<?php echo U('/user');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-user"></i>      	
      </div>
      <p class="weui-tabbar__label">我的</p>
    </a>
  </div>
</div>



</div>

</body>
<!-- body 最后 -->
<script src="/Public/static/jcs/main.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.1/js/jquery-weui.min.js"></script>
</html>