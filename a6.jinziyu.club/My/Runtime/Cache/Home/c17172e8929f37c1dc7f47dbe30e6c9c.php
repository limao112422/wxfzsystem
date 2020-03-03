<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>贷款区</title>
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/css/frozen.css">
<link rel="stylesheet" href="/Public/css/swiper.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>  
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
<script src="/Public/css/swiper.min.js"></script>
<link rel="stylesheet" href="/Public/css/index.css">
<link href="/Public/layui/css/layui.css" rel="stylesheet" type="text/css">
<script src="/Public/layui/layui.js"></script>
<script type="text/javascript" src="/Public/js/clipboard.min.js"></script>
<style type="text/css"> 
 .col-xs-12{
     background: #ffffff;
 }
 p{
   color:#181818;
 }
 .name{
background-image: url("http://361.360pr7.cn/public/static/img/3s.png");/*设置小图标*/
background-size: 25px 25px;/*小图标的大小*/
background-position: 5px 4px;/*小图标在input的位置*/
background-repeat: no-repeat;/*背景小图标不重复*/
padding: 8px 10px 8px 40px;/*设置input内边距*/
/*设置input样式好看*/
border:1px solid #ddd;
margin: 30px;
width: 220px;

  }
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
<header class="ui-header ui-header-stable ui-border-b">

    <span style="float:left;" onclick="history.back()"><img src="/Public/image/left.png"></span><h1 style="margin-top:10px;"><?php echo ($f["name"]); ?></h1>
</header>
         
 <div class="container-fluid">
  <div class="row">

              <div class="col-xs-12" style="background: #ffffff; padding-top:80px;height:170px;  ">
                <div class="col-xs-3">
                   <img src="<?php echo ($f["img"]); ?>" style="width:80px;" class="img-rounded">
                </div>
                <div class="col-xs-9" style="line-height: 20px;">
                  <span style="margin: 0px; font-size:20px;"><?php echo ($f["name"]); ?></span><br>
                  <p style="color: #3399FF;"><?php echo ($f["member"]); ?><span style="color:#ccc;">人已放款</span></p>
				  <p style="color: #3399FF;"><span style="color:#ccc;">佣金</span>&nbsp;￥<?php echo ($f["pay"]); ?> &nbsp;&nbsp;<span style="font-size:10px;background:#EE9C4D;padding:3px 6px;color:#FFFFFF;line-height:25px;border-radius:5px;"><?php echo ($f["jiesuan"]); ?></span></p>
				  <p style="color: #ccc;font-size:12px;"><span style="color:#ccc;">浏览量</span>&nbsp;<?php echo ($f["pv"]); ?></p>
                </div>
              </div>




          
           <div class="col-xs-12" style="margin-top:5px; color: #ccc;">
            基本信息
          
                    <table class="ui-table ui-border-tb">
                    <tbody>
                    <tr><td style="height: 100px; text-align:left; width: 180px;">
                                  <span>额度范围</span>
                                  <p><?php echo ($f["price"]); ?>元</p>
                             </td>

                             <td style="text-align:left;padding-left: 10px;">
                            <span>期限范围</span><br>
                            <p><?php echo ($f["day"]); ?>天</p>
                             </td>
                    </tr>
                    <tr>
                          <td style="height: 100px; text-align:left;">
                                  <span>利息范围</span>
                                  <p><?php echo ($f["red"]); ?>%</p>
                          </td>
                          <td style="text-align:left;padding-left: 10px;">
                            <span>审核时间</span>
                            <p><?php echo ($f["sday"]); ?>小时</p>
                          </td>
                    </tr>
                    </tbody>
                    </table>
    <div class="col-xs-12" style=" padding-top:10px; background:#ffffff; margin-bottom:70px; ">
          <a href="">
             <h1>机构介绍<span style="float: right;"></span></h1>
          </a> 
          <p style="margin-top:10px; ">
            <?php if(is_array($f["d"])): foreach($f["d"] as $key=>$v): ?><p><?php echo ($v); ?></p><?php endforeach; endif; ?></p>
    </div>                

           </div>

  


                    
                <!-- <nav class="navbar navbar-default navbar-fixed-bottom"> 
                 <div class="col-xs-12" style="background: #ffffff;">
                    <div class="col-xs-6">
						<?php  if(isset($_SESSION[C('USER_AUTH_KEY')])){ ?>
                     <button class="ui-btn-lg ui-btn-primary" id="but" onclick="window.location.href='<?php echo ($f["link"]); ?>'">
                            立即申请
                      </button>
					 <?php  }else{ ?>
					  <button class="ui-btn-lg ui-btn-primary" id="but" onclick="window.location.href='<?php echo U('/Login/index');?>'">
                            立即申请
                      </button>
						<?php } ?>
                     </div>
                     <div class="col-xs-6"> 
						<?php  if($fu['vip']==0){ ?>
							<button class="ui-btn-lg ui-btn-danger" id="code" onclick="window.location.href='<?php echo U('/User/qrcode');?>'">
								立即推广
							</button>
							<?php  }else{ ?>
							<button class="ui-btn-lg ui-btn-danger" id="code" onclick="tanzi();">
								提交推荐资料
							</button>
							<?php } ?>                      </div>      
                  </div>  
                </nav>  -->
		  </div>
</div>

<!-- 图片模态框 -->




</div>

