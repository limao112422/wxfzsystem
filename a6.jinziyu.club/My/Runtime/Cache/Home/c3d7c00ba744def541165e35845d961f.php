<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>设置密码</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<meta content="telephone=no" name="format-detection">
		<meta content="email=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<link rel="stylesheet" href="/Public/static/css/lgb3.0.css"/>
		<script type="text/javascript" src="/Public/static/js/jquery.min.js" ></script>
		<script src="/Public/static/js/lgb3.0.js"></script>


		<style>
			.vrfin-code-win>.graphical-code-img1{
				width:7.714rem;height:2.4285rem;margin:0 auto;
			}
			.vrfin-code-win>.graphical-code-img1{
				width:7.714rem;height:2.4285rem;
			}
		</style>

	</head>
	<body>
		<div class="g-big">
			
			<div class="f-tle-box">
				<section class="f-tle-billmn box-shaodw-h">
					<a class="tle-bill-htbtn" href="javascript:" onclick="history.go(-1)"></a>
					<span>设置密码</span>
				</section>
		    </div>
		    
		    <section class="set-pwd-content">
		    	<ul class="set-pwd-ul">
		    		<li>
		    			<span>手机号</span>
		    			<div class="set-pwd-iptbx">
							<input class="set-pwd-blphone bl-poe-hdm" maxlength="11"  style= ime-mode: disabled id="username" type="text" placeholder="请输入手机号" value="<?php echo ($data["mobile"]); ?>"/>

						</div>
		    		</li>

		    		<li>
		    			<span>密码</span>
		    			<div class="set-pwd-iptbx">
		    				<input class="set-pwd-blphone bl-tge-pwd" type="password" id="password" maxlength="22"  placeholder="请输入6～22位密码" />
		    				<!--<div class="bl-pd-toggle"><a href="javascript:" class="sms-code-hide"></a></div>-->
		    			</div>
		    		</li>
		    	</ul>
		    	
		    	<div class="bl-tle-btnbx">
		    		<a href="javascript:;" id="sub" class="bs-hs-btn">确定</a>

		    	</div>
		    </section>
		    
		    
	    </div>

	</body>
</html>
<script src="/Public/layer/layer.js"></script>
<script>
	$("#sub").on('click',function () {
		var password = $('#password').val();
		$.post('/Home/user/setpassword',{
            password:password
		},function (res) {
			layer.msg(res.msg,{time:2000},function () {
				location.href='/Home/user/index'
            });
        })
    })
</script>