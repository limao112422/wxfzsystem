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
</style>
</head>
<body>
<div class="page">
<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="http://361.360pr7.cn/public/uploads/20180315\d4a75674cd0dff36200caba9e0c255c1.jpg" >
    </div>
    <div class="swiper-slide">
      <img src="http://361.360pr7.cn/public/uploads/20180315\3bf2bc86a8b09a94b9e52a443f06fd73.jpg" >
    </div>
    <div class="swiper-slide">
      <img src="http://361.360pr7.cn/public/uploads/20180315\9d2729727a14ec8396e699ae685fa680.jpg" >
    </div>
  </div>
  <!--分页-->
  <div class="swiper-pagination">
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    
 
    <a href="/card/content">
    <div class="col-xs-12" style="background:#E8E8E8; height: 30px; ">
      <div style="margin-top:5px; ">
          信用卡列表
        <!--<span style=" float: right;">更多>></span>-->
      </div>
    </div>
    </a>

    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["link"]); ?>">
    <div class="col-xs-12" style="background: #ffffff; margin-top:10px;">
      <div class="col-xs-12" style="margin-top:10px; margin-bottom:10px; ">
             <?php echo ($v["n"]); ?>&<?php echo ($v["name"]); ?>            
        <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"><span style="float: right;color: #cccccc;" >详情></span></a>
      </div>
      <div class="col-xs-12" style="height: 1px; background: #ccc; ">
      </div>
      <div class="col-xs-3" style="margin: 10px 0px 25px 0px;">
       <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"> <img src="<?php echo ($v["img"]); ?>" class="img-rounded" style="width: 100px;"></a>
      </div>
      <div class="col-xs-8" style="margin: 5px 0px 0px 10px;color: #909090;">
       <a href="<?php echo U('/card/read',array('id'=>$v['id']));?>"> <span style="margin:1px; color: #cccccc;">额度：</span><?php echo ($v["price"]); ?><br>
        <span style="margin:1px; color: #cccccc;">发卡组织：</span>银联<br></a>
        <input id="bnt1" type="button" value="立即申请"/>
      </div>
    </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
</div>
<div style="height:70px"></div>
</div>


<script src="//at.alicdn.com/t/font_740160_6n5dbhribvc.js"></script>
<style type="text/css">
    .icon {
       width: 1.5em; height: 1.5em;
       vertical-align: -0.15em;
       fill: currentColor;
       overflow: hidden;
    }
</style>
<nav class="navbar navbar-default navbar-fixed-bottom">
	<a href="/">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-weibiaoti1"></use>
		</svg>
		<br>
      贷款中心
	</div>
	</a>
	<a href="<?php echo U('/card');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-caifu"></use>
		</svg>
		<br>
       办卡中心
	</div>
	</a>
	<!-- <a href="/member/index"  class="content" id="xs12s" >-->       
	<a href="<?php echo U('/community');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-shequ-active1"></use>
		</svg>
		<br>
    技术社区
	</div>
	</a>
	<a href="<?php echo U('/recommend');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-chanpinzhanshi1"></use>
		</svg>
		<br>
    	产品推荐
	</div>
	</a>
	<a href="<?php echo U('/user');?>">
	<div class="col-xs2">
		<svg class="icon" aria-hidden="true">
		    <use xlink:href="#icon-gerenzhongxin1"></use>
		</svg>
		<br>
    	个人中心
	</div>
	</a>
</nav>

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