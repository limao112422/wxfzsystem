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


    <a href="<?php echo U(GROUP_NAME.'/card_index');?>" class="actionBtn">


        信用卡列表


    </a>


    <?php echo ($title); ?>


</h3>
<link href="/Public/layui/css/layui.css" rel="stylesheet" type="text/css">
    <script src="/Public/layui/layui.js"></script>

<form action="<?php echo U(GROUP_NAME.'/card_edit',array('id'=>$aid));?>" method="post">


    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic layui-table">


       <!-- <tr>


            <td width="90" align="right">银行</td>


            <td>

                 <select name="bank">
                    <?php if(is_array($bank)): $i = 0; $__LIST__ = $bank;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" ><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>

            </td>


        </tr>-->
        <tr>

            <td width="90" align="right">银行卡名字</td>

            <td>
				 <input type="text" name="name" value="<?php echo ($info["name"]); ?>" size="50" class="inpMain" />
               <!-- <select name="name">
                    <?php if(is_array($banktype)): $i = 0; $__LIST__ = $banktype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vox): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vox["id"]); ?>" ><?php echo ($vox["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>-->

            </td>

        </tr>

        <tr>


            <td align="right">缩略图2:1</td>


            <td>


                <input type="text" name="img" id="thumbnail" value="<?php echo ($info["img"]); ?>" size="30" class="inpMain" />


                <button id="Upload_img" class="btn" type="button">上传</button>


                <div style="display: none;">


                    <input id="imgFile" type="file" name="imgFile" style="display: none;">


                </div>


                <div id="res_show_img" style="display: none;"></div>


            </td>


        </tr>
<tr>


            <td align="right">推广图640*960</td>


            <td>


                <input type="text" name="timg" id="thumbnail2" value="<?php echo ($info["timg"]); ?>" size="30" class="inpMain" />


                <button id="Upload_img2" class="btn" type="button">上传</button>


                <div style="display: none;">


                    <input id="imgFile2" type="file" name="imgFile2" style="display: none;">


                </div>


                <div id="res_show_img2" style="display: none;"></div>


            </td>


        </tr>
		<tr>

            <td align="right">发放人数</td>

            <td>

                <input type="text" name="member" value="<?php echo ($info["member"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
        
        <tr>

            <td align="right">额度范围</td>

            <td>

                <input type="text" name="price" value="<?php echo ($info["price"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
        <tr>

            <td align="right">期限</td>

            <td>

                <input type="text" name="day" value="<?php echo ($info["day"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>


        
        <tr>

            <td align="right">利息范围</td>

            <td>

                <input type="text" name="red" value="<?php echo ($info["red"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
		<tr>

            <td align="right">佣金</td>

            <td>

                <input type="text" name="pay" value="<?php echo ($info["pay"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
		<tr>

            <td align="right">二级佣金</td>

            <td>

                <input type="text" name="eryong" value="<?php echo ($info["eryong"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
		<tr>

            <td align="right">三级佣金</td>

            <td>

                <input type="text" name="sanyong" value="<?php echo ($info["sanyong"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
		<tr>

            <td align="right">佣金结算方式</td>

            <td>

                 <select name="jiesuan">
                    <option value="日结"  <?php if($info['jiesuan']=='日结'){echo "selected";} ?>>日结</option>
					<option value="周结"  <?php if($info['jiesuan']=='周结'){echo "selected";} ?>>周结</option>
					<option value="月结"  <?php if($info['jiesuan']=='月结'){echo "selected";} ?>>月结</option>
                </select>

            </td>

        </tr>

        <tr>


            <td align="right">审核时间</td>


            <td>


                <input type="text" name="sday" value="<?php echo ($info["sday"]); ?>" size="50" class="inpMain" />


            </td>


        </tr>
		<tr>

            <td align="right">申请地址</td>

            <td>

                <input type="text" name="link" value="<?php echo ($info["link"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>
        <tr>

            <td align="right">产品描述</td>

            <td>
				<textarea name="d" cols="60" rows="4" class="textArea"><?php echo ($info["d"]); ?></textarea>
                

            </td>

        </tr>
		<tr>

            <td align="right">排序</td>

            <td>

                <input type="text" name="id" value="<?php echo ($info["id"]); ?>" size="50" class="inpMain" />

            </td>

        </tr>

        <tr>


            <td></td>


            <td>


                <input name="submit" class="btn" type="submit" value="提交" />


            </td>


        </tr>


    </table>


</form>




<script>


    //上传缩略图


    $(function (){


        //如果有图片就显示


        if($("#thumbnail").val() != '' && $("#thumbnail").val() != null){


            $("#res_show_img").show();


            $("#res_show_img").html('<img src="'+$("#thumbnail").val()+'" width="150px">');


        }





        $("#Upload_img").click(function (){


            $("#show_Img").html('');


            $("#show_Img").css('display','none');


            $("#imgFile").click();


        });


        $("#imgFile").change(function(){


            $("#Upload_img").html('上传中...');


            var tmp_path = $("#imgFile").val();


            if(tmp_path != '' && tmp_path != null){


                var pic = $('#imgFile')[0].files[0];


                var fd = new FormData();


                fd.append('imgFile', pic);


                $.ajax({


                    url:"/Public/main/js/kindeditor/php/upload_json.php",


                    type:"post",


                    dataType:'json',


                    data: fd,


                    cache: false,


                    contentType: false,


                    processData: false,


                    success:function(data){


                        if(data && data.error == '0'){


                            $("#res_show_img").show();


                            var imgurl = data.url;


                            $("#res_show_img").html('<img src="'+imgurl+'" width="150px">');


                            $("#thumbnail").val(imgurl);


                            layer.msg('上传成功');


                        }else{


                            layer.msg('上传出错了...');


                        }


                        $("#Upload_img").html('重新上传');


                    },


                    error:function (){


                        $("#Upload_img").html('重新上传');


                    }


                });


            }


        });


    });


</script>


<script>


    //上传缩略图


    $(function (){


        //如果有图片就显示


        if($("#thumbnail2").val() != '' && $("#thumbnail2").val() != null){


            $("#res_show_img2").show();


            $("#res_show_img2").html('<img src="'+$("#thumbnail2").val()+'" width="150px">');


        }





        $("#Upload_img2").click(function (){


            $("#show_Img2").html('');


            $("#show_Img2").css('display','none');


            $("#imgFile2").click();


        });


        $("#imgFile2").change(function(){


            $("#Upload_img2").html('上传中...');


            var tmp_path = $("#imgFile2").val();


            if(tmp_path != '' && tmp_path != null){


                var pic = $('#imgFile2')[0].files[0];


                var fd = new FormData();


                fd.append('imgFile2', pic);


                $.ajax({


                    url:"/Public/main/js/kindeditor/php/upload_json2.php",


                    type:"post",


                    dataType:'json',


                    data: fd,


                    cache: false,


                    contentType: false,


                    processData: false,


                    success:function(data){


                        if(data && data.error == '0'){


                            $("#res_show_img2").show();


                            var imgurl = data.url;


                            $("#res_show_img2").html('<img src="'+imgurl+'" width="150px">');


                            $("#thumbnail2").val(imgurl);


                            layer.msg('上传成功');


                        }else{


                            layer.msg('上传出错了...');


                        }


                        $("#Upload_img2").html('重新上传');


                    },


                    error:function (){


                        $("#Upload_img2").html('重新上传');


                    }


                });


            }


        });


    });


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