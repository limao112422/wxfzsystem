<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <?php echo C('cfg_sitetitle');?> </title>
    
    
	<link href="//at.alicdn.com/t/font_676503_hdo5gcp6thiu23xr.css" rel="stylesheet" type="text/css">
	
    <script type="text/javascript" src="/Public/main/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/main/js/global.js"></script>
    <script type="text/javascript" src="/Public/main/js/jquery.tab.js"></script>
    <script src="/Public/layer/layer.js"></script>
    
    <link href="/Public/main/css/public.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="dcWrap">

    <div id="dcHead">
    <div id="head">
        <div class="logo">
          <a href="<?php echo U(GROUP_NAME.'/Main_index');?>">
            <div style="width: 178px;height: 40px;line-height:40px;text-align:center;color:#FFFFFF;font-size:16px;font-weight:bold;">借贷超市V1.0</div>
          </a>
        </div>
        <div class="nav">
           <ul>
                <!-- <li class="M">
                    <a href="JavaScript:void(0);" class="topAdd">新建</a>
                    <div class="drop mTopad">
                        <a href="<?php echo U(GROUP_NAME.'/Article_add');?>">文章</a>
                        <a href="<?php echo U(GROUP_NAME.'/Article_addcat');?>">文章分类</a>
                        <!--<a href="<?php echo U(GROUP_NAME.'/link/add');?>">友情链接</a>--
                        <a href="<?php echo U(GROUP_NAME.'/Admin_add');?>">管理员</a>
                    </div>
                </li>-->
                <li><a href="<?php echo C('cfg_siteurl');?>" target="_blank">查看站点</a></li>
                <li><a href="#">清除缓存</a></li><!--<?php echo U(GROUP_NAME.'/Main_clearcache');?>-->
                
            </ul>

            <ul class="navRight">
              <li class="M noLeft">
                  <a href="JavaScript:void(0);">您好，<?php echo session('admin_user');?> </a>
                  <div class="drop mUser">
                      <a href="<?php echo U(GROUP_NAME.'/Admin_chagemypass');?>">修改密码</a>
                  </div>
              </li>
              <li class="noRight">
                  <a href="<?php echo U(GROUP_NAME.'/logout');?>">退出</a>
              </li>
          </ul>
        </div>
    </div>
</div>
    <!-- dcHead 结束 -->
    <div id="dcLeft">
	<div id="menu">
		<ul class="top">
            <li>
                <a href="<?php echo U(GROUP_NAME.'/Main_index');?>">
                    <i class="home"></i>
                    <em>管理首页</em>
                </a>
            </li>
        </ul>
        <ul>
          <!--  <li id="nav_System_index">
                <a href="<?php echo U(GROUP_NAME.'/System_index');?>">
                    <i class="system"></i>
                    <em>系统设置</em>
                </a>
          </li>-->
            <li id="nav_Admin_index">
                <a href="<?php echo U(GROUP_NAME.'/Admin_index');?>">
                    <i class="manager"></i>
                    <em>网站管理员</em>
                </a>
            </li>
            <li id="nav_Block_index">
            	<a href="<?php echo U(GROUP_NAME.'/Block_index');?>">
            		<i class="theme"></i>
            		<em>帮助中心</em>
            	</a>
            </li>
        </ul>
        <ul>
            <li id="nav_Article_catlist">
                <a href="<?php echo U(GROUP_NAME.'/text_index');?>">
                    <i class="articleCat"></i>
                    <em>技术社区</em>
                </a>
            </li><!--
            <li id="nav_Article_index">
                <a href="<?php echo U(GROUP_NAME.'/Article/index');?>">
                    <i class="article"></i>
                    <em>文章列表</em>
                </a>
            </li>-->
        </ul>
		<!--<ul><li id="nav_Acc_fen">
        		<a href="<?php echo U('Acc/fen');?>">
        			<i class="order"></i>
        			<em>帐号分类</em>
        		</a>
        	</li>
        	<li id="nav_Acc_index">
        		<a href="<?php echo U('Acc/index');?>">
        			<i class="plugin"></i>
        			<em>帐号栏目</em>
        		</a>
        	</li>
			<li id="nav_Acc_clist">
        		<a href="<?php echo U('Acc/clist');?>">
        			<i class="backup"></i>
        			<em>帐号列表</em>
        		</a>
        	</li>
        	<li id="nav_Acc_wclist">
        		<a href="<?php echo U('Acc/wclist');?>">
        			<i class="backup"></i>
        			<em>未审核帐号</em>
        		</a>
        	</li>
        </ul>-->
        <ul>
        	<li id="nav_User_index">
        		<a href="<?php echo U('User_index');?>">
        			<i class="user"></i>
        			<em>用户管理</em>
        		</a>
        	</li>
			
        </ul>
		<ul>
			<li id="nav_Order_index">
        		<a href="<?php echo U('card_index');?>">
        			<i class="product"></i>
        			<em>信用卡列表</em>
        		</a>
        	</li>
			<li id="nav_Order_yongjin">
        		<a href="<?php echo U('list_index');?>">
        			<i class="menuPage"></i>
        			<em>产品列表</em>
        		</a>
        	</li>
			<li id="nav_Order_zijin">
        		<a href="<?php echo U('bank_index');?>">
        			<i class="case"></i>
        			<em>银行列表</em>
        		</a>
        	</li>
		</ul>
