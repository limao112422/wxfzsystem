<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
</head>
<body style="background: #F0EFF5;">
    <div id="page" style="height:100%;">
        <header class="hui-header">
            <div id="hui-back"></div>
            <h1>我的通知</h1>
            <div id="hui-header-menu"></div>
        </header>
        <div class="hui-media-list" style="padding-top:60px;">
            <div style="background:#FFF; padding:0px 15px; margin:10px;" class="hui-flex">
                <div style="height:46px; width:20px;">
                    <img src="../Public/img/spiker.png" width="20" style="padding:13px 0px;" />
                </div>
                <div class="hui-scroll-news" id="scrollnew1">
                    <div class="hui-scroll-news-items"><a href="javascript:hui.toast('test...');">一块橘子皮就能秒开你的手机</a></div>
                    <div class="hui-scroll-news-items">新一轮成品油价或迎年内首次"二连涨"</div>
                    <div class="hui-scroll-news-items">暴雪再袭长三角：交通遭重创 用电量增 菜价涨</div>
                </div>
            </div>

            
        </div>

    </div>

    <div class="customers">
        <div class="qservice">
            <a href="<?php echo U('/surname');?>">
            <div id="svebar_1">
              <div class="icon">
                <span class="serItemIcon icon-serItemIcon"></span>
                <div class="describe">家谱</div>
              </div>
            </div>
            </a>
        </div>
        <div class="qservice">
            <a href="<?php echo U('/news');?>">
            <div id="svebar_2">
              <div class="icon">
                <span class="serItemIcon icon-serItemIcon"></span>
                <div class="describe" style="color:#e10d12">消息</div>  
              </div>
            </div>
            </a>
        </div>

        <div class="qservice">
            <a href="<?php echo U('/user');?>">
            <div id="svebar_3">
              <div class="icon">
                <span class="serItemIcon icon-serItemIcon"></span>
                <div class="describe">我的</div>
              </div>
            </div>
            </a>
        </div> 
    </div>

<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
</body>
</html>