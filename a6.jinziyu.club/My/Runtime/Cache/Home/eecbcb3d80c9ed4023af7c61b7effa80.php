<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>推广</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />

<link rel="stylesheet" href="/Public/css/frozen.css">
<link rel="stylesheet" href="/Public/css/swiper.min.css"> 
<script src="/Public/css/swiper.min.js"></script>

<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
<link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
<style>
.amenu {
    overflow: hidden;
    padding: 0px 10px!important;
}
  .hui-header{
  background:rgb(0, 150, 255);
  }
</style>
</head>
<body>
	<div id="page">
		<div style="height:44px;"></div>
		<!--<img src="/Public/image/banner.jpg" alt="banner" width="100%">-->
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>我的邀请码</h1>
			    <div id="hui-header-menu"></div>
			</header>
			<div class="hui-wrap" style="padding-top:10px">
				<div class="hui-list" style="background:#FFFFFF; margin:10px 0;border:0">
					<div class="amenu">
						<span style="font-size:12px;color:#EE9C4D;">推广邀请好友永久享下级提成
						</span>
					</div>
				</div>
				<div class="hui-list" style="background:#FFFFFF; margin-top:10px;border:0;text-align: center;display:none;">
					<img src="<?php echo U('/Register/qrcodeimgaaa');?>" id="xiaimg" style="width:100%;">
			    </div>


			</div>
			    
	</div>
	<style>
	.cundd{width:100%;height:50px;background:#FFFFFF;color:#EE9C4D;line-height:50px;text-align: center;border-radius:5px;position:fixed;bottom:0px;z-index:999999;}
	.cunleft{width:50%;height:50px;background:#;float:left;}
	.cunleftaa{width:50%;height:50px;background:#;float:left;}
	</style>
	<?php
 $uid = session(C('USER_AUTH_KEY')); $url="http://".$_SERVER['SERVER_NAME'].U('Register/signup',array('invitor' => $uid)); ?>

	<div  class="cundd">
		<div class="cunleft">
			<a href="javascript:void(0);" onclick="alert('长按保存图片');">保存图片</a>
		</div>
		<div class="cunleftaa">
			
			<button class="ssbootr" data-clipboard-text="<?php echo ($url); ?>" style="color:#EE9C4D;">复制链接</button>

		</div>
	</div>


<div style="height:50px;"></div>

<script type="text/javascript" src="/Public/js/clipboard.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
<script type="text/javascript">
	var copy = document.querySelectorAll('button');
    var clipboard = new ClipboardJS(copy);
    clipboard.on('success', function(e) {
        alert('复制成功！');
    });

    clipboard.on('error', function(e) {
        console.log('复制失败！');
    });

	function modelShow(){
		$('.pos').slideDown();
	}
	function modelHide(){
		$('.pos').slideUp();
	}
</script>
<script>
	$.post(
		"<?php echo U('Register/qrcodeimg');?>",
		{
			phone:'1'
		},
		function (data){
			if(data){
				$("#xiaimg").attr("src",data);
				var u="<?php echo U('/Register/vvdTest');?>";
				//$("#cunimg").attr("href",u);
				//$.alert(data);
				$(".hui-list").show();
				return false;
			}
		});
</script>
</html>