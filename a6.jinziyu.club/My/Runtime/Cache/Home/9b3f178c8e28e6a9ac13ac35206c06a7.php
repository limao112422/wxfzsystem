<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="xxxxx">
<meta name="author" content="xxxxx">
<meta name="keyword" content="xxxxx">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo C('cfg_sitename');?></title>
<!-- start: Css -->
<link rel="stylesheet" type="text/css" href="/Public/asset/css/bootstrap.min.css">
<!-- plugins -->
<link rel="stylesheet" type="text/css" href="/Public/asset/css/plugins/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/asset/css/plugins/simple-line-icons.css"/>
<link rel="stylesheet" type="text/css" href="/Public/asset/css/plugins/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/asset/css/plugins/icheck/skins/flat/aero.css"/>
<link href="/Public/asset/css/style.css" rel="stylesheet">
<!-- end: Css -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="asset/js/html5shiv.min.js"></script>
      <script src="asset/js/respond.min.js"></script>
<![endif]-->
</head>

<body id="mimin" class="dashboard form-signin-wrapper">
<div class="container">
  <form class="form-signin" action="" method="POST">
    <div class="panel periodic-login"> <span class="atomic-number">下单端</span>
      <div class="panel-body text-center">
        <h1 class="atomic-symbol"><img src="asset/img/zl-logo.png" width="30%" alt=""></h1>
        <p class="atomic-mass"><?php echo C('cfg_sitename');?></p>
        <i class="icons icon-arrow-down"></i>
        <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input type="text" class="form-text"  name="m" id="account" required />
          <span class="bar"></span>
          <label>账号</label>
        </div>
        <div class="form-group form-animate-text" style="margin-top:40px !important;">
          <input type="password" class="form-text" name="p" id="pasw1" required />
          <span class="bar"></span>
          <label>密码</label>
        </div>
        <div style="float:left">
        <a href="<?php echo U('register/register');?>">注册</a>
        <a href="<?php echo U('register/wangji');?>">忘记密码</a>
        </div>
        <input onclick="login()" type="button" class="btn col-md-12" value="登 录"/>
      </div>
      <div class="text-center" style="padding:5px;"> 版权所有：<?php echo C('cfg_sitename');?> </div>
    </div>
  </form>
</div>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
<script src="/Public/asset/js/main.js"></script> 
<script type="text/javascript">
//hui.formInit();

function login(){
	//二次验证手机号
	var mobile=$('#account').val();
	if (mobile=='' || mobile==null || mobile.length!=11) {
		alert("请输入正确手机号");
		return false;
	}
	if(!(/^1\d{10}$/.test(mobile))){ 
		alert("请输入正确手机号");
		return false;
	}
	//验证短信验证码
	/*	
  var checkma = $("#code").val();
	if(checkma=='' || checkma==null){
		$.alert("请输入短信验证码");
		return false;
	}*/
	//验证密码格式
	stroInp1 = $("#pasw1").val();
	var reg = new RegExp(/[a-zA-Z0-9_]{6,16}/);
	if(stroInp1.length == 0){
		alert("密码不能为空，请入密码");
		return false;
	}else if(!reg.test(stroInp1)){
		alert("请入6-16位密码!");
		return false;
	}
	
	//提交注册
	$.post(
		"<?php echo U('Login/login');?>",
		{
			phone:mobile,
			code:1,
			password:stroInp1
		},
		function (data,state){
			if(state != "success"){
				alert("请求失败,请重试");
				return false;
			}else if(data.status == 1){
				//注册成功同时会自动登陆,跳转到借款页面
				alert("登录成功!");
				window.location.href = "<?php echo U('Qudao/Main_index');?>";
				
			}else{
				alert(data.msg);
				return false;
			}
		}
	);
}

</script>
</body>
</html>