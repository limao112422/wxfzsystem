<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
</head>
<body style="background: #fff">
    <div id="page" style="height:100%;">
        <header class="hui-header">
            <div id="hui-back"></div>
            <h1>帮助中心</h1>
            <div id="hui-header-menu"></div>
        </header>
        <div class="hui-media-list" style="padding-top:60px;">
            <ul>
                <li>
                    <a href="">
                        <div class="hui-media-list-img"><img src="../Public/img/medialist/1.jpg" /></div>
                        <div class="hui-media-content">
                            <h1>标题内容....</h1>
                            <p>笑对人生，能穿透迷雾；笑对人生</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="hui-media-list-img"><img src="../Public/img/medialist/2.jpg" /></div>
                        <div class="hui-media-content">
                            <h1>标题内容....</h1>
                            <p>能坚持到底；笑对人生</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="hui-media-list-img"><img src="../Public/img/medialist/3.jpg" /></div>
                        <div class="hui-media-content">
                            <h1>标题内容....</h1>
                            <p>能化解危机；笑对人生，能照亮黑暗。</p>
                        </div>
                    </a>
                </li>
            </ul>
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