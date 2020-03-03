<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script src="/Public/img/tree/tree.js" type="text/javascript"></script>
</head>
<body>
	<div class="ncenter_box">
           
        <table cellpadding="0" cellspacing="0" width="100%" height="100%" class="this_tab">
            <tbody>
                <tr>
                    <td align="left" valign="top">
                        <div id="ztree" style="margin-top: 5px;"></div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="bottom"></div>
    </div>

<script language="JavaScript" type="text/javascript">
    function goUrl() {
        //alert()
    }
    function InitShowTreeInfo(tree) {

        tree.nodes['0_<?php echo ($f["id"]); ?>'] = 'text:<?php echo ($f["fname"]); ?> [ <?php echo ($f["rank"]); ?> 级 ];url:javascript:void(0);method:goUrl();icon:member;'
        <?php if(is_array($list)): foreach($list as $key=>$v): ?>tree.nodes['<?php echo ($v["books"]); ?>_<?php echo ($v["id"]); ?>'] = 'text:<?php echo ($v["fname"]); ?>[ <?php echo ($v["rank"]); ?>级 ];url:javascript:void(0);method:goUrl();icon:member';<?php endforeach; endif; ?>
    }
    var tree = new MzTreeView("tree");
    tree.icons["manager"] = "manager.gif";//管理员
    tree.icons["member"] = "member.gif";//正式会员
    tree.icons["user"] = "user.gif";//未开通
    tree.icons["agent"] = "agent.gif";//经销商
    tree.setIconPath("/Public/img/tree/"); //可用相对路径
    InitShowTreeInfo(tree);
    tree.setTarget("_self");
    document.getElementById("ztree").innerHTML = tree.toString(); 
    obj.innerHTML = tree.toString();                 
</script>
</body>
</html>