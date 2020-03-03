$(window).scroll(function() {
	if($(this).scrollTop() > 100) {
		$(".return-top-box").slideDown();
	} else {
		$(".return-top-box").slideUp();
		$(".record-head-box").removeClass("activefl");
	}
})
$(".return-top-box").click(function() {
	$("html,body").animate({
		scrollTop: 0
	}, 500);
})

//弹窗

function showModel(){
	$(".modal-mask").fadeIn();
	$(".modal-dialog").animate({"top":"50%"})
	$(".close-img").click(function(){
		$(".modal-mask").fadeOut();
		$(".modal-dialog").animate({"top":"-250%"})
	})
	$(".modal-mask").click(function(){
		$(this).fadeOut();
		$(".modal-dialog").animate({"top":"-250%"})
	})
	$(".btn-confirm").click(function(){
		//跳转链接
	})
}

function onSctionePuy(){
	$(".gzh-modelmask-box").fadeIn()
	$(".puy-vip-box").animate({"top":"50%"})
	$(".gzh-modelmask-box").on("click",function(){
		$(this).fadeOut();
		$(".puy-vip-box").animate({"top":"-200%"})
	})
	$(".close-btn").click(function(){
		$(".gzh-modelmask-box").fadeOut();
		$(".puy-vip-box").animate({"top":"-200%"})
	})
}

function attentionEwm(){
	$(".gzh-modelmask-box").fadeIn()
	$(".gzh-model-box").animate({"top":"50%"})
	$(".gzh-modelmask-box").on("click",function(){
		$(this).fadeOut();
	    $(".gzh-model-box").animate({"top":"-200%"})
	})
	$(".close-btn").on("click",function(){
		$(".gzh-modelmask-box").fadeOut();
	    $(".gzh-model-box").animate({"top":"-200%"})
	})
}

var dbTab = $("#db_tab ul").children(),
	dater = new Date(),
	year = dater.getFullYear(),
	monthr = dater.getMonth() + 1,
	client = {
		//传值加一
		valuePlus: function(price, num) {
			return parseInt(price) + parseInt(num);
		},
		//传值减一
		valueMinus: function(price, num) {
			return parseInt(price) - parseInt(num);
		},
		//设置盒子高度
		tabBoxH: function() {
			$("#tab_list").height($(".tab-btbox").height());
		},
		//修改日期函数(年，月，dom,id)
		changeDate: function(yr, mr, dm, romDm) {
			if(dm.attr("id") == "prev_cl") {
				monthr = parseInt(client.valueMinus(mr, 1)); 
//				monthr = client.valueMinus(mr, 1);
				if(monthr < 1) {
					monthr = 12;
					year = client.valueMinus(yr, 1);
				}
				if(monthr<10){
					monthr = "0" + client.valueMinus(mr, 1);
				}
				romDm.text(year + "年" + monthr + "月");
			}
			if(!(yr == dater.getFullYear() && mr == dater.getMonth() + 1)) {
				if(dm.attr("id") == "next_cl") {
					monthr = parseInt(client.valuePlus(mr, 1)) ;
					if(monthr<10){
						monthr = "0" + client.valuePlus(mr, 1);
					}
					if(monthr > 12) {
						monthr = "01";
						year = client.valuePlus(yr, 1);
					}
					romDm.text(year + "年" + monthr + "月");
				}
			}
		},
		prevClick: function(dom, dom2) {
			dom.on("click", function() {
				client.changeDate(year, monthr, $(this), dom2);
			})
		},
		nextClick: function(dom, dom2) {
			dom.on("click", function() {
				client.changeDate(year, monthr, $(this), dom2);
			})
		}
	}
	if(monthr<10){
		monthr = "0"+ monthr;
	}else{
		monthr = monthr;
	}
	$(".client-timer span").text(year + "年" + monthr + "月");
	
client.tabBoxH();
client.prevClick($("#prev_cl"), $(".timer-detail"));
client.nextClick($("#next_cl"), $(".timer-detail"));　
