<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="www.lswig.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no">
<title>订单申诉</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1557940216"/>
 <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
<link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
<script src="/Public/js/jquery-1.7.min.js"></script>
<script src="/Public/js/Leter.js?time=1557940216"></script>
<script src="https://cdn.bootcss.com/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
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
.rlist {
  margin-top:0rem;
  margin-bottom:0rem;}
    @font-face{font-family:"hui-font"; src:url('/Public/css/fonts/iconfont.eot'); src:url('/Public/css/fonts/iconfont.eot?#iefix') format('embedded-opentype'), url('/Public/css/fonts/iconfont.woff') format('woff'), url('/Public/css/fonts/iconfont.ttf') format('truetype'), url('/Public/css/fonts/iconfont.svg#iconfont') format('svg');}
 .hui-header {
    display: flex;
    width: 100%;
    height: 44px;
    text-align: center;
    top: 0px;
    left: 0px;
    position: fixed;
    z-index: 19;
    background: #1972ED;
}.hui-header {
    background: rgb(0, 150, 255);
}
   #hui-back {
    width: 44px;
    height: 44px;
    font-family: "hui-font";
    line-height: 44px;
    text-align: center;
    flex-shrink: 0;
}
  
   .hui-header h1 {
    font-size: 18px;
    height: 44px;
    line-height: 44px;
    overflow: hidden;
    width: 100%;
    padding: 0px 38px 0px 38px;
    text-align: center;
    font-weight: 400;
    white-space: nowrap;
    text-overflow: ellipsis;
    color: #FFF;
}

   .anav {
    margin-top: 3rem;
}
   #hui-header-menu {
    width: 44px;
    height: 44px;
    line-height: 44px;
    font-family: "hui-font";
    flex-shrink: 0;
}
   #hui-back:before {
    content: "\e6a5";
    font-size: 18px;
    color: #FFFFFF;
}

 </style>
  <script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
  <script type="text/javascript" src="/Public/layui/layui.js" ></script>
</head>
<body>

	
			<header class="hui-header">
			    <div id="hui-back"></div>
			    <h1>订单申诉</h1>
			    <div id="hui-header-menu"></div>
			</header>
      <div class="anav">
			<ul>
				<li  id="s1"><span>可申诉</span><i></i></li>
				<li  id="s2"><span>申诉成功</span><i></i></li>
				<li  id="s3"><span>申诉失败</span><i></i></li>
			</ul>
		</div>
	</div>
	<div class="rlist" id="c1">
		<ul >
          <?php if(is_array($c1)): $i = 0; $__LIST__ = $c1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list-item" onclick="shensu(<?php echo ($vo["id"]); ?>)">
						<div class="txt">
							<h1>
								单号：<?php echo ($vo["bh"]); echo ($vo["id"]); ?>							
                              <i>可申诉</i>
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
	function shensu(id){

	$.confirm("恶意申诉将导致封号，确定发起申诉？", function() {
	  //点击确认后的回调函数
		$.post(
		"<?php echo U('User/shensu');?>",
		{
			id:id
		},
		function (data,state){
			if(state != "success"){
				$.alert("请求失败,请重试");
				return false;
			}else if(data.status == 1){
				$.alert("发起申诉成功");
				window.location.href = location.href;
			}else if(data.status == 2){
				$.alert(data.msg, function() {
				  //点击确认后的回调函数
				window.location.href = location.href;
				});
				
			}else{
				$.alert(data.msg);
				return false;
			}
		}
		);
		
	  }, function() {
	  //点击取消后的回调函数

	  });
}
</script>
  
</body>
</html>