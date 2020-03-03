////jquery相关公共事件
var myUrl='http://ymka.ymassist.com/assist';
// var myUrl='http://ymka.etmad.cn/assist';
// var myUrl='http://39.108.81.187/assist';//测试
// var myUrl='http://localhost:8081';//测试
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?f5b6e16a267eb9699bf471d6fa374663";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
//var myUrl='http://www.songguopay.com:8080/test';
//加载中
function load(msg){
	var str = "<div id='loadingMask' style='background: rgba(0, 0, 0, 0.7);text-align: center;border-radius: 0.25rem;color: #ffffff;position: fixed;z-index: 3;top: 45%;left: 50%;width: 7.5em;min-height: 6em;margin-left: -3.75em;margin-top: -4rem;display: block;'>" +
		"<div class='aui-toast-loading'></div><p style='padding-bottom: 10px!important;color: white!important;'>" + msg + "</p></div>"
	if($("body #loadingMask")){
		$("body #loadingMask").remove();
	}  
	$("body").append(str);
}
//隐藏加载中
function loadHide(){
	$("body #loadingMask").remove();
}
//跳转url
function OpenUrl(Url) {
    window.location.href = Url;
}
//获取url参数
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
    var r = window.location.search.substr(1).match(reg);  //匹配目标参数
    if (r != null) return unescape(r[2]);
    return null; //返回参数值
}
//function getQueryString(name) {    //中文的参数用这个取
//  var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");   
//  var r = window.location.search.substr(1).match(reg);   
//}
function getQueryString(key){
var reg = new RegExp("(^|&)"+key+"=([^&]*)(&|$)");
    var result = window.location.search.substr(1).match(reg);
    return result?decodeURIComponent(result[2]):null;
  }
//提示框弹框
function Toast(msg, duration) {
    duration = isNaN(duration) ? 3000 : duration;
    var m = document.createElement('div');
    m.id='ToastID';
    m.innerHTML = msg;
    m.style.cssText = "z-index: 99999999999999!important; width:80%; min-width:150px; background:#000; opacity:0.6; height:68px; color:#fff; line-height:34px; text-align:center; border-radius:5px; position:fixed; top:60%; left:10%; z-index:999999; font-weight:600;font-size: 12px;";
   	if($("body #ToastID")){$("body #ToastID").remove();}
   	document.body.appendChild(m);
    setTimeout(function () {
        var d = 0.5;
        m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';
        m.style.opacity = '0';
        setTimeout(function () { $("body #ToastID").remove();}, d * 1500);
    }, duration);
}
//点击div能发生事件，但点击div的子元素不会发生此事件
function clickMask(obj, childBoxID) {
    obj.bind('click', function (e) {
        var e = e || window.event; //浏览器兼容性 
        var elem = e.target || e.srcElement;
        while (elem) {//循环判断至根节点，防止点击的是子元素
            if (elem.id && elem.id == childBoxID) {
                return;
            }
            elem = elem.parentNode;
        }
        obj.css("display", "none"); //点击的不是div或其子元素 
    });
}


//正则表达式验证
var RegExpInt = /^[0-9]*$/;//整数验证：匹配0-9的数字
var RegExpPassWord = /^(\w){6,18}$/;//密码验证：长度在6~18之间的密码,只能包含字母、数字和下划线，
var RegExpPhone = /^1[2|3|4|5|6|7|8|9]\d{9}$/;//手机号码验证：表示以1开头，第二位可能是3/4/5/7/8等的任意一个，在加上后面的\d表示数字[0-9]的9位，总共加起来11位结束。
var RegExpEmail=/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/;
var RegExpPrice = /(^[1-9]\d*(\.\d{1,2})?$)|(^[0]{1}(\.\d{1,2})?$)/;//价格验证：最多2位小数，整数部分和小数部分都要为整数不能有其他的字母或字符
var CheckZipCode = /[1-9]\d{5}$/;//邮编验证
var RegExpIdCard = /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/;//身份证号码验证：15到18位验证,备用1：/^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/
// 备用2：/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/
var RegExpPoster=/^[a-zA-Z0-9 ]{3,12}$/;//邮政编码
var RegExpRealName = /^[\u4e00-\u9fa5]{2,12}$/;//真实姓名验证：匹配2到12个汉字
var RegExpBankCard = /^\d{15}$|^\d{16}$|^\d{17}$|^\d{18}$|^\d{19}$/; //银行卡号码验证
var RegExpPwd=/^(\w){6,20}$/;//校验密码：只能输入6-20个字母、数字、下划线

//表单验证函数
function checkRegExp(RegExp, str) {//验证是否满足正则表达式 使用方法 checkRegExp(RegExpPhone,'13110874544') 
    return RegExp.test(str);
}
function checkNull(str) {//验证是否为空
    if (str == '') return true;
}
function checkUndefined(str) {//验证是否未定义
    if (str == undefined) return true;
}

