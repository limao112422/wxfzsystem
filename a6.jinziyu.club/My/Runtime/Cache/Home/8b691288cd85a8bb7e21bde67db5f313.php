<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!-- saved from url=(0046)http://ymzsjd.ymassist.com/getorderwap/my.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
<meta name="Keywords" content="">
<meta name="Description" content="">
<title>我的</title>
<link rel="stylesheet" href="/Public/grzx/api.css">
<link rel="stylesheet" href="/Public/grzx/aui.css">
<link rel="stylesheet" href="/Public/grzx/iconfont.css">
<link rel="stylesheet" href="/Public/grzx/swiper.min.css">
<link rel="stylesheet" href="/Public/grzx/main.css">
  <link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1558177951"/>
  <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
  <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
<div id="MainCon" class="MainCon t0">
	<div id="aui-header" class="MyBgCon">
		<div class="aui-content">
			<span class="aui-pull-right"><i class="iconfont icon-xiaoxi fs20 "></i></span>
		</div>
		
		<ul class="aui-list aui-media-list mb10 NoBorTop">
			<li tapmode="" onclick="window.location.href='<?php echo U('user/setzhimafen');?>'" class="aui-list-item aui-list-item-middle NoBorBottom pl0">
			<div class="aui-media-list-item-inner">
				<div class="aui-list-item-media" style="width: 3.5rem;">
					<img src="/Public/grzx/tx.png" class="aui-img-round aui-list-img-sm">
				</div>
				<div class="aui-list-item-inner">
					
					<div class="aui-list-item-text mb5" style="">
						<div class="aui-list-item-title aui-font-size-14 color_fff">
                            <span><?php echo ($f["mobile"]); ?></span>
						</div>
					</div>
					<div class="aui-list-item-text color_fff">
						<span class="levelIcon"><i class="iconfont icon-dengjiV fs13"></i>代理模式	
						</span>
					</div>
				</div>
			</div>
			</li>
		</ul>
		<div style="position: absolute; right: 15px; bottom: 0px; text-align: right; width: 30%;">
			<img src="/Public/grzx/yhy.png" tapmode="" onclick="window.location.href='<?php echo U('user/qrcode');?>'" style="width: 100%; display: inline-block;">
		</div>
	</div>
	<div class="TotalCollect aui-content">
		<ul class="aui-list aui-media-list mb10 NoBorTop">
			<div class="aui-content aui-col-xs-4">
				<div class="fs24 fw700">
					<span class="fs12">总接</span><?php echo ($count); ?><span class="fs16">单</span>
				</div>
			</div>
			<div class="aui-content aui-col-xs-4" style="padding-left: 12px; border-left: 1px solid rgb(238, 238, 238);">
				<div class="fs24 fw700">
					<span class="fs12">总成功</span><?php echo ($c); ?><span class="fs16">单</span>
				</div>
			</div>
			<div class="aui-content aui-col-xs-4" style="padding-left: 12px; border-left: 1px solid rgb(238, 238, 238);">
				<div class="fs24 fw700">
					<span class="fs12">成功率</span><?php echo ($lv); ?><span class="fs16">%</span>
				</div>
			</div>
		</ul>
	</div>
	
	<div class="TotalCollect aui-content">
		<ul class="aui-list aui-media-list mb10 NoBorTop">
			<div class="aui-content aui-col-xs-6">
				<p class="fs14">
					账号余额
				</p>
				<div class="fs24 fw700" style="font-weight: bold; color: rgb(0, 133, 255); left: 50px;">
							<?php echo ($f["price"]); ?>
					<span class="fs14 fw700 color_777">(元)</span>
				</div>
			</div>
			<div class="aui-content aui-col-xs-3">
				<div onclick="window.location.href='<?php echo U('user/mingxi');?>'" class="aui-btn aui-btn-info aui-btn-outlined aui-margin-10" style="padding: 0px 25px; font-size: 15px; height: 1.9rem; line-height: 1.9rem;">
					明细
				</div>
			</div>
			<div class="aui-content aui-col-xs-3">
				<div onclick="window.location.href='<?php echo U('user/ye');?>'" class="aui-btn aui-btn-info aui-margin-10" style="padding: 0px 25px; font-size: 15px; height: 1.9rem; line-height: 1.9rem;">
					提现
				</div>
			</div>
		</ul>
	</div>
	<section class="aui-grid aui-margin-b-10">
	<div class="aui-row">
		<div tapmode="" onclick="window.location.href='<?php echo U('user/qrcode');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-user fs30" style="color: rgb(236, 99, 81);"></i>
			<div class="aui-grid-label">
				邀请好友
			</div>
		</div>
      <div tapmode="" onclick="window.location.href='<?php echo U('user/shangji');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-businesscard fs30" style="color: rgb(26, 108, 243);"></i>
			<div class="aui-grid-label">
				我的上级<span class="fs14" style="color: red;"></span>
			</div>
		</div>
		<div tapmode="" onclick="window.location.href='<?php echo U('user/recommend');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-group fs30" style="color: rgb(26, 108, 243);"></i>
			<div class="aui-grid-label">
				我的下级
			</div>
		</div>
		<div tapmode="" onclick="window.location.href='<?php echo C('cfg_dowurl');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-chongzhi fs30" style="color: rgb(26, 108, 243);"></i>
			<div class="aui-grid-label">
				APP下载
			</div>
		</div>
	</div>
	<div class="aui-row">
		
		<div tapmode="" onclick="window.location.href='<?php echo U('user/setzhimafen');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-app fs30" style="color: rgb(255, 188, 13);"></i>
			<div class="aui-grid-label">
				个人资料
			</div>
		</div>
		<div tapmode="" onclick="window.location.href='<?php echo U('user/problem');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-question-mark-r fs30" style="color: rgb(236, 99, 81);"></i>
			<div class="aui-grid-label">
				常见问题
			</div>
		</div>
		<!--div tapmode="" onclick="window.location.href='<?php echo U('user/lirun');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-diamond fs30" style="color: rgb(26, 108, 243);"></i>
			<div class="aui-grid-label">
				利润设置
			</div>
		</div-->
		<div tapmode="" onclick="window.location.href='<?php echo U('user/shensu');?>'" class="aui-col-xs-3" style="padding: 10px 0px;">
			<i class="iconfont icon-huida fs30" style="color: rgb(98, 237, 239);"></i>
			<div class="aui-grid-label">
				订单申述
			</div>
		</div>
	
	</div>
	</section><section class="aui-grid"></section>
	<div class="aui-content-padded mt40 mb40">
		<div class="aui-btn aui-btn-info aui-btn-block aui-btn-sm br20" onclick="logout()">
			退出
		</div>
	</div>
</div>
<footer class="aui-bar aui-bar-tab MainFoot" id="f_id">
<div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="<?php echo U('/index/index');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-home "></i>
      </div>
      <p class="weui-tabbar__label ">首页</p>
    </a>
  <a href="<?php echo U('user/money');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-file-text-o"></i>      	
      </div>
      <p class="weui-tabbar__label">订单</p>
    </a>
    <a href="<?php echo U('user/qrcode');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-rmb"></i>      	
      </div>
      <p class="weui-tabbar__label">邀请</p>
    </a>
    
    <a href="<?php echo U('/user/index');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-user "></i>      	
      </div>
      <p class="weui-tabbar__label red">我的</p>
    </a>
  </div>
</footer>
  		<script src="/Public/static/js/jquery-1.12.4.min.js"></script>

		<script src="/Public/layer/layer.js"></script>
<script>
    function logout() {
        layer.confirm("确定要退出当前帐号？",{
            title:"",
            skin: 'my-skin',
            btn: ['确定','取消'] //按钮
		}, function() {
            //点击确认后的回调函数
            window.location.href = "/Register/logout.html";
        }, function() {
            //点击取消后的回调函数

        });
    }
</script>
</body>
</html>