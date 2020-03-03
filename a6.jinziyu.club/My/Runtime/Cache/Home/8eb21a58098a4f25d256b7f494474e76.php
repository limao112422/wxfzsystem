<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>jQuery树插件演示族谱Family tree和日程安排</title>
        <link rel="stylesheet" type="text/css" href="http://yanshi.sucaihuo.com/jquery/4/493/demo/css/bootstrap.min.css" />
<style type="text/css">
    
.tree {
    margin: 0 auto;
    min-width: 640px;
    min-height:20px;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow:inset 0 1px 1px rgba(0, 0, 0, 0.05)
}
.tree li {
    list-style-type:none;
    margin:0;
    padding:10px 5px 0 5px;
    position:relative
}
.tree li::before, .tree li::after {
    content:'';
    left:-20px;
    position:absolute;
    right:auto
}
.tree li::before {
    border-left:1px solid #999;
    bottom:50px;
    height:100%;
    top:0;
    width:1px
}
.tree li::after {
    border-top:1px solid #999;
    height:20px;
    top:25px;
    width:25px
}
.tree li span {
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border:1px solid #999;
    border-radius:5px;
    display:inline-block;
    padding:3px 8px;
    text-decoration:none
}
.tree li.parent_li>span {
    cursor:pointer
}
.tree>ul>li::before, .tree>ul>li::after {
    border:0
}
.tree li:last-child::before {
    height:30px
}
.tree li.parent_li>span:hover, .tree li.parent_li>span:hover+ul li span {
    background:#eee;
    border:1px solid #94a0b4;
    color:#000
}

ul li ul li ul li ul li ul li{display: none;}
</style>
        <script type="text/javascript" src="http://yanshi.sucaihuo.com/jquery/4/493/demo/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
                $('.tree li.parent_li > span').on('click', function(e) {
                    var children = $(this).parent('li.parent_li').find(' > ul > li');
                    if (children.is(":visible")) {
                        children.hide('fast');
                        $(this).attr('title', 'Expand this branch').find(' > i').addClass('icon-plus-sign').removeClass('icon-minus-sign');
                    } else {
                        children.show('fast');
                        $(this).attr('title', 'Collapse this branch').find(' > i').addClass('icon-minus-sign').removeClass('icon-plus-sign');
                    }
                    e.stopPropagation();
                });
            });
        </script>

    </head>
    <body>

        <div class="tree">
            <ul>
                <li>
                    <span><i class="icon-plus-sign"></i> Parent</span> <a href="http://www.sucaihuo.com/js">+</a>
                    <ul>
                        <li>
                            <span><i class="icon-minus-sign"></i> Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                            <ul>
                                <li>
                                    <span><i class="icon-leaf"></i> Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span><i class="icon-minus-sign"></i> Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                            <ul>
                                <li>
                                    <span><i class="icon-leaf"></i> Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                </li>
                                <li>
                                    <span><i class="icon-minus-sign"></i> Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                    <ul>
                                        <li>
                                            <span><i class="icon-plus-sign"></i> Great Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                            <ul>
                                                <li>
                                                    <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                                </li>
                                                <li>
                                                    <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                        </li>
                                        <li>
                                            <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <span><i class="icon-leaf"></i> Grand Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li>
                    <span><i class="icon-plus-sign"></i> Parent2</span> <a href="http://www.sucaihuo.com/js">+</a>
                    <ul>
                        <li>
                            <span><i class="icon-leaf"></i> Child</span> <a href="http://www.sucaihuo.com/js">+</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        

    </body>
</html>