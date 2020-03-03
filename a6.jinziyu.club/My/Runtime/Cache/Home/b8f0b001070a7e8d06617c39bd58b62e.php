<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style>
select option{padding: 2px}
.inp{
	height: 22px;
    line-height: 22px;
    border: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0;
    border: 0;
    background: #FFF;
    width: 100%;
    display: block;
    padding: 0px;}
    </style>
<script type="text/javascript">
	function test(Names){
		var Name
		for (var i=1;i<4;i++){	//  更改数字4可以改变选择的内容数量，在下拉总数值的基础上+1.比如：下拉菜单有5个值，则4变成6
			var tempname="mune_x"+i                                                                            
			var NewsHot="x"+i	//  “X”是ID名称，比如：ID命名为“case1”，这里的“X”即为“case”
			if (Names==tempname){
				Nnews=document.getElementById(NewsHot)
				Nnews.style.display='';
			}else{
				Nnews=document.getElementById(NewsHot)
				Nnews.style.display='none';   
			}
		}
	}
	</script>
</head>
<body>
	<div id="page">
		<header class="hui-header">
		    <div id="hui-back"></div>
		    <h1><?php if($_GET['t'] == 2): ?>添加父亲<?php elseif($_GET['t'] == 3): ?>添加配偶<?php else: ?>添加孩子<?php endif; ?></h1>
		    <div id="hui-header-menu"></div>
		</header>
		<div class="hui-wrap">
			<form action="" method="POST">
		    <div class="hui-list" style="background:#FFFFFF; margin-top:10px;">
		    	<a href="#" style="height:auto; height:80px; padding-bottom:8px;">
		    		<div class="hui-list-icons" style="width:110px; height:80px;">
		    			<img src="/Public/image/u.png" style="width:66px; margin:0px; border-radius:50%;">
		    		</div>
		    		<div class="hui-list-text" style="height:79px; line-height:79px;">
		    			<div class="hui-list-text-content">
		    				基本资料
		    			</div>
		    			<div class="hui-list-info">
		    				<span class="hui-icons hui-icons-right"></span>
		    			</div>
		    		</div>
		    	</a>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%" class="hui-form-items-title"><input type="text" name="surname" class="inp" maxlength="2" <?php if($_GET['t'] != 3): ?>value="<?php echo ($f["surname"]); ?>"<?php else: ?>placeholder="姓"<?php endif; ?> /></div>
		            <input style="width:30%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="fname" class="inp" placeholder="名" autofocus="autofocus" maxlength="15" />
		        </div>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%" class="hui-form-items-title" id="btn1">常/曾用名 <img src="/Public/image/help_icon.png" width="13" /></div>
		            <input style="width:15%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="uname" class="inp" <?php if($_GET['t'] != 3): ?>value="<?php echo ($f["surname"]); ?>"<?php else: ?>placeholder="姓"<?php endif; ?> maxlength="2"/>
		            <input style="width:15%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="ufname" class="inp" placeholder="名" maxlength="15" />
		        </div>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%" class="hui-form-items-title" id="btn2">表字 <img src="/Public/image/help_icon.png" width="13" /></div>
		            <input style="width:30%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="aname" class="inp" placeholder="表字" maxlength="2" />
		        </div>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%" class="hui-form-items-title" id="btn7">排行 <img src="/Public/image/help_icon.png" width="13" /></div>
		            <input style="width:30%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="rank" class="inp" id="btn3" placeholder="选择" />
		        </div>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%" class="hui-form-items-title">性别</div>
		            <input style="width:30%;padding-left:5%;border-left:1px solid #F3F4F5" type="text" name="sex" class="inp" id="btn4" placeholder="选择" <?php if($_GET['t'] == 3): ?>value="女"<?php endif; ?>/>
		        </div>

		        <div class="hui-form-items">
		        	<div style="width:110px"></div>
		        	<div style="width:25%;" class="hui-form-items-title">是否健在</div>
		        	<select name="is" style="width:30%;padding-left:5%;border-left:1px solid #F3F4F5" class="inp" onChange="javascript:test('mune_x'+this.value)">
		        		<option value="1">是</option>
		        		<option value="2">否</option>
		        	</select>
		        </div>
		    </div>
		    <div style="color:#999;font-size: 12px;padding:5px 10px">个人信息</div>
		    <div class="hui-list" style="background:#FFFFFF" id="x1">
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">绑定ID</div>
		            <input type="text" name="member" class="hui-input" placeholder="请输入会员ID，可不填" />
		        </div>

		        <?php if($_GET['t'] == 4): ?><div class="hui-form-items">
			        	<div class="hui-form-items-title">父亲</div>
			            <input type="text" class="hui-input" value="<?php echo ($f["surname"]); echo ($f["fname"]); ?>" />
			        </div>

			        <div class="hui-form-items">
			        	<div class="hui-form-items-title">母亲</div>
			        	<select name="bookz" class="inp">
			        		<?php if(is_array($f["sp"])): foreach($f["sp"] as $key=>$v): ?><option value="0">选择</option>
			        			<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["surname"]); echo ($v["fname"]); ?></option><?php endforeach; endif; ?>
			        	</select>
			        </div><?php endif; ?>


		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生日期</div>
		            <input type="text" name="birthday" class="hui-input" placeholder="农历 8位数日期" maxlength="8" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生时辰</div>
		            <input type="text" name="bhour" class="hui-input" id="btn6" placeholder="选择" maxlength="2" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生地址</div>
		            <input type="text" name="baddress" class="hui-input" placeholder="输入出生地址" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">现居地址</div>
		            <input type="text" name="address" class="hui-input" placeholder="输入现居地址" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">联系电话</div>
		            <input type="text" name="mobile" class="hui-input" placeholder="电话号码" maxlength="11" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">微信</div>
		            <input type="text" name="weixin" class="hui-input" placeholder="微信" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">QQ</div>
		            <input type="text" name="qq" class="hui-input" placeholder="QQ号码" />
		        </div>
		    </div>

		    <div class="hui-list" style="background:#FFFFFF;display:none" id="x2">
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">绑定ID</div>
		            <input type="text" name="surmember" class="hui-input" placeholder="请输入纪念馆ID，可不填" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生日期</div>
		            <input type="text" name="birthdays" class="hui-input" placeholder="农历 8位数日期，必填" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生时辰</div>
		            <input type="text" name="bhours" class="hui-input" id="btn6" placeholder="选择" maxlength="2"/>
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">出生地址</div>
		            <input type="text" name="baddresss" class="hui-input" placeholder="输入出生地址" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">逝世日期</div>
		            <input type="text" name="deathdate" class="hui-input" placeholder="农历 8位数日期，必填" maxlength="8" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">逝世时辰</div>
		            <input type="text" name="dhour" class="hui-input" id="btn5" placeholder="选择" maxlength="2" />
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">安厝地</div>
		            <input type="text" name="daddress" class="hui-input" placeholder="请输入安厝地" />
		        </div>
		    </div>

		    <div style="color:#999;font-size: 12px;padding:5px 10px">打印简介（限1000字内）</div>
		    <div class="hui-list" style="background:#FFFFFF;">
		        <div class="hui-form-items">
		            <textarea placeholder="用于查阅世系图或导出制作实体家谱时显示的成员资料（不填则根据成员其他资料显示内容）" name="print" style="width:100%;border: 0;font-size: 13px" rows="5"></textarea>
		        </div>
		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">收养</div>
		        	<select name="mtype" class="hui-input">
		        		<option value="0">否</option>
		        		<option value="1">是</option>
		        	</select>
		        </div>

		        <div class="hui-form-items">
		        	<div class="hui-form-items-title">过继人</div>
		            <input type="text" name="mmember" class="hui-input" placeholder="无，可不填" />
		        </div>
		    </div>
		    <div style="color:#999;font-size: 12px;padding:5px 10px">个人简介（用于详细资料显示）</div>
		    <div class="hui-list" style="background:#FFFFFF;">
		    	<div class="hui-form-items">
		            <textarea placeholder="请输入个人简介" name="description" style="width:100%;border: 0;font-size: 13px" rows="5"></textarea>
		        </div>
		    </div>
		    <div class="hui-list" style="background:#FFFFFF;border: 1px solid #fff;">
		    	<div style="margin:50px 0 30px 0;padding:10px;">
			        <input type="submit" class="hui-button hui-button-large hui-primary" value="保 存" />
			    </div>
		    </div>
		    <div style="height:60px"></div>
			</form>
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
	        <a href="">
	        <div id="svebar_2">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe">消息</div>  
	          </div>
	        </div>
	        </a>
	    </div>

	    <div class="qservice">
	        <a href="<?php echo U('/user');?>">
	        <div id="svebar_3">
	          <div class="icon">
	            <span class="serItemIcon icon-serItemIcon"></span>
	            <div class="describe" style="color:#e10d12">我的</div>
	          </div>
	        </div>
	        </a>
	    </div> 
	</div>