<!--重写 D61F4B-->
<style>
.ssboot{width:100%;height:60px;background:#7F7F7F;position:fixed;bottom:0px;}
.ssbootl{width:100px;height:40px;background:#FFFFFF;float:left;margin-left:10px;margin-top:10px;border-radius:5px;line-height: 40px;text-align: center;}
.ssbootr{width:100px;height:40px;background:#FFFFFF;float:right;margin-right:10px;margin-top:10px;border-radius:5px;line-height: 40px;text-align: center;}
.centyy{position:absolute;top:-50px;width:80px;height:80px;background:#DB605F;color:#fff;border-radius:50%;left:50%;margin-left:-40px;line-height: 20px;text-align: center;}
.layui-layer-btn0 {
    border-color: #1E9FFF;
    background-color: #1E9FFF;
    color: #fff;
    width: 100%;
    height: 40px!important;
	line-height:40px!important;
}
</style>
<?php  $url="http://".$_SERVER['SERVER_NAME'].U('/card/read',array('id'=>$f['id'],'tid'=>$fu['id']));?>

<div class="ssboot"> 


<?php  if(isset($_SESSION[C('USER_AUTH_KEY')])){ ?>

<?php  if($fu['vip']==0){ ?>
<div class="ssbootl" onclick="window.location.href='<?php echo U('/User/join');?>'">生成二维码</div>
	<button class="ssbootr" onclick="window.location.href='<?php echo U('/User/join');?>'" style="">复制链接</button>

<?php  }else{ ?>
	<div class="ssbootl" onclick="window.location.href='<?php echo U('/Register/qrcodeimgtui',array('chanid'=>$f['id'],'style'=>2));?>'">生成二维码</div>
	<button class="ssbootr" data-clipboard-text="http://<?php echo $_SERVER['SERVER_NAME']; echo U('/Loan/read',array('id'=>$f['id'],'tid'=>$fu['id']));?>" style="">复制链接</button>
<?php } ?>


<?php  }else{ ?>

<div class="ssbootl" onclick="window.location.href='<?php echo U('/Login/index');?>'">生成二维码</div>
	<button class="ssbootr" onclick="window.location.href='<?php echo U('/Login/index');?>'" style="">复制链接</button>
<?php } ?>

		
		<div class="centyy" onclick="tanzi();">
			<p style="margin-top: 20px;color:#fff;">立即</p>
			<p style="margin-top: 5px;color:#fff;">申请</p>
		</div>
		
</div>
<!--重写 end-->



<div id="divv">


</div>
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
<script>function fleshVerify(){document.getElementById('verifyImg').src= '<?php echo U('register/verify');?>'}</script>
<script>





//更新浏览量

function liu(){
				$.post(
					"<?php echo U('Card/liu');?>",
					{
						type:1,
						id:"<?php echo ($f["id"]); ?>"
					},
					function (data,state){
						/*if(state != "success"){
							layer.msg("请求失败,请重试");
							return false;
						}else if(data.status == 1){
							//$.alert("修改成功");
							layer.msg("提交成功", function() {
							  //点击确认后的回调函数
							  //window.location.href = location.href;
							});
							
						}else{
							layer.msg(data.msg);
							return false;
						}*/
					}
					);

}
liu();











layui.use('form', function(){
	var form = layui.form;
});	
	function tanzi(){
		
	layui.use('layer', function(){ //独立版的layer无需执行这一句
		var $ = layui.jquery, layer = layui.layer; //独立版的layer无需执行这一句
		//示范一个公告层
      layer.open({
        type: 1
        ,title: false //不显示标题栏
        ,closeBtn: false
        ,area: '300px;'
		,shadeClose:true 
		,shade: [0.3, '#393D49']
        ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
        ,btn: ['马上申请']
        ,btnAlign: 'c'
        ,moveType: 1 //拖拽模式，0或者1
        ,content: '<div style="padding: 20px; line-height: 22px;border-radius:5px; background-color: #FFF; color: #333; font-weight: 300;"><form class="layui-form" action=""><div class="layui-form-item"><input type="text" name="name" id="xingming" required  lay-verify="required" placeholder="姓名" autocomplete="off" class="layui-input"></div><div class="layui-form-item"><input type="text" name="cardno" id="shenfenzheng" required  lay-verify="required" placeholder="身份证号码" autocomplete="off" class="layui-input"></div><div class="layui-form-item"><input type="text" name="phone" id="shouji" required  lay-verify="required" placeholder="手机号"  class="layui-input"></div><div class="layui-form-item"><div style="width:50%;float:left;"><input type="text" name="jine" id="jine" required  lay-verify="required" placeholder="请输入验证码"  class="layui-input"></div><div style="width:45%;height:38px;float:left;margin-left:5%;"><img style="width:100%;height:38px;" src="<?php echo U("register/verify");?>" id="verifyImg" alt="刷新验证码" onclick="fleshVerify()" /></div></div></form></div>'
        ,yes: function(layero){
				var name=$("#xingming").val();
				var shenfen=$("#shenfenzheng").val();
				var shouji=$("#shouji").val();
				var jine=$("#jine").val();
				if(name==''){
					layer.msg('姓名不得为空');return false;
				}
				if(shenfen==''){
					layer.msg('身份证号码不得为空');return false;
				}
				if(shouji==''){
					layer.msg('手机号不得为空');return false;
				}
				if(jine==''){
					layer.msg('金额不得为空');return false;
				}
				//提交到后台
				$.post(
					"<?php echo U('Card/shuju');?>",
					{
						type:2,
						name:name,
						shenfen:shenfen,
						shouji:shouji,
						jine:jine,
						chanid:"<?php echo ($f["id"]); ?>"
					},
					function (data,state){
						if(state != "success"){
							layer.msg("请求失败,请重试");
							return false;
						}else if(data.status == 1){
							//$.alert("修改成功");
							//layer.msg("提交成功", function() {
							  //点击确认后的回调函数
							  window.location.href = "<?php echo ($f["link"]); ?>";
							//});
							
						}else{
							layer.msg(data.msg);
							return false;
						}
					}
					);
				//alert(name);
        }
      });
	  });
	}


</script>
</html>