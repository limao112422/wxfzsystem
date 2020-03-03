<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>信用卡区</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/frozen.css">
<link rel="stylesheet" href="/Public/css/swiper.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>  
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
<script src="/Public/css/swiper.min.js"></script>
<link rel="stylesheet" href="/Public/css/index.css">
<style type="text/css">
    body{font-size: 14px;}
  #goods{ 
    position:fixed;
    top:90px;
    right:5px;
    z-index:999;
}
  .button .col-xs-2{
        width: 80px;
        color:#ccc;
        padding-top: 5px;
        height: 60px;
        text-align:center;
         font-size: 12px;
         background: #ffffff;
   }
   #contentimg{
      position:fixed;
      left:174px;
      top:585px;
   }
   h4{font-size:14px;color:#666;}
</style>
</head>
<body>
<div class="page">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php if(is_array($lun)): $i = 0; $__LIST__ = $lun;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="swiper-slide">
						<img src="<?php echo ($v["img"]); ?>" />
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				<!--<div class="swiper-slide">
					<img src="http://www.zhirongbao88.com/Public/upload/images/1806/06/104918092824007778.jpg" />
				</div>
				<div class="swiper-slide">
					<img src="http://www.zhirongbao88.com/Public/upload/images/1806/06/104805353301009795.png" />
				</div>-->
			</div>
			<!--分页-->
			<div class="swiper-pagination">
			</div>
		</div>
   

<div style="width:100%;height:100%;overflow: hidden;">
<div>


	<div class="col-xs-12" style="margin-top: 10px; font-size:12px;width:100%;color:#ccc;">
			<svg class="icon" style="color:#EE9C4D!important;" aria-hidden="true">
				<use xlink:href="#icon-remen1"></use>
			</svg>
		<a href="/" style="color:#000;font-size:16px;font-family: '微软雅黑';">推荐信用卡</a>&nbsp;&nbsp;极速通过
		</div>

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo U('/card/read',array('id'=>$v['id']));?>">
    <div class="col-xs-12" style="background: #ffffff; margin-top:10px;">
      <div class="col-xs-12" style="margin-top:10px; margin-bottom:10px;color:#333;">
             <?php echo ($v["name"]); ?>            
        <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"><span style="float: right;color: #cccccc;" >详情&nbsp;></span></a>
      </div>
      <div class="col-xs-12" style="height: 1px; background: #FAFAFA; ">
      </div>
      <div class="col-xs-3" style="margin: 10px 0px 10px 0px;">
        <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"><img src="<?php echo ($v["img"]); ?>" class="img-rounded" style="width: 100px;height:45px;"></a>
      </div>
      <div class="col-xs-8" style="margin: 5px 0px 0px 25px;color: #909090;line-height:25px;">
       <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"> <span style="margin:1px; color: #cccccc;">额度：</span><?php echo ($v["price"]); ?><br>
	   <span style="margin:1px; color: #cccccc;">佣金：</span>￥<?php echo ($v["pay"]); ?> <span style="font-size:10px;background:#EE9C4D;padding:2px 6px;color:#FFFFFF;line-height:25px;border-radius:5px;"><?php echo ($v["jiesuan"]); ?></span><br>
      </div>
    </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
<div style="height:50px"></div>
</div>

<script src="//at.alicdn.com/t/font_740160_lslpgljo1t.js"></script>
<style type="text/css">
    .icon {
       width: 1.5em; height: 1.5em;
       vertical-align: -0.15em;
       fill: currentColor;
       overflow: hidden;
	   color:#AEAEAE;
    }
	.centyy {
    position: fixed;
    bottom: 65px;
    width: 70px;
    height: 70px;
    background: #EE9C4D;
    color: #FFFFFF;
    border-radius: 50%;
	font-weight:bold;
	font-family:"微软雅黑";
	box-shadow: 0 0 10px #EE9C4D;
    left: 50%;
    margin-left: -40px;
    line-height: 20px;
    text-align: center;
}
</style>

<a href="<?php echo U('/User/qrcodechan');?>">
<div class="centyy">
			<p style="margin-top: 15px;color:#fff;">一键</p>
			<p style="margin-top: 5px;color:#fff;">推广</p>
		</div>
		</a>


<nav class="navbar navbar-default navbar-fixed-bottom">
	<a href="/">
	<div class="col-xs2" >
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-caifu"></use>
		</svg>
		<br>
      <span  style="font-size:12px;">贷款</span>
	</div>
	</a>
	<a href="<?php echo U('/card');?>">
	<div class="col-xs2">
		<svg class="icon"  style="color:#D61F4B;" aria-hidden="true">
		    <use xlink:href="#icon-qianbao"></use>
		</svg>
		<br>
       <span  style="font-size:12px;">办卡</span>
	</div>
	</a>
	<!-- <a href="/member/index"  class="content" id="xs12s" >-->       
	<a href="<?php echo U('/community');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-shequ-active1"></use>
		</svg>
		<br>
    <span  style="font-size:12px;">资讯</span>
	<?php if($nav1==1){ ?>
				<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:5px;right:32%;"></div>
				<?php } ?>
	</div>
	</a>
	<!--<a href="<?php echo U('/recommend');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-chanpinzhanshi1"></use>
		</svg>
		<br>
    	<span  style="font-size:12px;">一键推广</span>
	</div>
	</a>-->
	<a href="<?php echo U('/user');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-gerenzhongxin1"></use>
		</svg>
		<br>
    	<span  style="font-size:12px;">个人中心</span>
	</div>
	</a>
</nav>

<span style="display:none;"><?php echo htmlspecialchars_decode(C('cfg_sitecode')); ?></span>
<script>
$(document).ready(function(){
  $('#rel').attr('src', 'http://361.360pr7.cn/public/static/img/f2s.png');
  var mySwiper = new Swiper('.swiper-container', {
  //分页参数
   pagination: {
    el: '.swiper-pagination',
  },
  autoplay: true,//可选选项，自动滑动
})
    $("#cars").animate({marginLeft:"100px"},1500,"swing");
 });
</script>
</body>
</html>