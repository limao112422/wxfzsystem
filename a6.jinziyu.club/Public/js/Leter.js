var plater = {}
plater.alert = function(title,msg,url){
	var html='<div class="pop">';
		html+='<div class="msk"></div>';
		html+='<div class="pbox">';
		html+='<div class="title">'+title+'</div>';
		html+='<div class="ptxt">'+msg+'</div>';
		html+='<a class="pbtn">确	定</a>';
		html+='</div>';
		html+='</div>';
	$('body').append(html);
	if(url){
		$(".pbtn").click(function () {
			window.location.href = url;
		});
	}else{
		$(".pbtn").click(function () {
			$(this).parent().parent().remove();
		});
	}
}

plater.msg = function(msg,url){
	var html='<div class="msgdiv">';
		html+='<div class="msk"></div>';
		html+='<div class="msg">'+msg+'</div>';
		html+='</div>';
	$('body').append(html);
	if(url){
		setTimeout(function(){
			window.location.href = url;
		},1500);	
	}else{
		setTimeout(function(){
			$('.msgdiv').remove();
		},2000);
	}
}

plater.loading = function(){
	var html='<div class="loading" id="loading">';
		html+='<div class="msk"></div>';
		html+='<div class="loading-img">';
		html+='<img src="./Public/images/loading.gif" />';
		html+='<span>加载中,请稍后</span>';
		html+='</div>';
		html+='</div>';
	$('body').append(html);
}

plater.closeLoading = function(){
	if($('#loading')){
		$('#loading').remove();
	}
}

plater.confirm = function(title,msg,url){
	var html='<div class="pop">';
		html+='<div class="msk"></div>';
		html+='<div class="pbox">';
		html+='<div class="title">'+title+'</div>';
		html+='<div class="ptxt">'+msg+'</div>';
		html+='<div class="btns">';
		html+='<a class="cancleBtn">取	消</a>';
		html+='<a class="trueBtn">确	定</a>';
		html+='</div>';
		html+='</div>';
		html+='</div>';
	$('body').append(html);
	$(".trueBtn").click(function () {
		window.location.href = url;
	});
	
	$(".cancleBtn").click(function () {
		$(this).parent().parent().parent().remove();
	});	
}

//用户名判断
plater.isChinaName = function(name) {
    var pattern = /^[\u4E00-\u9FA5]{1,6}$/;
    return pattern.test(name);
}

// 验证身份证
plater.isCardNo = function(card) {
    var pattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;
    return pattern.test(card);
}

// 验证手机号
plater.isMobileNo = function(phone) {
    var pattern = /^1[123456789]\d{9}$/;;
    return pattern.test(phone);
}

//验证输入框
plater.checkInput = function(){
	var flag = true;
	var data = {};
	if(flag){
		if($('select').length>0){
			$('select').each(function(){
				if($(this).find('option:selected').val() != "" ){
					data[$(this).attr("name")] = $(this).find('option:selected').val();
				}else if($(this).css('display') != "none" && $(this).parent().css("display") != "none"){
					plater.alert("温馨提示！",$(this).attr("data-select"));
					flag = false;
					return false;
				}
			})
		}
	}
	if(flag){
		if($('input').length>0){
			$('input').each(function(){
				if($(this).attr("data-required") == "1" && $(this).val() == ""){
					plater.alert("温馨提示！",$(this).attr("placeholder"));
					flag = false;
					return false;
				}else if($(this).attr("isChinaName") == "1"){
					var rt = plater.isChinaName($(this).val());
					if(rt == false){
						plater.alert("温馨提示！","请输入正确的中文姓名！");
						flag = false;
						return false;
					}else{
						data[$(this).attr("name")] = $(this).val();
					}
				}else if($(this).attr("isMobile") == "1"){
					var rt = plater.isMobileNo($(this).val());
					if(rt == false){
						plater.alert("温馨提示！","请输入正确的手机号码！");
						flag = false;
						return false;
					}else{
						data[$(this).attr("name")] = $(this).val();
					}
				}else if($(this).attr("isCardNo") == "1"){
					var rt = plater.isCardNo($(this).val());
					if(rt == false){
						plater.alert("温馨提示！","请输入正确的身份证号！");
						flag = false;
						return false;
					}else{
						data[$(this).attr("name")] = $(this).val();
					}
				}else{
					data[$(this).attr("name")] = $(this).val();
				}
			});
		}
	}
	
	if(!flag){
		return false;
	}
	return data;
}

//Ajax 提交
plater.Ajax = function(url,data,flag=false){
	if(!data){
		data = $("form").serialize();
	}
	if(url && data){
		plater.loading();	
		$.post(url,data,function(d){
			if(d){
				plater.closeLoading();
				if(d.status){
					if(d.url){
						if(flag){
							plater.confirm("温馨提示！",d.info,d.url);
						}else{
							plater.alert("温馨提示！",d.info,d.url);
						}
					}else{
						plater.alert("温馨提示！",d.info);
					}
				}else{
					if(d.url){
						if(flag){
							plater.confirm("温馨提示！",d.info,d.url);
						}else{
							plater.alert("温馨提示！",d.info,d.url);
						}
					}else{
						plater.alert("温馨提示！",d.info);
					}
				}
			}else{
				plater.closeLoading();
				plater.alert("温馨提示！","请求失败！");
			}
		});
	}else{
		plater.alert("温馨提示！","请求参数错误！");
	}
}


//发送短信
function sendSms(ob,type){
	var $this = $(ob);
	var regex = /^1[12345789]\d{9}$/;
	var mobile = $(ob).parents().find('#mobile').val();
	if(plater.isMobileNo(mobile) == false){
		plater.alert("温馨提示！","手机号码不正确！");
		return false;
	}
	$.ajax({
		url: "./index.php?m=&c=Ajax&a=sendSms",
		data: {mobile:mobile,type:type},
		type: "POST",
		success: function(d) {
			if (d.status) {
				settime($this);
				plater.alert("温馨提示！",d.info);
			}else{
				plater.alert("温馨提示！",d.info);
			}
		}
	});

};


var countdown=60;
function settime(obj) { //发送验证码倒计时
	if (countdown == 0) {
		obj.attr('disabled',false);
		obj.css("color","#FF5722");
		obj.html("发送");
		countdown = 60;
		return;
	} else {
		obj.attr('disabled',true);
		obj.css("color","#888");
		obj.html( countdown + "S");
		countdown--;
	}
	setTimeout(function() {
		settime(obj) }
	,1000);
}

	


//上传图片
function uploadImg(ob){
	plater.loading();
	//上传图片至服务器
	var $that = $(ob);
		img = $that.parent().find('img');
		hid = $that.parent().find('input[type="hidden"]');
	lrz(ob.files[0], {
		done: function (results) {
			// 你需要的数据都在这里，可以以字符串的形式传送base64给服务端转存为图片。
			$.post("./index.php?c=Ajax&a=upload_64",{img:results.base64,size:results.base64.length},function(data){
				if(data.status){
					img.attr('src',data.info);
					hid.val(data.info);
					plater.closeLoading();
				}else{
					plater.alert("温馨提示！",data.info);
					plater.closeLoading();
				}
			});
		}
	});
}