function IsPwd(str){ //校验密码：只能输入6-20个字母、数字、下划线
	var patrn=/^(\w){6,20}$/;
	if (!patrn.exec(str)) return false
	return true;
}

//图片转Base64
function getBase64Image(img) {
    var canvas = document.createElement("canvas");
    var width = img.width;
    var height = img.height;
    var width1 = cusConfig.UpLoadImgWidth ? cusConfig.UpLoadImgWidth : 640;
    var height1 = height / width * width1;
    if (width < width1) {
        width1 = width;
        height1 = height;
    }
    canvas.width = width1;
    canvas.height = height1;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, width1, height1);
    var ext = img.src.substring(img.src.lastIndexOf(".") + 1).toLowerCase();
    var dataURL = canvas.toDataURL("image/" + ext);
    return dataURL;
}

//只输入数字   <input placeholder="请输入账号" id="QQid" maxlength="12" style="ime-mode:disabled;" onpaste="return false;"  onkeypress="keyPress()" />
function keyPress() {
    var keyCode = event.keyCode;
    if ((keyCode >= 48 && keyCode <= 57)) {
        event.returnValue = true;
    } else {
        event.returnValue = false;
    }
}

//去掉所有空格
function trim(str) {  //trim("  abc ") // =abc
  return str.replace(/(^\s+)|(\s+$)/g, "");
}

//input 相关事件
//只能输入正整数<input onkeyup="value=value.replace(/[^\d]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
//只能输入数字和英文 <input onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
//只能输入汉字    <input onkeyup="value=value.replace(/[^\u4E00-\u9FA5]/g,'')" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\u4E00-\u9FA5]/g,''))" >




//app
function closeWin(){
    api.closeWin({});
}

function openMain(WinName,frameName){
	var delay = 0;
	if(api.systemType != 'ios'){
	    delay = 300;
	}
	api.openWin({
	    name: ''+WinName+'',
	    url: ''+WinName+'.html',
	        bounces: false,
	        delay:delay,
	    });
	}


function openWin(frameName,title,bounceVal){
	var delay = 0;
	if(api.systemType != 'ios'){
	    delay = 300;
	}
	api.openWin({
	    name: ''+frameName+'_win',
	    url: 'head_win.html',
        bounces: false,
        delay:delay,
        pageParam:{
        	frameName:frameName,
            title:title,    //取title的值api.pageParam.title
            bounceVal:bounceVal,
        }
    });
}

	function fixStatusBar(el,color){
        var strDM = api.systemType;
        if (strDM == 'ios') {
            var strSV = api.systemVersion;
            var numSV = parseInt(strSV,10);
            var fullScreen = api.fullScreen;
            var iOS7StatusBarAppearance = api.iOS7StatusBarAppearance;
            if (numSV >= 7 && !fullScreen && iOS7StatusBarAppearance) {
             //   el.style.paddingTop = '20px';
             el.css('padding-top','20px');
             el.css('background',color);
            }
        }else if(strDM == 'android'){
            var ver = api.systemVersion;
            ver = parseFloat(ver);
            if(ver >= 4.4){
            //    el.style.paddingTop = '25px';
             el.css('padding-top','25px');
              el.css('background',color);
            }
        }
    }
	
function fixIos7Bar_API(el){
    if(!$api.isElement(el)){
        console.warn('$api.fixIos7Bar Function need el param, el param must be DOM Element');
        return;
    }
    var strDM = $api.getStorage('SYSTEMTYPE');
    if (strDM == 'ios') {
        var strSV = $api.getStorage('SYSTEMVERSION');
        var numSV = parseInt(strSV,10);
        var fullScreen = $api.getStorage('FULLSCREEN');
        var iOS7StatusBarAppearance = $api.getStorage('IOS7STATUSBARAPPEARANCE');
        if (numSV >= 7 && fullScreen == 'false' && iOS7StatusBarAppearance) {
            el.style.paddingTop = '20px';
        }
    }
}
function fixStatusBar_API(el){
    if(!$api.isElement(el)){
        console.warn('$api.fixStatusBar Function need el param, el param must be DOM Element');
        return;
    }
    var sysType = $api.getStorage('SYSTEMTYPE');
    if(sysType == 'ios'){
        fixIos7Bar_API(el);
    }else if(sysType == 'android'){
        var ver = $api.getStorage('SYSTEMVERSION');
        ver = parseFloat(ver);
        if(ver >= 4.4){
            el.style.paddingTop = '25px';
        }
    }
};


function closeToWin(){
	api.closeToWin({name:'root'});
}
