<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台登录 - <?php echo C('cfg_sitetitle');?> </title>
<link href="/Public/home/layui/css/layui.css" rel="stylesheet" type="text/css" />
<link href="/Public/admin/login/css/login.css" type="text/css" rel="stylesheet"> 
</head> 
<body> 

<div class="login">
    <div class="message"><?php echo C('cfg_sitetitle');?>-管理登录</div>
    <div id="darkbannerwrap"></div>
    <form method="post" action="login">
		<input name="username" placeholder="用户名" required="" type="text">
		<hr class="hr15">
		<input name="password" placeholder="密码" required="" type="password">
		<hr class="hr15">
		<input value="登录" style="width:100%;" type="submit">
		<hr class="hr20">
		帮助 <a onClick="alert('请联系管理员')">忘记密码</a>
	</form>

</div>

<div class="copyright">© <?php echo C('cfg_sitetitle');?> by <a href="<?php echo C('cfg_siteurl');?>" target="_blank"></a></div>

</body>
<script src="/Public/home/layui/layui.js"></script>
<script>
	var t="<?php echo ($titles); ?>";
	var u=<?php echo ($u); ?>;
	if(u==1){
		layui.use('layer', function(){
		  var layer = layui.layer;
		  
		  layer.msg(t, {icon: 5});
		  console.log(t);
		});
	}

</script>
</html>