<!--		<ul>
			<li id="nav_Pay_cz">
        		<a href="<?php echo U('Pay/cz');?>">
        			<i class="link"></i>
        			<em>充值记录</em>
        		</a>
        	</li>
			<li id="nav_User_tx">
        		<a href="<?php echo U('Pay/tx');?>">
        			<i class="guestbook"></i>
        			<em>提现记录</em>
        		</a>
        	</li>
		</ul>-->
		<ul>
			<li id="nav_Order_pin">
        		<a href="<?php echo U('Payorder_index');?>">
        			<i class="show"></i>
        			<em>支付记录</em>
        		</a>
        	</li>
		
			<li id="nav_Order_yongjin">
        		<a href="<?php echo U('yongjin');?>">
        			<i class="guestbook"></i>
        			<em>分成记录</em>
        		</a>
        	</li>
        	<li id="nav_Order_yongjin">
        		<a href="<?php echo U('jiesuan');?>">
        			<i class="link"></i>
        			<em>结算申请</em>
        		</a>
        	</li>
		</ul>
	</div>
</div>
<script>
    //设置cur效果
    var MODULE_NAME = "<?php echo MODULE_NAME;?>";
    var ACTION_NAME = "<?php echo ACTION_NAME;?>";
    if(MODULE_NAME != "Main"){
        $("#nav_"+MODULE_NAME+"_"+ACTION_NAME).addClass("cur");
    }
</script>


    <div id="dcMain"> <!-- 当前位置 -->
        <div id="urHere">
            <?php echo ($title); ?>
        </div>
        <div id="index" class="mainBox" style="padding-top:18px;height:auto!important;height:550px;min-height:550px;">


            <h3><a href="<?php echo U(GROUP_NAME.'/Admin/add');?>" class="actionBtn">添加管理员</a><?php echo ($title); ?></h3>
<style>
.seach_span{
    float: left;
    line-height: 30px;
    font-size: 16px;
}
</style>
<div class="filter">
    <form action="<?php echo U(GROUP_NAME.'/Admin/index');?>" method="post">
        <font class="seach_span">管理员名称:</font>
        <input name="username" type="text" class="inpMain" value="<?php echo ($seach_name); ?>" size="20" />
        <input name="submit" class="btnGray" type="submit" value="筛选" />
    </form>
</div>


<table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
    <tr>
        <th width="30" align="center">编号</th>
        <th align="left">管理员名称</th>
        <th align="center">添加时间</th>
        <th align="center">最后登录时间</th>
        <th align="center">状态</th>
        <th align="center">操作</th>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
            <td align="center"><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["username"]); ?></td>
            <td align="center"><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
            <td align="center"><?php echo (date("Y-m-d H:i:s",$vo["lastlogin"])); ?></td>
            <td align="center">
                <?php if($vo['status'] == 1): ?>正常
                    <?php else: ?>
                    禁止<?php endif; ?>
            </td>
            <td align="center">
                <a href="<?php echo U(GROUP_NAME.'/Admin/edit',array('editid' => $vo['id']));?>">编辑</a> |
                <a href="javascript:;" onclick="delAdmin('<?php echo ($vo["username"]); ?>','<?php echo U(GROUP_NAME.'/Admin/del',array('id' => $vo['id'] ));?>');">删除</a>
            </td>
        </tr><?php endforeach; endif; ?>
</table>
<div class="pager"><?php echo ($page); ?></div>
<script>
    function delAdmin(username,jumpurl){
        layer.confirm(
                '确定要删除管理员:'+username+'吗?',
                function (){
                    window.location.href = jumpurl;
                }
        );
    }
</script>


        </div>
    </div>
    <div class="clear"></div>
    	<div id="dcFooter">
		 <div id="footer">
		  <div class="line"></div>
			  <ul>
			   版权所有 © 2018 <a href="https://www.huzhan.com/ishop12846/" target="_blank">(c) Copyright 2018 ohyueo. All Rights Reserved. </a>，并保留所有权利。
			  </ul>
		 </div>
	</div>

    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>