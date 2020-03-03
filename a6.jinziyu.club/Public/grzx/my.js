var Use="";
var vm=new Vue({
	el:'#MainCon',
	data:{
		today:'',
		UserInfo:{},
		RealUserInfo:{},
		UseUrl:'',
		ShowReal:true,
		total:0,
		TeamInfo:{
			name:'',
		},
        Balance:0,
	},
	created:function(){
		this.GetUserInfo();
		this.GetCurMonth();
	//	this.GetOrder();
		this.GetTeamInfo();
        this.GetBalance();
	},
	filters:{
		filterImg:function(val){
			if(val==""||val==undefined||val==null){
				return 'img/tx.png';
			}else{
				return 	'http://www.songguopay.com:8080/imgShow/'+val;
				
			}
		},
	},
	methods:{
		GetTeamInfo:function(){
			$.ajax({
             	type: "GET",
             	url: myUrl+"/slave/user/team/info",
             	data: {},
             	dataType: "json",
             	success: function(ret){
             		if(ret.object==null||ret.object==undefined||ret.object==""){
             			vm.TeamInfo.name='';
             			vm.TeamInfo.leadUserId='';
             		}else{
             			vm.TeamInfo=ret.object;
             			
             		}
             	},
             	xhrFields: {  
		      		withCredentials: true  
		   		}  
 			});
		},
        GetBalance:function(){
            $.ajax({
                type: "GET",
                url: myUrl+"/slave/user/money/get",
                data: {},
                dataType: "json",
                success: function(ret){
                    if(ret.success){
                        vm.Balance=ret.object.accountMoney;
                    }else{
                        Toast(ret.msg);
                        OpenUrl('login.html');
                    }
                },
                xhrFields: {
                    withCredentials: true
                }
            });
        },
		GetOrder:function(){
			$.ajax({
	         	type: "GET",
	         	url: myUrl+"/slave/order/myPage",
	         	data: {
	         	},
	         	dataType: "json",
	         	success: function(ret){
	         		loadHide();
	           		if(ret.success){
		           		vm.total=ret.total;
					}else{
						Toast(ret.msg);
					}
	         	},
	         	xhrFields: {
		      		withCredentials: true  
		   		} 
	        	
			});
		},
		GetUserInfo:function(){
			$.ajax({
             	type: "GET",
             	url: myUrl+"/slave/user/info",
             	data: {},
             	dataType: "json",
             	success: function(ret){
             		if(ret.success){
		           		vm.UserInfo=ret.object;
					}else{
						OpenUrl('login.html');
						Toast(ret.msg);
					}
             		
             	},
             	xhrFields: {  
		      		withCredentials: true  
		   		}  
 			});
		},
		loginout:function(){
			$.ajax({
		     	type: "GET",
		     	url: myUrl+"/slave/user/logout",
		     	data: {},
		     	dataType: "json",
		     	success: function(ret){
		       		if(ret.success){
			       		Toast('退出成功，即将跳转');
			       		OpenUrl('login.html');
					}else{
						Toast(ret.msg);
					}
		     	},
		     	xhrFields: {
		      		withCredentials: true  
		   		} 
			});
		},
		GetCurMonth:function(){
			var d = new Date();
			var a = new Array("日", "一", "二", "三", "四", "五", "六");  
			var week = new Date().getDay();  
			this.today =(d.getMonth()+1)+"月"+d.getDate()+'日'+'  周'+a[week];
		},
	},
	
})
$.ajaxSetup({
		crossDomain: true,
		xhrFields: {withCredentials: true},
		complete: function(xhr,status) {
	    	if(xhr.responseJSON && xhr.responseJSON.code=='no-login') {
	    		OpenUrl('login.html');
	    	}
		},
    });
apiready = function(){
    api.parseTapmode();
    api.setCustomRefreshHeaderInfo({
	    bgColor: '#eee',
	    image: {
	        pull: 'widget://image/refresh/pulling.png',
	        transform: [
	            'widget://image/refresh/transform0.png',
	            'widget://image/refresh/transform1.png',
	            'widget://image/refresh/transform2.png',
	            'widget://image/refresh/transform3.png',
	            'widget://image/refresh/transform4.png',
	            'widget://image/refresh/transform5.png',
	            'widget://image/refresh/transform6.png'
	        ],
	        load: [
	            'widget://image/refresh/loading0.png',
	            'widget://image/refresh/loading1.png',
	            'widget://image/refresh/loading2.png',
	            'widget://image/refresh/loading3.png',
	            'widget://image/refresh/loading4.png'
	        ]
	    },
	    tips: {
	        pull: '下拉刷新',
	        threshold: '松开立即刷新',
	        load: '正在刷新'
	    }
	}, function() {
	    vm.GetUserInfo();
		vm.GetCurMonth();
		setTimeout(function(){
			api.refreshHeaderLoadDone()
		},2000)
	});
}