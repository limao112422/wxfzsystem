<?php
namespace Home\Controller;
use Think\Controller;
//支付部分
class PayController extends Controller{

	//支付确认页面
	public function index(){
		$ordernum = I("ordernum",'','trim');
		if(!$ordernum){
			$this->redirect('Home/Index/index');
		}
		$Payorder = D("payorder");
		$info = $Payorder->where(array('ordernum' => $ordernum))->find();
		if(!$info){
			$this->redirect('Home/Index/index');
		}
		if($info['status']){
			$this->redirect('Home/Index/index');
			//订单已支付
			//$this->error("订单不存在");exit;
		}
		$this->money = $info['money'];
		$this->ordernum = $ordernum;
		$this->paycont = "订单:".$ordernum."支付";
		$this->display();
	}


	//支付跳转页
	public function geturl(){
		$data = array('status' => 0,'msg' => '未知错误');
		$ordernum = I("ordernum",'','trim');
		$channel = I("channel",'','trim');
		if(!$ordernum){
			$data['msg'] = "订单号有误";
		}elseif(!$channel){
			$data['msg'] = "支付方式有误";
		}else{
			$Payorder = D("payorder");
			$info = $Payorder->where(array('ordernum' => $ordernum))->find();
			if(!$info){
				$data['msg'] = "订单不存在";
			}elseif($info['status']){
				$data['msg'] = "订单状态错误";
			}else{
			   // $param['order_no'] = $ordernum; //订单号
				//$param['amount'] = $info['money'];//订单金额

				if($channel == 'alipay_wap'){
					//zhifubao
					
						
						$zt=1;


				}else if($channel == 'wxpay_jsapi'){
					//weixin
					
					$zt=3;

				}

/*
				
		$md5key = 'qEKlJwm2nulLgJEHyR9wOU5ULusqupCT';
        $data['merid'] = 'yft2018071200001';
        $data['merchantOutOrderNo'] = $ordernum;
        $data['notifyUrl'] = "http://".$_SERVER['SERVER_NAME']."/Pay/paydo";
        $data['noncestr'] = '12345678910';
        $data['orderMoney'] = C('cfg_money');
        $data['orderTime'] = date('YmdHis');
        $signstr = 'merchantOutOrderNo='.$data['merchantOutOrderNo'].'&merid='.$data['merid'].'&noncestr='.$data['noncestr'].'&notifyUrl='.$data['notifyUrl'].'&orderMoney='.$data['orderMoney'].'&orderTime='.$data['orderTime'];
        $urlstr = 'https://alipay.3c-buy.com/api/createOrder?';
        $signstr.= '&key='.$md5key;
        $data['sign'] = md5($signstr);
        foreach ($data as $key => $value) {
            $urlstr.=$key.'='.urlencode($value).'&';
        }        
        $urlstr =substr($urlstr,0,-1);
        $urlstr = urlencode($urlstr);
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone')||strpos($_SERVER['HTTP_USER_AGENT'], 'iPad')){
            $url = 'alipay://platformapi/startApp?appId=10000011&url='.$urlstr;
          //  header('location:'.$url);
           // exit;
        }else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')){
            $url = 'alipays://platformapi/startApp?appId=10000011&url='.$urlstr;
           // header('location:'.$url);
           // exit;
        }else{
            $url = 'alipays://platformapi/startApp?appId=10000011&url='.$urlstr;
           // header('location:'.$url);
            //exit;
        }
*/


				$codepay_id=C("cfg_client_id");//这里改成码支付ID
						$codepay_key=C("cfg_client_secret"); //这是您的通讯密钥

						$data = array(
							"id" => $codepay_id,//你的码支付ID
							"pay_id" => $ordernum, //唯一标识 可以是用户ID,用户名,session_id(),订单ID,ip 付款后返回
							"type" => $zt,//1支付宝支付 3微信支付 2QQ钱包
							"price" => $info['money'],//金额100元
							"param" => $ordernum,//自定义参数
							"notify_url"=>"http://".$_SERVER['SERVER_NAME']."/Pay/paydo",//通知地址
							"return_url"=>"http://".$_SERVER['SERVER_NAME']."/",//跳转地址
						); //构造需要传递的参数

						ksort($data); //重新排序$data数组
						reset($data); //内部指针指向数组中的第一个元素

						$sign = ''; //初始化需要签名的字符为空
						$urls = ''; //初始化URL参数为空

						foreach ($data AS $key => $val) { //遍历需要传递的参数
							if ($val == ''||$key == 'sign') continue; //跳过这些不参数签名
							if ($sign != '') { //后面追加&拼接URL
								$sign .= "&";
								$urls .= "&";
							}
							$sign .= "$key=$val"; //拼接为url参数形式
							$urls .= "$key=" . urlencode($val); //拼接为url参数形式并URL编码参数值

						}
						$query = $urls . '&sign=' . md5($sign .$codepay_key); //创建订单所需的参数
						$url = "http://api2.fateqq.com:52888/creat_order/?{$query}"; //支付页面
						
				
				$data['msg'] = 'success';
				$data['status'] = 1;
				$data['url'] = $url;
			}


	
			
		}
		$this->ajaxReturn($data);
	}

	
	/**
	 * 公众号支付 必须以get形式传递 out_trade_no 参数
	 * 示例请看 /Application/Home/Controller/IndexController.class.php
	 * 中的wexinpay_js方法
	 */
	public function pay(){
		// 导入微信支付sdk
		Vendor('Weixinpay.Weixinpay');
		$wxpay=new \Weixinpay();
		// 获取jssdk需要用到的数据
		$data=$wxpay->getParameters();
		// 将数据分配到前台页面
		$assign=array(
			'data'=>json_encode($data)
			);
		$this->assign($assign);
		$this->display();
	}



