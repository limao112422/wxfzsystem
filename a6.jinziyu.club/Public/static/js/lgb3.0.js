	
	
var countdown = 60;

function settime(val) {
	if(countdown == 1) {
		val.removeAttribute("disabled");
		val.innerHTML = "获取";
		
	} else {
		val.setAttribute("disabled", true);
		val.innerHTML =  countdown +"s";
		countdown--;
	}
	setTimeout(function() {
		settime(val)
	}, 1000)
}
	
	
//密码是否可见
function hideShowPsw(shPwdCls){  
	var demoInput=document.querySelector(shPwdCls);
    if (demoInput.type == "text") {  
        demoInput.type = "password";  
    }else {  
        demoInput.type = "text";  
    }  
};


//输入手机号码切换获取按钮
var phoneToggle = function(settings) {  
	  var defaultSetting={ 
         thisCls:'.bl-poe-hdm', //input的class或id
         stateCls:'.bl-sms-code', //需要改变状态的按钮class或id
         attrKeynm:'class', //
         attrValnm1:'sms-code-btn1', //state的class1
         attrValnm2:'sms-code-btn2', //state的class2
         disabledCls:'.bl-dx-code,.bl-tge-pwd' //切换时需要禁用的input
	  };  
	  $.extend(defaultSetting,settings); 
      var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;  
      var myval=document.querySelector(defaultSetting.thisCls).value;
      var blSmsCode=$(defaultSetting.stateCls).children("button");
      if (!myreg.test(myval)) {  
           blSmsCode.attr(defaultSetting.attrKeynm,defaultSetting.attrValnm1);
           $(defaultSetting.disabledCls).attr('disabled','disabled');
           
      } else {  
           blSmsCode.attr(defaultSetting.attrKeynm,defaultSetting.attrValnm2);  
           $(defaultSetting.disabledCls).removeAttr('disabled');
      }
}


//登录按钮变亮
var btnHankState = function(stgs) {	
	var dlst={ 
       blPwdCls:'.bl-tge-pwd', //需要监听的input的class或id
       blIptLet:6,  //input输入长度
       blBtnCls:'.bl-tle-btnbx>a',//切换状态的元素 class或id 
       blStateKey:'class', //切换属性
       blStateVal1:'bs-yms-btn',  //初始属性值
       blStateVal2:'bs-hs-btn'  //改变后的属性值
	};  
	$.extend(dlst,stgs); 
    var blTgePwd = $(dlst.blPwdCls).val();
    if(blTgePwd.length>=dlst.blIptLet){
   	   $(dlst.blBtnCls).attr(dlst.blStateKey,dlst.blStateVal1);
    }
    else{
   	   $(dlst.blBtnCls).attr(dlst.blStateKey,dlst.blStateVal2);
    } 	
}

//表单验证提示框
function vftnPrompt(content,vftmPtTime){
	var vptHtml="";
	vptHtml+="<div class='vpt-pf-wrap'>";
	vptHtml+="<div class='vpt-zw-bg'></div>";
	vptHtml+="<div class='vpt-cnt-tip'><p>"+content+"</p></div>";
	vptHtml+="</div>";
	
	$("body").append(vptHtml);
	
	tipTimeOut = setTimeout(function(){
		vftnClose();
	},vftmPtTime);
}

function vftnClose(){
 	if(tipTimeOut){
 		clearTimeout(null);
 	}
	$(".vpt-pf-wrap").remove();
}
