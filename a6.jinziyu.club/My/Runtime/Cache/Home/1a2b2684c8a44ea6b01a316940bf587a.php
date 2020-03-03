<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>资讯</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />

<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/frozen.css">
<link rel="stylesheet" href="/Public/css/swiper.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>  
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
<script src="/Public/css/swiper.min.js"></script>
<link rel="stylesheet" href="/Public/css/index.css">
</head>
<script src="//at.alicdn.com/t/font_740160_kffns39oqe9.js"></script>
<style type="text/css">
    .icon {
       width: 1.5em; height: 1.5em;
       vertical-align: -0.15em;
       fill: currentColor;
       overflow: hidden;
	   color:#AEAEAE;
    }

</style>
<style>
	.txx{
		overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    }
	.z_top{width:100%;height:40px;background:#FFFFFF;
	    text-align: center;line-height:40px;font-size:16px;
	border-bottom: 1px solid #FAFAFA;font-weight:bold;color:#666666;
	}
	.z_topa{width:100%;height:40px;background:#FFFFFF;
	    text-align: center;line-height:40px;;
	border-bottom: 1px solid #FAFAFA;color:#666666;
	}
	.z_topa ul{width:90%;height:36px;margin:0 auto;margin-top:2px;}
	.z_topa li{width:25%;height:36px;float:left;margin-left:6%;font-weight:bold;font-size:14px!important}
	.action{border-bottom: 2px solid #EE9C4D;color:#EE9C4D;}
	.action svg{color:#EE9C4D;}
</style>
<body style="background: #F0EFF5;">
<!--<div class="page">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="/Public/image/11.jpg" />
				</div>
			
			</div>
			
			<div class="swiper-pagination">
			</div>
		</div>
		-->
	<div class="z_top">资 讯</div>
	

	<div class="z_topa">
		<ul>
			<li class="action" id="nav1" style="position:relative;">
				<svg class="icon" style="font-size:10px;" aria-hidden="true">
					<use xlink:href="#icon-huo1"></use>
				</svg>
				今日口子
				<?php if($nav1==1){ ?>
				<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:-10px;"></div>
				<?php } ?>
			</li>
			<li id="nav2" style="position:relative;">
				<svg class="icon" style="font-size:10px;" aria-hidden="true">
					<use xlink:href="#icon-svg45-copy"></use>
				</svg>
				系统公告
				<?php if($nav2==1){ ?>
				<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:-10px;"></div>
				<?php } ?>
			</li>
			<li id="nav3" style="position:relative;">
				<svg class="icon" style="font-size:10px;" aria-hidden="true">
					<use xlink:href="#icon-wenti"></use>
				</svg>
				使用教程
				<?php if($nav3==1){ ?>
				<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:-10px;"></div>
				<?php } ?>
			</li>
		</ul>
	</div>


    <div id="page1" style="height:100%;">
		
        <div class="hui-media-list">
            <ul>
            	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li  style="position:relative;">
                    <a href="<?php echo U('/community/text',array('id'=>$v['id']));?>">
                        <div class="hui-media-list-img"><img src="<?php echo ($v["img"]); ?>" /></div>
                        <div class="hui-media-content">
                            <h1><?php echo ($v["title"]); ?></h1>
                            <p class="txx"><?php echo ($v["disp"]); ?></p>
							<br/>
							<p class="txx">
								<span  style="font-size:12px;color:#ADADAD;float:left;">#&nbsp;&nbsp;<?php echo (date("Y-m-d",$v["addtime"])); ?></span>
								<span  style="font-size:12px;color:#ADADAD;float:right;"><?php if($v['vip']==1){echo "<font style='font-size:12px;color:red;'>vip会员可见</font>&nbsp;&nbsp;";} ?>阅读&nbsp;&nbsp;<?php echo ($v["pv"]); ?></span>
							</p>
							<?php if($v['yue']==1){ ?>
								<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:10px;"></div>
							<?php } ?>
							
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>

    </div>


	 <div id="page2" style="height:100%;display:none;">
  
        <div class="hui-media-list">
            <ul>
            	<?php if(is_array($list2)): $i = 0; $__LIST__ = $list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><li style="position:relative;">
                    <a href="<?php echo U('/community/text',array('id'=>$v2['id']));?>">
                        <div class="hui-media-list-img"><img src="<?php echo ($v2["img"]); ?>" /></div>
                        <div class="hui-media-content">
                            <h1><?php echo ($v2["title"]); ?></h1>
                            <p class="txx"><?php echo ($v2["disp"]); ?></p>
							<br/>
							<p class="txx">
								<span  style="font-size:12px;color:#ADADAD;float:left;">#&nbsp;&nbsp;<?php echo (date("Y-m-d",$v2["addtime"])); ?></span>
								<span  style="font-size:12px;color:#ADADAD;float:right;"><?php if($v2['vip']==1){echo "<font style='font-size:12px;color:red;'>vip会员可见</font>&nbsp;&nbsp;";} ?>阅读&nbsp;&nbsp;<?php echo ($v2["pv"]); ?></span>
							</p>
							<?php if($v2['yue']==1){ ?>
								<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:10px;"></div>
							<?php } ?>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>

    </div>

	 <div id="page3" style="height:100%;display:none;">
  
        <div class="hui-media-list">
            <ul>
            	<?php if(is_array($list3)): $i = 0; $__LIST__ = $list3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?><li style="position:relative;">
                    <a href="<?php echo U('/community/text',array('id'=>$v3['id']));?>">
                        <div class="hui-media-list-img"><img src="<?php echo ($v3["img"]); ?>" /></div>
                        <div class="hui-media-content">
                            <h1><?php echo ($v3["title"]); ?></h1>
                            <p class="txx"><?php echo ($v3["disp"]); ?></p>
							<br/>
							<p class="txx">
								<span  style="font-size:12px;color:#ADADAD;float:left;">#&nbsp;&nbsp;<?php echo (date("Y-m-d",$v3["addtime"])); ?></span>
								<span  style="font-size:12px;color:#ADADAD;float:right;"><?php if($v3['vip']==1){echo "<font style='font-size:12px;color:red;'>vip会员可见</font>&nbsp;&nbsp;";} ?>阅读&nbsp;&nbsp;<?php echo ($v3["pv"]); ?></span>
							</p>
							<?php if($v3['yue']==1){ ?>
								<div style="width:8px;height:8px;border-radius:50%;background:red;position:absolute;top:10px;right:10px;"></div>
							<?php } ?>
                        </div>
                    </a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>

    </div>


<div style="height:50px"></div>







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
		<svg class="icon"  aria-hidden="true">
		    <use xlink:href="#icon-qianbao"></use>
		</svg>
		<br>
       <span  style="font-size:12px;">办卡</span>
	</div>
	</a>
	<!-- <a href="/member/index"  class="content" id="xs12s" >-->       
	<a href="<?php echo U('/community');?>">
	<div class="col-xs2">
		<svg class="icon" style="color:#D61F4B;" aria-hidden="true">
		    <use xlink:href="#icon-shequ-active1"></use>
		</svg>
		<br>
    <span  style="font-size:12px;">资讯</span>
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

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script>
	//jja
	$("#nav1").click(function(){ 
		$("#page2").hide();
		$("#page3").hide();
		$("#page1").show();
		$("#nav2").removeClass("action");
		$("#nav3").removeClass("action");
		$(this).addClass("action");
	});
	//kka
	$("#nav2").click(function(){ 
		$("#page1").hide();
		$("#page3").hide();
		$("#page2").show();
		$("#nav1").removeClass("action");
		$("#nav3").removeClass("action");
		$(this).addClass("action");
	});

	$("#nav3").click(function(){ 
		$("#page2").hide();
		$("#page1").hide();
		$("#page3").show();
		$("#nav2").removeClass("action");
		$("#nav1").removeClass("action");
		$(this).addClass("action");
	});
</script>
</html>