	//支付成功处理
	function paydo($jump = true){


			//echo 'success';exit;
$pay_no = I('pay_id');
$sign = I('sign');
if(!$pay_no){
	$pay_no=$_POST['param'];
}
if(!$sign){
	$sign=$_POST['sign'];
}


if (!$pay_no ||  !$sign) { //不合法的数据
	//app_time=1533456001&chart=utf-8&id=15092&money=0.1&param=H805557889749897&pay_id=H805557889749897&pay_no=2018080521001004550507988303&pay_time=1533456001&status=1&tag=%E5%95%86%E5%93%81&type=1&version=4.410&sign=c000e9f16b28d8a74d92fac3f5401abd

    exit('fail');  //返回失败 继续补单
} else { //合法的数据
               
			    //业务处理
			  //  $pay_id = $pay_no; //需要充值的ID 或订单号 或用户名
			   // $money = (float)$_REQUEST['money']; //实际付款金额
			    //$price = (float)$_POST['price']; //订单的原价
			   // $param = $_REQUEST['param']; //自定义参数
			   // $pay_no = $_REQUEST['pay_no']; //流水号
			    //echo 'success'; //返回成功 不要删除哦
					$out_trade_no = $pay_no;
					//$money = $_REQUEST['total_fee'];
					$Payorder = D("payorder");
					$info = $Payorder->where(array('ordernum' => $out_trade_no))->find();
					if(!$info){
						//订单不存在
						 exit('success'); //返回成功 不要删除哦
					}else{
						if($info['status'] == 1){
							//已经处理，跳过
							 exit('success'); //返回成功 不要删除哦
						}
						$Payorder->where(array('ordernum' => $out_trade_no))->save(array('status' => 1));
						if($info['type'] == "支付vip费用"){
							$Mu = M('user');
							//设置用户vip
							$Mu->where(array('mobile' => $info['user']))->save(array('vip' => 1));
							
							//加入支付成功总额里面
							$web = D("web");
							$web->where('id=3')->setInc('value',$info['money']);
							

							//分成
							$fen=C("cfg_fencheng");//分成百分比
							$vi=C("cfg_money");//vip
							//$vi=100;
							$mo=$fen/100*$vi;
							$user = D("user");
							//echo $mo;exit;
							$info2 = $user->where(array('mobile' => $info['user']))->find();
							if($info2 && $vi>=1){
								$rel=$info2['rel'];
									//一级分成
									$y=$user->where(array('id'=>$rel))->setInc('price',$mo);
									if($y){

										//加入分成成功总额里面
										$web = D("web");
										$web->where('id=4')->setInc('value',$mo);

										$type=1;
										$user1=$this->fenname($rel);//$info2['mobile'];
										//存入金额记录
										$text='会员费一级分成';
										$momsg=$this->getusermoney($user1,$mo,$type,$text);
										if($momsg){
											//查询一级的id是否有上级是否有二级
											$erji = $user->where(array('id' => $rel))->find();
											if($erji && $erji['rel']!=0){
												$erjirel=$erji['rel'];
												//二级分成
												$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=$fen2/100*$vi;
												$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
												if($y2){
													
													//加入分成成功总额里面
													$web = D("web");
													$web->where('id=4')->setInc('value',$mo2);

													$type=1;
													$user2=$this->fenname($erjirel);//$erji['mobile'];
													//存入金额记录
													$text='会员费二级分成';
													$momsg2=$this->getusermoney($user2,$mo2,$type,$text);
													if($momsg2){
														//查询二级的id是否有上级  是否有三级
														$sanji = $user->where(array('id' => $erjirel))->find();
														if($sanji && $sanji['rel']!=0){
															$sanjirel=$sanji['rel'];
															//三级分成
															$fen3=C("cfg_fencheng3");//分成百分比
															$mo3=$fen3/100*$vi;
															$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
															if($y3){

																//加入分成成功总额里面
																$web = D("web");
																$web->where('id=4')->setInc('value',$mo3);

																$type=1;
																$user3=$this->fenname($sanjirel);//$sanji['mobile'];
																//存入金额记录
																$text='会员费三级分成';
																$momsg3=$this->getusermoney($user3,$mo3,$type,$text);
																if($momsg3){
																	$data['status'] = 1;
																	$data['msg'] = "分成成功";	
																}
															}



														}
													}
												}
											}


											
										}
										//二级
									
								}
								
							}
							 exit('success'); //返回成功 不要删除哦
							if($jump) $this->redirect('Index/index');
						}else{
							 exit('success'); //返回成功 不要删除哦
							//未知类型支付
							if($jump) $this->redirect('Index/index');
						}
					}
				}
	
		 exit('success'); //返回成功 不要删除哦
	}


