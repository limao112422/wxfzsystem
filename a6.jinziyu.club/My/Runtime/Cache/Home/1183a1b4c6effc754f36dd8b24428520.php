<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="www.lswig.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no">
<title>首页</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1558177951"/>
<script src="/Public/js/jquery-1.7.min.js"></script>
<script src="/Public/layer/layer.js"></script>
<script src="/Public/js/Leter.js?time=1558177951"></script>
   <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
  <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/Public/dh/css/style.css">
</head>
<body>

<style>
	.pheader .header button{
		padding: 3px 10px;
		margin: 10px;
		border: none;
		background: #dc4924;
		color: #fff;
		border-radius: 5px;
	}
  .qsearch i{
  		    display: block;
    width: 1.5rem;
    height: 1.5rem;
    background: url('/Public/img/search.png') no-repeat;
    background-size: 100%;
    position: absolute;
    top: 1.5rem;
    left: 1rem;
  }
  .header{
  	text-align:left;
  }
  .header span {
    display: block;
    width: 1.5rem;
    height: 1.5rem;
    left: 1rem;
    top: .75rem;
    position: absolute;
    background: url(/Public/img/back.png) no-repeat;
    background-size: 50%;}
  .qlist li .txt p button {
    height: 1.5rem;
    border: none;
    background: url(/Public/img/reg.png) no-repeat;
    background-size: 200%;
    color: #fff;
    border-radius: 5px;
    margin-right: 1.5rem;
    font-size: .85rem;}
   .kz{
      font-size: 16px !important;
    display: block;
    margin: 0 auto;
    width: 100%;
    text-align: center;
    border: 1px solid rgb(0, 150, 255);
    border-radius: 20px;
   color:rgb(0, 150, 255);
    margin-top: 13px;
    height: 42px;
    line-height: 42px;
  }
  .qlist li .txt p {
    margin-bottom: .7rem;
    overflow: hidden;}
  .qd{
  	width:90%;
    margin:0 auto;
  }
  .qlist li .txt p button {
    height: auto;
    background: rgb(0, 150, 255);
    margin-right: 1.5rem;
    font-size: 1rem;
    padding: 7px;
}
  .qlist {
    width: 100%;
    margin-top: 10.8rem;
    border-top: 1px solid #eee;}
  .p{
  	display:block;
   	width:30px;
    height:55px;
    text-align:center;
    color:#fff;
  }
  .p1{
  	background:rgb(0, 150, 255);
	margin-bottom:10px;
  }
    .p2{
  	background:rgb(247, 85, 85);
     height:103px;
      margin-bottom:10px;
  }
    .p3{
  	background:rgb(247, 164, 0);
          height:103px;
  }
</style>
	<div class="pheader">
		<div class="header">
			<p style="text-align:center">做任务</p>
		</div>
      	<div class="qd">
		<a class="kz"href="<?php echo U('index/index');?>">刷新</a>
		<a class="kz" onclick="qd()">一键抢单</a>
        </div>
	</div>
  	<div style="position:fixed;top:40%;">
      	<a href="<?php echo U('community/text/id/4');?>" class="p p1">公<br>告</a>
      	<a href="<?php echo U('community/text/id/5');?>" class="p p2">最<br>新<br>活<br>动</a>
      	<a href="<?php echo U('community/text/id/6');?>" class="p p3">辅<br>助<br>指<br>南</a>
    </div>
  <?php if(!$data){ ?>

 <div class="container">
	<div class="circle"></div>
	<div class="circle"></div>
	<div class="circle"></div>
</div>
    <p style="text-align: center;">正在为您努力加载任务</p>
   <script language="JavaScript">
function myrefresh()
{
   window.location.reload();
}
setTimeout('myrefresh()',3000); //指定1秒刷新一次
</script> 
  <?php }else { ?>
	<div class="qlist">
		<ul class="items">
         <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="list-item">
					<p class="jsTime2" data-time="<?php echo ($vo["time"]); ?>" style="line-height:107px;color:red;font-size:20px;text-align:center;color:red;width: 25%;"></p>
					<div class="txt">
						<h1>
							任务编号：<?php echo ($vo["bh"]); echo ($vo["id"]); ?>				
                      	</h1>
						<p>
                         
							<span>API</span>&nbsp;<span>佣金：<?php echo ($vo["pay"]); ?></span>
							<button onclick="lius(<?php echo ($vo["id"]); ?>)" style="float:right;">接单</button>
						</p>
					</div>
				</li><?php endforeach; endif; ?>
        </ul>
	</div>
<?php }?>


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
<script>
    	function qd(){
			$.post(
					"<?php echo U('Card/shuju');?>",
					{
						type:"zd",
                        uid:"<?php echo ($uid); ?>"
					},
					function (data,state){
						if(state != "success"){
							layer.msg("请求失败,请重试");
							return false;
						}else if(data.status == 1){
							//$.alert("修改成功");

							  //点击确认后的回调函数
							  window.location.href ="/loan/read/id/"+data.id;
							
							
						}else{
							layer.msg(data.msg);
							return false;
						}
					}
					);
	}
	function lius(id){
     
				$.post(
					"<?php echo U('Card/shuju');?>",
					{
						id: id,
                        uid:"<?php echo ($uid); ?>"
					},
					function (data,state){
						if(state != "success"){
							layer.msg("请求失败,请重试");
							return false;
						}else if(data.status == 1){
							//$.alert("修改成功");

							  //点击确认后的回调函数
							  window.location.href ="/loan/read/id/"+id;
							
							
						}else{
							layer.msg(data.msg);
							return false;
						}
					}
					);

}
</script>
<script>

	$(function(){
		var _aname = "loanQrcode";
		$('#footer li').each(function(){
			if($(this).attr("_aname") == _aname){
				$(this).find('img').attr('src',$(this).find('img').attr("_src"));
				$(this).find('span').css("color","rgb(232, 79, 70)");
			}
		})
	})

</script>
<script>
  //时间格式处理
  const formatNumber = n => {
    n = n.toString();
    return n[1] ? n : '0' + n;
  };
  //团购倒计时
  const teamCountTime = (obj) => {
    var timer = null;
    function fn(){
      //获取设置的时间 如：2019-3-28 14:00:00  ios系统得加正则.replace(/\-/g, '/');
      var setTime = obj.getAttribute('data-time').replace(/\-/g, '/');
      //获取当前时间
      var date    = new Date(),
          now     = date.getTime(),
          endDate = new Date(setTime),
          end     = endDate.getTime();
      //时间差
      var leftTime = end - now;
      //d,h,m,s 天时分秒
      var m,s;
      var otime = '';
      if (leftTime >= 0) {
       
        m = Math.floor(leftTime / 1000 / 60 % 60);
        s = Math.floor(leftTime / 1000 % 60);
        
          otime = [m, s].map(formatNumber).join(':');
        
        obj.innerHTML = otime;
        //
        timer = setTimeout(fn, 1e3);
      } else {
        clearTimeout(timer);
        obj.innerHTML = '0';
      }
    }
    fn();
  };
  let jsTimes = document.querySelectorAll('.jsTime2');
  jsTimes.forEach((obj) => {
    teamCountTime(obj);
  });
</script>

</body>
</html>