<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>用户中心</title>
<link rel="stylesheet" type="text/css" href="/Public/css/hui.css" />
<link rel="stylesheet" type="text/css" href="/Public/css/index.css" />
<style type="text/css">
#ztree span{margin-left:10px}
.MzTreeview{padding:0 5px;}
.suradd{padding-left:10px;color:#999;}
</style>

<script src="/Public/img/tree/tree.js" type="text/javascript"></script>
</head>
<body style="background: #fff">
    <div id="page" style="height:100%;">
        <header class="hui-header">
            <div id="hui-back"></div>
            <h1>直系图</h1>
            <div id="hui-header-menu"></div>
        </header>
        <div class="hui-wrap" style="height:100%;padding-top: 60px;">
            <table cellpadding="0" cellspacing="0" width="100%" height="100%" class="this_tab">
                <tbody>
                    <tr>
                        <td align="left" valign="top">
                            <div id="ztree" style="margin-top: 5px;"></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<script language="JavaScript" type="text/javascript">
    function goUrl() {
        //alert()
    }
    function InitShowTreeInfo(tree) {

        tree.nodes['0_<?php echo ($f["id"]); ?>'] = 'text:<?php echo ($f["fname"]); ?>  [ 第<?php echo ($f["sort"]); ?>代 ] <a class="suradd" href="<?php echo U('/surname/homeedit',array('id'=>$f['id']));?>">+</a>;url:javascript:void(0);method:goUrl();icon:member;'
        <?php if(is_array($list)): foreach($list as $key=>$v): ?>tree.nodes['<?php echo ($v["books"]); ?>_<?php echo ($v["id"]); ?>'] = 'text:<?php echo ($v["fname"]); ?>  [ <?php if($v["type"] == 3): ?>妻子<?php else: ?>第<?php echo ($v["sort"]); ?>代<?php endif; ?> ] <a class="suradd" href="<?php echo U('/surname/homeedit',array('id'=>$v['id']));?>">+</a>;url:javascript:void(0);method:goUrl();icon:member';<?php endforeach; endif; ?>
    }
    var tree = new MzTreeView("tree");
    tree.icons["manager"] = "manager.gif";//管理员
    tree.icons["member"] = "member.png";//正式会员
    tree.icons["user"] = "user.gif";//未开通
    tree.icons["agent"] = "agent.gif";//经销商
    tree.setIconPath("/Public/img/tree/"); //可用相对路径
    InitShowTreeInfo(tree);
    tree.setTarget("_self");
    document.getElementById("ztree").innerHTML = tree.toString(); 
    obj.innerHTML = tree.toString();                 
</script>
<script type="text/javascript" src="/Public/js/hui.js" charset="UTF-8"></script>
<script type="text/javascript">
var meuns = ['返回','我的家谱'];
var cancel = '取消';
hui('#hui-header-menu').click(function(){
    hui.actionSheet(meuns, cancel, function(e){
        if(e.index==0){
            hui.open('<?php echo U('/surname/home',array('id'=>I('id')));?>');
        }else if(e.index==1){
            hui.open('<?php echo U('/surname');?>');
        }
    });
});
</script>
</body>
</html>