	//查询订单
    function queryOrder()
    {	
		define('IN_ECS', true);
		header("Content-type: text/html; charset=utf-8"); 
		//开启session
		session_start();
		// 定义应用目录
		define('APP_PATH', __DIR__ . '/application/');
		$uid="e4f8d00af9c24068b92ad736aeb2c317"; //商户uid
		$auth_code="m67J3iIbIreq3qeeQrRjm63imuai6bAj6bQv"; //商户auth_code
		$ordernum = I("ordernum",'','trim');
		$money=$_POST['money'];//金额
		$channel=$_POST['channel'];//渠道 alipay wechat
		$post_url="http://".$_SERVER['SERVER_NAME']."/Pay/payok";//通知地址
		$return_url="http://www.newxinyicaifu.com/user.html";//充值成功后要跳转到的页面
		$order_id=$ordernum;//订单号
		$order_uid="vip会员费用";//用户编号

		$key=md5($uid.$auth_code.$money.$channel.$post_url.$return_url.$order_id);//加密字符串

		$json_str='{"uid":"'.$uid.'","money":"'.$money.'","channel":"'.$channel.'","post_url":"'.$post_url.'","return_url":"'.$return_url.'","order_id":"'.$order_id.'","order_uid":"'.$order_uid.'","key":"'.$key.'"}';
		echo $json_str;

		
		
		if($_POST['code']==200){
			//支付成功了
			$Payorder = D("payorder");
			$info = $Payorder->where(array('ordernum' => $order_id))->find();

			$pp=$Payorder->where(array('ordernum' => $order_id,'status'=>'0'))->save(array('status' => 1));
			if($pp){
						
							$Mu = M('user');
							//设置用户vip
							$Mu->where(array('mobile' => $info['user']))->save(array('vip' => 1));
							//分成
							$fen=C("cfg_fencheng");//分成百分比
							$vi=C("cfg_money");//vip
							$mo=$fen/100*$vi;
							$user = D("user");
							$info2 = $user->where(array('mobile' => $info['user']))->find();
							if($info2){
								$rel=$info2['rel'];
									//一级分成
									$y=$user->where(array('id'=>$rel))->setInc('price',$mo);
									if($y){
										$type=1;
										$user1=$this->fenname($rel);//$info2['mobile'];
										//存入金额记录
										$text='会员费一级分成';
										$momsg=$this->getusermoney($user1,$mo,$type,$text);
										if($momsg){
											//查询一级的id是否有上级是否有二级
											$erji = $user->where(array('id' => $rel))->find();
											if($erji && $erji['rel']!=0){
												$erjirel=$erji['rel'];
												//二级分成
												$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=$fen2/100*$vi;
												$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
												if($y2){
													$type=1;
													$user2=$this->fenname($erjirel);//$erji['mobile'];
													//存入金额记录
													$text='会员费二级分成';
													$momsg2=$this->getusermoney($user2,$mo2,$type,$text);
													if($momsg2){
														//查询二级的id是否有上级  是否有三级
														$sanji = $user->where(array('id' => $erjirel))->find();
														if($sanji && $sanji['rel']!=0){
															$sanjirel=$sanji['rel'];
															//三级分成
															$fen3=C("cfg_fencheng3");//分成百分比
															$mo3=$fen3/100*$vi;
															$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
															if($y3){
																$type=1;
																$user3=$this->fenname($snjiarel);//$sanji['mobile'];
																//存入金额记录
																$text='会员费三级分成';
																$momsg3=$this->getusermoney($user3,$mo3,$type,$text);
																if($momsg3){
																	$data['status'] = 1;
																	$data['msg'] = "分成成功";	
																}
															}



														}
													}
												}
											}


											
										}
										//二级
									
								}
								
							}

				}

								
							
		}
		

    }
	