<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript" src="/Public/js/hui-picker.js" charset="utf-8"></script>
<script type="text/javascript" src="/Public/js/hui-popover-msg.js" charset="utf-8"></script>
<script type="text/javascript">
	hui('#btn1').popoverMsg('left', 'down', '<div style="text-align:center;">曾经用过的名字，并被大家所熟知。</div>');
	hui('#btn2').popoverMsg('left', 'down', '<div style="text-align:center;">成年后的称呼。</div>');
	hui('#btn7').popoverMsg('left', 'down', '<div style="text-align:center;">我排行老大 就选1</div>');
	hui('#btn8').popoverMsg('left', 'down', '<div style="text-align:center;">该成员失去考证或家族旺丁</div>');

	var picker3 = new huiPicker('#btn3', function(){
	    var val = picker3.getVal(0);
	    var txt = picker3.getText(0);
	    hui('#btn3').val(val);
	});
	picker3.bindData(0, [{value:1, text:'1'},{value:2, text:'2'},{value:3, text:'3'},{value:4, text:'4'},{value:5, text:'5'},{value:6, text:'6'},{value:7, text:'7'},{value:8, text:'8'},{value:9, text:'9'},{value:10, text:'10'},{value:11, text:'11'},{value:12, text:'12'},{value:13, text:'13'},{value:14, text:'14'},{value:15, text:'15'},{value:16, text:'16'},{value:17, text:'17'},{value:18, text:'18'},{value:19, text:'19'},{value:20, text:'20'}]);
	var picker4 = new huiPicker('#btn4', function(){
	    var val = picker4.getVal(0);
	    var txt = picker4.getText(0);
	    hui('#btn4').val(txt);
	});
	picker4.bindData(0, [{value:0, text:'男'},{value:1, text:'女'}]);

	var picker5 = new huiPicker('#btn5', function(){
	    var val = picker5.getVal(0);
	    var txt = picker5.getText(0);
	    hui('#btn5').val(txt);
	});
	picker5.bindData(0, [{value:1, text:'子时'},{value:2, text:'丑时'},{value:3, text:'寅时'},{value:4, text:'卯时'},{value:5, text:'辰时'},{value:6, text:'巳时'},{value:7, text:'午时'},{value:8, text:'未时'},{value:9, text:'申时'},{value:10, text:'酉时'},{value:11, text:'戌时'},{value:12, text:'亥时'}]);

	var picker6 = new huiPicker('#btn6', function(){
	    var val = picker6.getVal(0);
	    var txt = picker6.getText(0);
	    hui('#btn6').val(txt);
	});
	picker6.bindData(0, [{value:1, text:'子时'},{value:2, text:'丑时'},{value:3, text:'寅时'},{value:4, text:'卯时'},{value:5, text:'辰时'},{value:6, text:'巳时'},{value:7, text:'午时'},{value:8, text:'未时'},{value:9, text:'申时'},{value:10, text:'酉时'},{value:11, text:'戌时'},{value:12, text:'亥时'}]);


	var meuns = ['返回家谱','编辑信息', '添加父亲', '添加配偶', '添加孩子', '删除成员'];
	var cancel = '取消';
	hui('#hui-header-menu').click(function(){
	    hui.actionSheet(meuns, cancel, function(e){
	        if(e.index==0){
	        	hui.open('<?php echo U('/surname');?>');
	    	}else if(e.index==1){
	        	hui.open('<?php echo U('/surname/homeedit',array('id'=>I('id')));?>');
	        }else if(e.index==2){
	        	hui.open('<?php echo U('/surname/homeadd',array('id'=>I('id'),'t'=>2));?>');
	        }else if(e.index==3){
	        	hui.open('<?php echo U('/surname/homeadd',array('id'=>I('id'),'t'=>3));?>');
	        }else if(e.index==4){
	        	hui.open('<?php echo U('/surname/homeadd',array('id'=>I('id'),'t'=>4));?>');
	        }else if(e.index==5){
	        	hui.open('<?php echo U('/surname/homedel',array('id'=>I('id')));?>');
	        }
	    });
	});
</script>
</body>
</html>