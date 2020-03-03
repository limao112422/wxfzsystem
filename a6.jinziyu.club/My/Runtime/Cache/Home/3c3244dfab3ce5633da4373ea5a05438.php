<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="www.lswig.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no">
<title>推广数据</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1557940216"/>
 <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
<script src="/Public/js/jquery-1.7.min.js"></script>
<script src="/Public/js/Leter.js?time=1557940216"></script>
 <style>
   .rlist li .txt h1 {
    color: #333;
    font-size: 0.8rem;
   border-bottom:none;
}
   .rlist li .txt {
    width: 90%;
    float:none;
    padding-bottom: .8rem;
    margin: 0 auto;
}
   .qsearch button {
     background: rgb(0, 150, 255);}
   .qsearch input{
   	    border: 1px solid rgb(0, 150, 255);
   }
 </style>
</head>
<body>

	<div class="pheader">
		<div class="header">
			<span onclick="history.go(-1);"></span>
			任务数据
		</div>
		<form action="<?php echo U('User/money');?>" method="post">
			<div class="qsearch">
				<i></i>
				<input name="keyword" type="text"  class="inpMain" placeholder="搜索：起始时间" value="<?php echo ($keyword); ?>" id="test1">
	
				<button>搜索</button>
			</div>
		</form>
		<div class="anav">
			<ul>
				<li  id="s1"><span>辅助中(<?php echo ($count_1); ?>)</span><i></i></li>
				<li  id="s2"><span>订单成功(<?php echo ($count_2); ?>)</span><i></i></li>
				<li  id="s3"><span>订单失败(<?php echo ($count_3); ?>)</span><i></i></li>
			</ul>
		</div>
	</div>
	<div class="rlist" id="c1">
		<ul >
          <?php if(is_array($c1)): $i = 0; $__LIST__ = $c1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-item">
						<div class="txt">
							<h1>
								单号：<?php echo ($vo["bh"]); echo ($vo["id"]); ?>							
                              <i>辅助中</i>
							</h1>
							<p>结束时间：<?php echo ($vo["time"]); ?></p>
						</div>
           </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
      <div class="rlist" id="c2" style="display:none">
		<ul class="list-items">
          <?php if(is_array($c2)): $i = 0; $__LIST__ = $c2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-item">
						<div class="txt">
							<h1>
								单号：<?php echo ($vo["bh"]); echo ($vo["id"]); ?>							
                              <i>成功</i>
							</h1>
								<p>结束时间：<?php echo ($vo["time"]); ?></p>
						</div>
           </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
    <div class="rlist" id="c3"style="display:none">
		<ul class="list-items">
          <?php if(is_array($c3)): $i = 0; $__LIST__ = $c3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-item">
						<div class="txt">
							<h1>
								单号：<?php echo ($vo["bh"]); echo ($vo["id"]); ?>							
                              <i>失败</i>
							</h1>
								<p>结束时间：<?php echo ($vo["time"]); ?></p>
						</div>
           </li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
  <?php echo ($page); ?>


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
<script src="/Public/layui/layui.js"></script>
<script>

layui.use('laydate', function(){
  var laydate = layui.laydate;
  
  //执行一个laydate实例
  laydate.render({
    elem: '#test1' //指定元素
  });
   //执行一个laydate实例
  laydate.render({
    elem: '#test2' //指定元素
  });
});

///切换
$("#s1").click(function(){ 
	$(this).css("color","#EE9C4D");
	$("#s2").css("color","#666666");
	$("#s3").css("color","#666666");

	$(this).css("border-bottom","1px solid #EE9C4D");
	$("#s2").css("border","none");
	$("#s3").css("border","none");
	$("#c3").hide();
	$("#c2").hide();
	$("#c1").show();

}); 

$("#s2").click(function(){ 
	$(this).css("color","#EE9C4D");
	$("#s1").css("color","#666666");
	$("#s3").css("color","#666666");

	$(this).css("border-bottom","1px solid #EE9C4D");
	$("#s1").css("border","none");
	$("#s3").css("border","none");

	$("#c2").show();
	$("#c1").hide();
	$("#c3").hide();

}); 

$("#s3").click(function(){ 
	$(this).css("color","#EE9C4D");
	$("#s2").css("color","#666666");
	$("#s1").css("color","#666666");

	$(this).css("border-bottom","1px solid #EE9C4D");
	$("#s2").css("border","none");
	$("#s1").css("border","none");
	$("#c1").hide();
	$("#c3").show();
	$("#c2").hide();

}); 

</script>
</body>
</html>