	function payok($jump = true)
    {	
		header("Content-Type: text/html;charset=utf-8"); 
		$auth_code=$_POST['auth_code'];
		
		  
		 
		 if($auth_code!="m67J3iIbIreq3qeeQrRjm63imuai6bAj6bQv"){echo  "NO";exit;}//xxxxx内容替换为auth_code
		 $tradeNo=$_POST['trade_no'];//交易号
		 $user_id=(int)$_POST['order_uid'];//用户编号
		 
		 
		 $out_trade_no=$_POST['remark'];//付款说明
		 $money=$_POST['money'];//金额
		 $status="交易成功";
		 $time=date("Y-m-d:H:i:s",time());
		 $paytime=time();
		 $type=$_POST['channel'];
		 $order_id=$_POST['order_id']; //HB08467953849999
		
		if($money > 0){
			
			if (!$order_id) { //不合法的数据
				exit('fail');  //返回失败 继续补单
			} else { //合法的数据
				$Payorder = D("payorder");
				$info = $Payorder->where(array('ordernum' => $order_id))->find();
				if(!$info){
					//订单不存在
					 exit('success'); //返回成功 不要删除哦
				}else{
					if($info['status'] == 1){
						//已经处理，跳过
						 exit('success'); //返回成功 不要删除哦
					}
					$Payorder->where(array('ordernum' => $order_id))->save(array('status' => 1));
					if($info['type'] == "支付vip费用"){
						$Mu = M('user');
						//设置用户vip
						$Mu->where(array('mobile' => $info['user']))->save(array('vip' => 1));
						
						//加入支付成功总额里面
						$web = D("web");
						$web->where('id=3')->setInc('value',$info['money']);
						

						//分成
						$fen=C("cfg_fencheng");//分成百分比
						$vi=C("cfg_money");//vip
						//$vi=100;
						$mo=$fen/100*$vi;
						$user = D("user");
						//echo $mo;exit;
						$info2 = $user->where(array('mobile' => $info['user']))->find();
						if($info2 && $vi>=1){
							$rel=$info2['rel'];
								//一级分成
								$y=$user->where(array('id'=>$rel))->setInc('price',$mo);
								if($y){

									//加入分成成功总额里面
									$web = D("web");
									$web->where('id=4')->setInc('value',$mo);

									$type=1;
									$user1=$this->fenname($rel);//$info2['mobile'];
									//存入金额记录
									$text='会员费一级分成';
									$momsg=$this->getusermoney($user1,$mo,$type,$text);
									if($momsg){
										//查询一级的id是否有上级是否有二级
										$erji = $user->where(array('id' => $rel))->find();
										if($erji && $erji['rel']!=0){
											$erjirel=$erji['rel'];
											//二级分成
											$fen2=C("cfg_fencheng2");//分成百分比
											$mo2=$fen2/100*$vi;
											$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
											if($y2){
												
												//加入分成成功总额里面
												$web = D("web");
												$web->where('id=4')->setInc('value',$mo2);

												$type=1;
												$user2=$this->fenname($erjirel);//$erji['mobile'];
												//存入金额记录
												$text='会员费二级分成';
												$momsg2=$this->getusermoney($user2,$mo2,$type,$text);
												if($momsg2){
													//查询二级的id是否有上级  是否有三级
													$sanji = $user->where(array('id' => $erjirel))->find();
													if($sanji && $sanji['rel']!=0){
														$sanjirel=$sanji['rel'];
														//三级分成
														$fen3=C("cfg_fencheng3");//分成百分比
														$mo3=$fen3/100*$vi;
														$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
														if($y3){

															//加入分成成功总额里面
															$web = D("web");
															$web->where('id=4')->setInc('value',$mo3);

															$type=1;
															$user3=$this->fenname($sanjirel);//$sanji['mobile'];
															//存入金额记录
															$text='会员费三级分成';
															$momsg3=$this->getusermoney($user3,$mo3,$type,$text);
															if($momsg3){
																$data['status'] = 1;
																$data['msg'] = "分成成功";	
															}
														}



													}
												}
											}
										}


										
									}
									//二级
								
							}
							
						}
						exit('success'); //返回成功 不要删除哦
						if($jump) $this->redirect('Index/index');
					}else{
						 exit('success'); //返回成功 不要删除哦
						 //未知类型支付
						 if($jump) $this->redirect('Index/index');
					}
				}
			}
		}

    }

