<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0027)http://ymzsjd.ymassist.com/ -->
<html lang="en" style="font-size: 50px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="initial-scale=1,user-scalable=no">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <title><?php echo C('cfg_sitetitle');?></title>
    <style>
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p,
        blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em,
        img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, dl, dt, dd, ol, nav ul, nav li,
        fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details,
        embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        body{
            background: url(/Public/asset/img/xj-bg.jpg) no-repeat 0px 0px;
            font-family: 'Open Sans', sans-serif;
            background-size:cover;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            min-height:1050px;
        }
        a {
            color: #333;
            text-decoration: none;
            cursor: pointer;
        }
        p, ul {
            margin: 0;
            padding: 0;
            font-family: Helvetica Neue,Helvetica,sans-serif;
            border: 0;
            outline: 0;
            font-size: 14px;
            -webkit-tap-highlight-color: transparent!important;
        }
        #app{
            height: 100%;
        }
        .wrapper{
            height: 100%;
        }
        .ym-root{
            height: 100%;
            border: 1px solid transparent;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .log-box {
            width: 1.74rem;
            height: 1.74rem;
            background-color: #fff;
            border-radius: 50%;
            margin: 1.22rem auto 0;
        }
        .log-box img {
            width: 1.74rem;
        }
        .wj-title{
            text-align: center;
            margin-top: .5rem;
            font-size: 36px;
            color: #06a1d9;
            font-weight: lighter;
            letter-spacing: .04rem;
        }
        .down-wrapper {
            margin-top: 1.5rem;
        }
        .wj-down{
            text-align: center;
        }
        .wj-down.down {
            margin-bottom: .5rem;
        }
        .down-wrapper .wj-down a {
            font-size: .3rem;
            background: -webkit-linear-gradient(left,#32caff,#85a3f4);
            background: linear-gradient(90deg,#32caff,#85a3f4);
            padding: .1rem .2rem;
            color: #fff;
            border-radius: 5px;
        }
        .entrance-box {
            margin-top: 1rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-around;
            justify-content: space-around;
        }
        .entrance-box .entrance-item, .wrapper .wj-root .entrance-box .entrance-item img {
            width: 3.2rem;
        }
        .entrance-box .entrance-item .item-box {
            width: 2.8rem;
            height: 2.5rem;
            border-radius: .12rem;
            background-color: #06a1d9;
            color: white;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-around;
            justify-content: space-around;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            box-shadow: rgba(68, 65, 109, 0.3) 3px 3px 20px;
            border-radius: 18px;
            margin-top: 28px;
        }
        .entrance-box .entrance-item .item-box p {
            text-align: center;
            font-weight: 700;
            font-size: 18px;
            font-family: "微软雅黑 Light";
        }
        .entrance-box .entrance-item .item-box.shop{
            background-color: #06a1d9;
        }
        .foot{
            height: 440px;
        }
    </style>
</head>
<body>
<div id="app">
    <div class="wrapper">
        <div class="ym-root">
            <div class="log-box">
                <img src="<?php echo C('cfg_vipimg');?>" style="border-radius: 50%;" alt="">
            </div>
            <p class="wj-title">
                <span style="text-shadow: rgba(107, 105, 134, 0.78) 3px 3px 20px;"><?php echo C('cfg_sitetitle');?></span>
            </p>
            <div class="entrance-box" style="margin: auto;width: 80%;">
                <div class="entrance-item">
                    <a href="<?php echo U('Index/index');?>">
                        <div class="item-box">
                            <p>我想赚钱</p>
                            <p>我要做任务</p>
                        </div>
                    </a>
                </div>
                <div class="entrance-item">
                    <a href="<?php echo U('Qudao/Main_index');?>">
                        <div class="item-box shop">
                            <p>我有任务</p>
                            <p>我要发布</p>
                        </div>
                    </a>
                </div>
            </div>
            <!--div class="entrance-box" style="margin: auto;width: 80%;">
                <div class="entrance-item">
                    <a href="http://note.youdao.com/noteshare?id=128c95973f961522723cad89c0aa079d">
                        <div class="item-box" style="height: 1.5rem;">
                            <p>DOWNLOAD</p>
                            <p>接单APP</p>
                        </div>
                    </a>
                </div>
                <div class="entrance-item">
                    <a href="https://note.youdao.com/ynoteshare1/index.html?id=fa12e3fc11f293e61e7fcc08068841fa&amp;type=note">
                        <div class="item-box shop" style="height: 1.5rem;">
                            <p>DOWNLOAD</p>
                            <p>下单APP</p>
                        </div>
                    </a>
                </div>
            </div-->
            <div class="foot">
            </div>
        </div>

    </div>
</div>

</body></html>