<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends CommonController {
    public function setpassword(){
          	 $uid = session(C('USER_AUTH_KEY'));
        	$Mu=M('user');
            $data=$Mu->where(array('id'=>$uid))->find();
            $this->data=$data;
            if (IS_POST) {
            $res = array('status' => 0, 'msg' => '未知错误');
          	$password = I("password", '', 'trim');
             $datad = array(
                'password' => md5($password . '^L^')
            );
            $status = $Mu->where(array('id'=>$uid))->save($datad);
            if($status){
            	$res['msg']="成功";
            }
              else{
              	$res['msg']="失败";
              }
            $this->ajaxReturn($res);
            }else{
            $this->display();
            }
        }
    public function index(){
    	$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
        $this->f=$f;
		
      	$Mj=M('shuju');
        $num1=array(
        '0'=>3,
        '1'=>5,
        '2'=>10
        );
        $cg=array();
      	$sb=array();
        $shuju=$Mj->where(array('tuiuser'=>$uid))->select();
        $count=count($shuju);
        for($i=0;$i<count($shuju);$i++){
        if(in_array($shuju[$i]['status'],$num1)){
        		$cg[]='1';
        	}
        }
        $c=count($cg);
		$lv=round(($c/$count),2)*100;
        $this->count=$count;
        $this->c=$c;
        $this->lv=$lv;
    	$Ml = M('text');
		$uu = M('user');
    	$lista = $Ml->where()->select();
		$nav=0;
		if($uid){
			for($i=0;$i<count($lista);$i++){
				$id=$lista[$i]['id'];
				$user =$uu->where(array('id'=>$uid))->find();
				if($user){
					$textid=$user['textid'];
					$arr_a =explode(",",$textid);
					if(!in_array($id, $arr_a)){
					  $nav=1;
					}
				}

			}
		
		}
		$this->nav1 = $nav;
        $this->display();
    }

    public function recommend(){
        $Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
        $list = $Mu->where(array('rel'=>$uid))->select();
		$Mj=M('shuju');
      	$num1=array(
        '0'=>3,
        '1'=>5,
        '2'=>10
        );
        $cg=array();

    	for($i=0;$i<count($list);$i++){
        $shuju=$Mj->where(array('tuiuser'=>$list[$i]['id']))->select();
        for($j=0;$j<count($shuju);$j++){
         if(in_array($shuju[$j]['status'],$num1)){
        		$cg[]='1';
        	}
         }
       	$list[$i]['num']=count($cg);
        }

	
        $this->c = count($list);
        $this->list=$list;
        $this->f=$f;
        $this->display();
    }
		public function shangji(){
        $Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
      	$mobile=$Mu->find($f['rel']);
        $this->mobile=$mobile['mobile'];
        $this->display();
    }
    public function money(){
      	    $keyword = I("keyword",'','trim');
	    	$this->keyword = $keyword;
	
		  
		   if($keyword ){
           	$str=strtotime($keyword);
			$end=time();
			$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
	
            }
	 

        $uid = session(C('USER_AUTH_KEY'));
		$map['tuiuser']=$uid;
        $mm2= M('shuju');
        $c1 = $mm2->where($map)->where(array('status'=>1))->order('Id desc')->select();
 		$count_1=count($c1);
        $num1=array(
        '0'=>3,
        '1'=>5,
        '2'=>10
        );
        $num2=array(
        '0'=>6,
        '1'=>7,
        '2'=>9
        );
        $c2=array();
        $c3=array();
        $shuju = $mm2->where($map)->order('Id desc')->select();
        for($i=0;$i<count($shuju);$i++){
        	if(in_array($shuju[$i]['status'],$num1)){
            	$c2[]=$shuju[$i];
            }
          if(in_array($shuju[$i]['status'],$num2)){
            	$c3[]=$shuju[$i];
            }
        $count_2=count($c2);
        $count_3=count($c3);
        }
        $this->c1=$c1;
        $this->c2=$c2;
        $this->c3=$c3;
        $this->count_1=$count_1;
         $this->count_2=$count_2;
         $this->count_3=$count_3;
        $this->display();
    }
   public function shensu(){
		if($_POST){
        $data=array('msg'=>'未知错误');
        $id=I('id');
        $Mj=D('shuju');
        $shuju=$Mj->find($id);
        if($shuju['status']!=6){
        		$data['msg']='该笔订单不可发起申诉!';
                $data['status']=2;
          		 $this->ajaxReturn($data);
        	}else{
          $res=$Mj->where(array('id'=>$id))->save(array('status'=>8));
          if($res){
          	$data['status']	=1;
          }
           $this->ajaxReturn($data);
        }
        
        }
        $uid = session(C('USER_AUTH_KEY'));
		$map['tuiuser']=$uid;
        $mm2= M('shuju');
        $c1 = $mm2->where($map)->where(array('status'=>6))->order('Id desc')->select();
 	    $c2 = $mm2->where($map)->where(array('status'=>10))->order('Id desc')->select();
     	$c3 = $mm2->where($map)->where(array('status'=>9))->order('Id desc')->select();
        $this->c1=$c1;
        $this->c2=$c2;
        $this->c3=$c3;
        $this->display();
    }
 public function mingxi(){
       	$uid = session(C('USER_AUTH_KEY'));
        $money=D('moneylog');
        
        $c1 = $money->where(array('user'=>$uid,'type'=>1))->order('Id desc')->select();
        $this->c1=$c1;

        $this->display();
    }
  public function txmx(){
       	$uid = session(C('USER_AUTH_KEY'));
        $money=D('tixian');
        
        $c1 = $money->where(array('userid'=>$uid))->order('Id desc')->select();
        $this->c1=$c1;

        $this->display();
    }
    public function qrcode(){
        $Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
       
        $this->f=$f;
        $this->display();
    }
	public function qrcodechan(){
        $Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
       
		//判断是否为vip用户
		if($f['vip']==0){
			$this->redirect('/User/join');exit;
		}

        $this->f=$f;
        $this->display();
    }
    public function jiesuan(){
    	$Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
    	if(IS_POST){
    		$data=array('code' => 0,'msg' => '未知错误');
    		$payno = I("payno",'','trim');
			


    		if(!$payno){
    			$data['msg']="结算帐号不得为空";
    		}else{
    			$status = $Mu->where(array('id' => $uid))->save(array('payno'=>$payno));
    			if($status){
    				$data['status'] = 1;
    			}
    		}
    		$this->ajaxReturn($data);exit;
    	}
        $Mu = M('user');
        $uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
        $this->f=$f;
        $this->display();
    }

    public function wx(){
        $this->display();
    }

    public function  join(){
    	$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
        $this->f=$f;
        $this->display();
    }

    public function  reward(){
        $this->display();
    }

    public function  rewards(){
        $Mu = M('user');
        $b = $Mu->select();

        foreach ($b as $k => $v) {
            $b[$k]['num'] = $Mu->where(array('rel'=>$v['id']))->count();
        }
        
        $a = array();
        foreach($b as $key=>$val){
            $a[] = $val['num'];
        }

        rsort($a);
        $a = array_flip($a);
        $result = array();
        foreach($b as $k=>$v){
            $temp1 = $v['num'];
            $temp2 = $a[$temp1];
            $result[$temp2] = $v;
        }
        ksort($result);

        $this->list=array_slice($result,0,10);
        $this->f=$f;
        $this->display();
    }

    public function  problem(){
    	$Mu = M('block');
        $list = $Mu->where()->select();
        $this->list=$list;
        $this->display();
    }

    public function nick(){
    	$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
    	if(IS_POST){
    		$nick = I('nick');
    		if(!empty($nick)){
    			if($Mu->where(array('id'=>$uid))->setField('nick',$nick)){
    				$this->success('修改成功！');
    			}else{
    				$this->error('修改错误！');
    			}
    		}
    	}else{
    		$this->f=$f;
    		$this->display();
    	}
    }

    public function password(){
    	$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
    	if(IS_POST){
    		if(empty($_POST['p'])) $this->error('密码不可为空!');
    		if(strlen($_POST['p'])<6) $this->error('密码不得少于6位！');
    		if(empty($_POST['np'])) $this->error('新密码不可为空!');
    		if($_POST['np']!=$_POST['cp']) $this->error('新密码不一致!');
    		$p = md5($_POST['p'].'^H^');
    		if($f['password']==$p){
    			$cp = md5($_POST['cp'].'^H^');
    			if($Mu->where(array('id'=>$uid))->setField('password',$cp)){
    				$this->success('修改成功！');
    			}else{
    				$this->error('修改错误！');
    			}
    		}else{
    			$this->error('输入的密码有误!');
    		}
    	}else{
    		$this->f=$f;
    		$this->display();
    	}
    }
    public function message(){
    	
        $this->display();
    }

    public function help(){
    	
        $this->display();
    }

    public function view(){
        $Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
    	if(IS_POST){
    		$Mv = M('view');
    		$t = I('title');
    		$c = I('content');
    		if(empty($t)) $this->error('标题不可为空!');
    		if(empty($c)) $this->error('内容不可为空!');
    		$data = array(
    			'id'=>$uid,
    			'title'=>$t,
    			'content'=>$c,
    			);
			if($Mv->add($data)){
				$this->success('提交成功！');
			}else{
				$this->error('提交错误！');
			}
    	}else{
    		$this->f=$f;
    		$this->display();
    	}
    }
    
   
    
    //支付
    function pay(){
    		$Mu = M('user');
    		$uid = session(C('USER_AUTH_KEY'));
    		$f = $Mu->find($uid);
    		$username=$f['mobile'];

			//判断会员费是否为0 或 null
			$hui=C('cfg_money');
			if($hui==0 || $hui==''){
				//直接修改成为会员

				//创建订单
				$payordernum = neworderNum();
				$arr = array(
					'ordernum' => $payordernum,
					'type'	   => '自动开通会员',
					'money'	   => 0,
					'addtime'  => time(),
					'status'   => 1,
					'user'	   => $username
				);
				$Payorder = D("payorder");
				$status = $Payorder->add($arr);
				if(!$status){
					$data['msg'] = '创建订单失败!';
				}
				//修改会员
				$u2=$Mu->where(array('id' => $uid))->save(array('vip' => 1));
				if($u2){
					$this->redirect('/User/join');exit;
				}

			}

			//创建订单
			$payordernum = neworderNum();
			$arr = array(
				'ordernum' => $payordernum,
				'type'	   => '支付vip费用',
				'money'	   => C('cfg_money'),
				'addtime'  => time(),
				'status'   => 0,
				'user'	   => $username
			);
			$Payorder = D("payorder");
			$status = $Payorder->add($arr);
			if(!$status){
				$data['msg'] = '创建订单失败!';
			}
			
			//跳转支付
			$this->redirect('Pay/index',array('ordernum' => $payordernum));
    }
      public function setzhimafen(){
          	 $uid = session(C('USER_AUTH_KEY'));
        	$Mu=M('user');
            $data=$Mu->where(array('id'=>$uid))->find();
            $this->data=$data;
            if (IS_POST) {
            $res = array('status' => 0, 'msg' => '未知错误');
          	
            $nick = I("nick", '', 'trim');
             $payno = I("payno", '', 'trim');
               $qq = I("qq", '', 'trim');
               $v = I("v", '', 'trim');
             $datad = array(
                'nick' => $nick,
                'payno'=>$payno,
                'qq'=>$qq,
                'v'=>$v
            );
            $status = $Mu->where(array('id'=>$uid))->save($datad);
            if($status){
            	$res['msg']="成功";
            }
              else{
              	$res['msg']="失败";
              }
            $this->ajaxReturn($res);
            }else{
            $this->display();
            }
        }
    public function ye(){
          	$uid = session(C('USER_AUTH_KEY'));
        	$Mu=M('user');
            $data=$Mu->where(array('id'=>$uid))->find();
            $this->data=$data;
            $this->display();
        }
  protected function getusermoney($user,$money,$most,$text,$type=0,$chanid=0){
		$arr = array(
			'user'     => $user,
			'money'	   => $money,
			'motype'     => $most,
			'text'     => $text,
			'type'     => $type,
			'chanid'   => $chanid,
			'addtime'  => time()
		);
		$Payorder = D("moneylog");
		$status = $Payorder->add($arr);
		return $status;
	}
    public function tixian(){
		$data = array('status' => 0,'msg' => '未知错误');
		$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
    	$f = $Mu->find($uid);
		$mo=I('number');
		//查询帐户
		if($f['payno']==''){
				$data['status'] = 2;
				$this->ajaxReturn($data);
				exit;
		}

    	if($f && $f['price']>0){	
			$min=C('cfg_min');
			if($mo<$min){
				$data['msg'] = "您的余额低于最低提现额度".$min."无法提现";
				$this->ajaxReturn($data);
				exit;
			}
			if($f['price']-$mo<0){
				$data['msg'] = "可提现金额不足，请重新输入金额";
				$this->ajaxReturn($data);
				exit;
			}
			$mo2=round($mo*(1-C('cfg_tixian')),2);
    		//加入提现列表
    		$arr = array(
				'userid'	   => $uid,
				'money'	   => $mo,
                'moneys'=>$mo2,
				'status' => 0,
				'addtime'  => time()
			);
			$Payorder2 = D("tixian");
			$ord2 = $Payorder2->add($arr);
			if($ord2){
				//减去余额
					$u2=$Mu->where(array('id' => $uid))->setDec('price',$mo);
					if($u2){
						$data['status'] = 1;
					}else{
						$data['msg'] = "扣款失败";
					}

            }
    	}else{
    		$data['msg'] = "没有可提现金额";
    	}
    		
		$this->ajaxReturn($data);
		exit;
	}



	


    
    
    
}