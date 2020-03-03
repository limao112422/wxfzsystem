<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="www.lswig.cn" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="format-detection" content="telephone=no">
<title>网贷商推广二维码</title>
<link rel="stylesheet" type="text/css" href="/Public/css/style.min.css?time=1558177951"/>
<script src="/Public/js/jquery-1.7.min.js"></script>
<script src="/Public/js/Leter.js?time=1558177951"></script>
   <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.3/style/weui.min.css">
  <link rel="stylesheet" type="text/css" href="http://apps.bdimg.com/libs/fontawesome/4.4.0/css/font-awesome.min.css">
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
</style>
	<div class="pheader">
		<div class="header">
			<span onclick="history.go(-1);"></span>
			网贷商推广二维码
			<!-- <button class="copy" data-clipboard-action="copy" data-clipboard-text="">一键复制链接</button> -->
		</div>
		<form action="<?php echo U('index/qrcode');?>" method="post" style="border-bottom:1px solid #eee;">
			<div class="qsearch">
				<i></i>
				<input type="text" name="keyword" id="keyword" placeholder="输入产品名称搜索" value="" />
			</div>
		</form>
	</div>
	<div class="qlist">
		<ul class="items">
         <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li class="list-item">
					<img class="headimg" src="<?php echo ($vo["img"]); ?>" />
					<div class="txt">
						<h1>
							<?php echo ($vo["name"]); ?>					</h1>
						<p>
                         
							<button onclick="window.location.href='<?php echo U('/Register/tui',array('chanid'=>$vo['id'],'style'=>2));?>'">生成推广二维码</button>
							<button class="head copy" data-clipboard-action="copy" data-clipboard-text="<?php echo ($vo['url']); ?>">复制链接</button>
						</p>
					</div>
				</li><?php endforeach; endif; ?>
        </ul>
	</div>
<script src="/Public/js/infinite-scroll.pkgd.min.js"></script>
<script src="/Public/js/clipboard.min.js"></script>
<script>

   var copy = document.querySelectorAll('.copy');
    var clipboard = new ClipboardJS(copy);
    clipboard.on('success', function(e) {
        alert('复制成功！');
    });

    clipboard.on('error', function(e) {
        console.log('复制失败！');
    });
</script>

<div class="weui-tabbar" style="position: fixed;max-width: 640px;">
    <a href="<?php echo U('/index/index');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-home "></i>
      </div>
      <p class="weui-tabbar__label ">首页</p>
    </a>
    <!--a href="<?php echo U('/card/decardlist');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-rmb"></i>      	
      </div>
      <p class="weui-tabbar__label">贷款</p>
    </a>
    <a href="<?php echo U('/community');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-file-text-o"></i>      	
      </div>
      <p class="weui-tabbar__label">资讯</p>
    </a-->
    <a href="<?php echo U('/user/index');?>" class="weui-tabbar__item">
      <div class="weui-tabbar__icon">
      	<i class="fa fa-user "></i>      	
      </div>
      <p class="weui-tabbar__label red">我的</p>
    </a>
  </div>
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
</body>
</html>