	//增加金额变动记录
	protected function getusermoney($user,$money,$most,$text){
		$arr = array(
			'user'     => $user,
			'money'	   => $money,
			'motype'     => $most,
			'text'     => $text,
			'addtime'  => time()
		);
		$Payorder = D("moneylog");
		$status = $Payorder->add($arr);
		return $status;
	}


	function fenname($user1){
		$user = D("user");
		$info2 = $user->where(array('id' => $user1))->find();
		return $info2['mobile'];
	}

	function test(){
		echo "error";exit;
		$ordernum="H713925166102874";
		$Payorder = D("payorder");
			$info = $Payorder->where(array('ordernum' => $ordernum))->find();
		$Mu = M('user');
							//设置用户vip
							$Mu->where(array('mobile' => $info['user']))->save(array('vip' => 1));
							//分成
							$fen=C("cfg_fencheng");//分成百分比
							$vi=C("cfg_money");//vip
							$mo=$fen/100*$vi;
							$user = D("user");
							$info2 = $user->where(array('mobile' => $info['user']))->find();
							if($info2){
								$rel=$info2['rel'];
									//一级分成
									$y=$user->where(array('id'=>$rel))->setInc('price',$mo);
									if($y){
										$type=1;
										$user1=$this->fenname($rel);//$info2['mobile'];

										//echo $user1;exit;
										//存入金额记录
										$text='会员费一级分成';
										$momsg=$this->getusermoney($user1,$mo,$type,$text);
										if($momsg){
											//echo $rel;exit;
											//查询一级的id是否有上级是否有二级
											$erji = $user->where(array('id' => $rel))->find();
											if($erji && $erji['rel']!=0){
												$erjirel=$erji['rel'];
												//二级分成
												$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=$fen2/100*$vi;
												$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
												if($y2){
													$type=1;
													$user2=$this->fenname($erjirel);//$erji['mobile'];
													//存入金额记录
													$text='会员费二级分成';
													$momsg2=$this->getusermoney($user2,$mo2,$type,$text);
													if($momsg2){
														//查询二级的id是否有上级  是否有三级
														$sanji = $user->where(array('id' => $erjirel))->find();
														if($sanji && $sanji['rel']!=0){
															$sanjirel=$sanji['rel'];
															//三级分成
															$fen3=C("cfg_fencheng3");//分成百分比
															$mo3=$fen3/100*$vi;
															$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
															if($y3){
																$type=1;
																$user3=$this->fenname($sanjirel);//$sanji['mobile'];
																//存入金额记录
																$text='会员费三级分成';
																$momsg3=$this->getusermoney($user3,$mo3,$type,$text);
																if($momsg3){
																	$data['status'] = 1;
																	$data['msg'] = "分成成功";	
																}
															}



														}
													}
												}
											}


											
										}
										//二级
									
								}
								
							}
	}
	
	//随机生成一个订单号
	function rand_str($len){
		$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
		$string=time();
		for(;$len>=1;$len--)
		{
			$position=rand()%strlen($chars);
			$position2=rand()%strlen($string);
			$string=substr_replace($string,substr($chars,$position,1),$position2,0);
		}
	return $string;
}

}