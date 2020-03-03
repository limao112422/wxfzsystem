<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo ($title); ?> - <?php echo C('cfg_sitetitle');?> </title>
    
    
	<link href="//at.alicdn.com/t/font_676503_hdo5gcp6thiu23xr.css" rel="stylesheet" type="text/css">
	
    <script type="text/javascript" src="/Public/main/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/main/js/global.js"></script>
	<script type="text/javascript" src="/Public/main/js/kindeditor/kindeditor.js"></script>
    <script type="text/javascript" src="/Public/main/js/jquery.tab.js"></script>
    <script src="/Public/layer/layer.js"></script>
	<script src="/Public/layer/layer.js"></script>


    
    <link href="/Public/main/css/public.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="dcWrap">

    <div id="dcHead">
    <div id="head">
        <div class="logo">
          <a href="<?php echo U(GROUP_NAME.'/Main_index');?>">
            <div style="width: 178px;height: 40px;line-height:40px;text-align:center;color:#FFFFFF;font-size:16px;font-weight:bold;">借贷超市V1.5</div>
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
                <!--<li onclick='window.open("https://www.huzhan.com/code/goods254330.html");' style="color:red;cursor:pointer;">购买系统</li>-->
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


<script>
	
//查询是否阅读过
$.post(
		"<?php echo U(GROUP_NAME.'/yuedu');?>",
		{id:"2"},
		function (data,state){
			if(state != "success"){
				layer.msg("网络通讯失败!");
			}else if(data.status == 1){
				//不显示
				//$("#show").hide();
			}else{
				//显示
				$("#show").show();
				yuedududu();
			}
		}
	);	
	
	
function yuedududu(){
        layer.confirm(
                '本系统源码不得未经授权进行二次出售转让以及使用，使用本系统需要遵守法律法规，不得从事非法活动，不得利用应用及服务发表、传送、传播、储存危害国家安全、祖国统一、社会稳定的内容，或侮辱诽谤、色情、暴力、引起他人不安及任何违反国家法律法规政策的内容，违反上述条例带来的相关责任和赔偿由运营者单独承担，与系统开发者无关，并有权收回其授权权利，保留追偿权利！（尊重开发者劳动成果，有问题能解决有保障，请购买正版系统）',{btn: ['我完全同意以上协议'],closeBtn: 0,title: "系统使用协议（同意后 协议消失）"},
                function (){
					var tt="本系统源码不得未经授权进行二次出售转让以及使用，使用本系统需要遵守法律法规，不得从事非法活动，不得利用应用及服务发表、传送、传播、储存危害国家安全、祖国统一、社会稳定的内容，或侮辱诽谤、色情、暴力、引起他人不安及任何违反国家法律法规政策的内容，违反上述条例带来的相关责任和赔偿由运营者单独承担，与系统开发者无关，并有权收回其授权权利，保留追偿权利！（尊重开发者劳动成果，有问题能解决有保障，请购买正版系统）";
                    //存储到数据库内
					//查询是否阅读过
					$.post(
							"<?php echo U(GROUP_NAME.'/yuedulu');?>",
							{tt:tt},
							function (data,state){
								if(state != "success"){
									layer.msg("网络通讯失败!");
								}else if(data.status == 1){
									window.location.reload();
									//页面刷新
								}else if(data.status == 2){
										alert('登录状态失效，请重新登录');
											window.location.href="<?php echo U(GROUP_NAME.'/login');?>";
										 
										
									
									//页面刷新
								}else{
									layer.msg(data.msg);
								}
							}
						);
                }
        );
    }

function goumai(){
	layer.confirm(
                '本系统源码不得未经授权进行二次出售转让以及使用，使用本系统需要遵守法律法规，不得从事非法活动，不得利用应用及服务发表、传送、传播、储存危害国家安全、祖国统一、社会稳定的内容，或侮辱诽谤、色情、暴力、引起他人不安及任何违反国家法律法规政策的内容，违反上述条例带来的相关责任和赔偿由运营者单独承担，与系统开发者无关，并有权收回其授权权利，保留追偿权利！（尊重开发者劳动成果，有问题能解决有保障，请购买正版系统）',{btn: ['立即购买正版','我完全同意以上协议'],closeBtn: 1,title:'系统使用协议'},
                function (){
                    //存储到数据库内
					//查询是否阅读过
					window.open("https://www.huzhan.com/code/goods254330.html");
                },function (){
                    layer.closeAll();
                }
        );
}


</script>
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
            <li id="nav_System_index">
                <a href="<?php echo U(GROUP_NAME.'/System_index');?>">
                    <i class="system"></i>
                    <em>系统设置</em>
                </a>
          </li>
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
			<li id="nav_Img_index">
            	<a href="<?php echo U(GROUP_NAME.'/Img_index');?>">
            		<i class="article"></i>
            		<em>轮播图管理</em>
            	</a>
            </li>
        </ul>
        <ul>
            <li id="nav_Article_catlist">
                <a href="<?php echo U(GROUP_NAME.'/text_index');?>">
                    <i class="articleCat"></i>
                    <em>公告资讯</em>
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
			<!--<li id="nav_Order_zijin">
        		<a href="<?php echo U('bank_index');?>">
        			<i class="case"></i>
        			<em>银行列表</em>
        		</a>
        	</li>-->
		</ul>
		<ul>
			<li id="nav_Pay_cz">
        		<a href="<?php echo U('kashen');?>">
        			<i class="link"></i>
        			<em>信用卡申请</em>
        		</a>
        	</li>
			<li id="nav_User_tx">
        		<a href="<?php echo U('jieshen');?>">
        			<i class="guestbook"></i>
        			<em>借贷申请</em>
        		</a>
        	</li>
			<li id="nav_Order_yongjin">
        		<a href="<?php echo U('yongjin');?>">
        			<i class="order"></i>
        			<em>分成记录</em>
        		</a>
        	</li>
		</ul>
		<ul>
			<li id="nav_Order_pin">
        		<a href="<?php echo U('Payorder_index');?>">
        			<i class="show"></i>
        			<em>支付记录</em>
        		</a>
        	</li>
		
			
        	<li id="nav_Order_yongjin">
        		<a href="<?php echo U('jiesuan');?>">
        			<i class="link"></i>
        			<em>提现申请</em>
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


            <h3>


    <a href="<?php echo U(GROUP_NAME.'/card_add');?>" class="actionBtn add">


        添加信用卡


    </a>


    <?php echo ($title); ?>


</h3>
<div class="filter">
    <form action="<?php echo U(GROUP_NAME.'/card_index');?>" method="post">
        <input name="keyword" type="text" class="inpMain" placeholder="搜索：产品名称" value="<?php echo ($keyword); ?>" size="20" />
		/
		<input name="keyword4" type="text" style="width:100px;" class="inpMain" placeholder="搜索：开始时间" value="<?php echo ($keyword4); ?>" id="test1">
		/
		<input name="keyword5" type="text" style="width:100px;" class="inpMain" placeholder="搜索：结束时间" value="<?php echo ($keyword5); ?>" id="test2">
        <input name="submit" class="btnGray" type="submit" value="筛选" />
		<input name="submit" class="btnGray" type="submit" value="导出数据" />
    </form>
</div>


    <table width="100%" border="0" cellpadding="8"  cellspacing="0" class="tableBasic layui-table">


        <tr>


            <th width="30">ID</th>
             <th width="140" align="center">图片</th>
            <!--<th width="300" align="center">银行</th>-->


            <th width="100" align="center">银行卡名字</th>
			<th width="100" align="center">发放人数</th>
			<th width="100" align="center">额度范围</th>
			<th width="100" align="center">期限</th>
			<th width="100" align="center">利息范围</th>
			<th width="100" align="center">产品佣金</th>
			<th width="100" align="center">二级佣金</th>
			<th width="100" align="center">三级佣金</th>
			<th width="100" align="center">佣金结算方式</th>
			<th width="100" align="center">浏览量</th>
			<th width="100" align="center">审核时间</th>
			<th width="100" align="center">申请地址</th>
			<th width="100" align="center">添加时间</th>

           


            <th width="100" align="center">操作</th>


        </tr>


        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>


                <td align="center"><?php echo ($vo["id"]); ?></td>
                
				<td align="center"><img src="<?php echo ($vo["img"]); ?>" style="width: 100px;height:50px;"></td>
				<!--<td align="center"><?php echo ($vo["bank"]); ?></td>-->
                <td align="center"><?php echo ($vo["name"]); ?></td>

                <td align="center"><?php echo ($vo["member"]); ?></td>
                <td align="center"><?php echo ($vo["price"]); ?></td>
                <td align="center"><?php echo ($vo["day"]); ?></td>
                <td align="center"><?php echo ($vo["red"]); ?></td>
				<td align="center">￥<?php echo ($vo["pay"]); ?></td>
				<td align="center">￥<?php echo ($vo["eryong"]); ?></td>
				<td align="center">￥<?php echo ($vo["sanyong"]); ?></td>
				<td align="center"><?php echo ($vo["jiesuan"]); ?></td>
				<td align="center"><?php echo ($vo["pv"]); ?></td>
                <td align="center"><?php echo ($vo["sday"]); ?></td>
                <td align="center"><a href="<?php echo ($vo["link"]); ?>">申请地址</a></td>


                <td><?php echo (date("Y/m/d",$vo["time"])); ?></td>


                <td align="center">


                   <a href="<?php echo U(GROUP_NAME.'/card_edit',array('id'=>$vo['id']));?>">编辑</a> |


                    <a href="javascript:delCat('<?php echo ($vo["name"]); ?>','<?php echo U(GROUP_NAME.'/card_del',array('id'=>$vo['id']));?>');">删除</a>


                </td>


            </tr><?php endforeach; endif; ?>


    </table>
<div class="pager"><?php echo ($page); ?></div>
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
</script>

<script>


    function delCat(name,jumpurl){


        layer.confirm(


                '确定要删除自由块:['+name+']吗?',


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
			   版权所有 © 2018 <a href="http://www.911001.xyz/" target="_blank">(c) Copyright 2018 ohyueo. All Rights Reserved. </a>，并保留所有权利。
			  </ul>
		 </div>
	</div>

    <!-- dcFooter 结束 -->
    <div class="clear"></div>
</div>
</body>
</html>