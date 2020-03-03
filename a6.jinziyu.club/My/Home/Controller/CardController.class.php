<?php
namespace Home\Controller;
use Think\Controller;
class CardController extends Controller {
    public function decardlist(){

        $Mc = M('loan');
        $Mb = M('bank');

        $cid = I("get.id",0,'trim');
        $cpl = I("get.pl",0,'trim');//额度范围
        $cfl = I("get.fl",0,'trim');//费率范围
        $ctl = I("get.tl",0,'trim');//期限范围
		$pc= I('pc','','trim');
        if($pc){
       		if($pc<1000){
            	$cpl=1;
            }elseif($pc>=1000&&$pc<5000){
            	$cpl=2;
            }else{
            	$cpl=3;
            }
        }
         if(empty($cid)&&empty($cpl)&&empty($cfl)&&empty($ctl)){
             $list = $Mc->order('member desc')->select();
         }else{
           if(!empty($cid)){
             $list = $Mc->where(array('bank'=>$cid))->order('member desc')->select();
            }
           if(!empty($cpl)){
               switch ($cpl){
                   case 1:
                       $price='1000以下';
                       break;
                   case 2:
                       $price='1000-5000';
                       break;
                   case 3:
                       $price='5000以上';
                       break;
               }
               $list = $Mc->where(array('price' => $price))->order('member desc')->select();
           }

             if(!empty($cfl)){
                 switch ($cfl){
                     case 1:
                         $list = $Mc->where(['red'=>['elt','10%']])->where(array('type'=>'上架'))->order('member desc')
                             ->select();
                         break;
                     case 2:
                         $list = $Mc->where(['red'=>['BETWEEN',['10%','20%']]])->where(array('type'=>'上架'))->order('member desc')
                             ->select();
                         break;
                     case 3:
                         $list = $Mc->where(['red'=>['BETWEEN',['20%','30%']]])->where(array('type'=>'上架'))->order('member desc')
                             ->select();
                         break;

                 }
             }
             if(!empty($ctl)){
                 switch ($ctl){
                   case 1:
                       $day='1个月以内';
                       break;
                   case 2:
                       $day='1-3个月';
                       break;
                   case 3:
                        $day='3-6个月';
                       break;
                    case 4:
                        $day='6-12个月';
                       break;
                     case 5:
                        $day='12个月以上';
                       break;
               }
               $list = $Mc->where(array('day' => $day))->where(array('type'=>'上架'))->order('member desc')->select();
           }

             }

         $bank = $Mb->select();
  
        foreach ($list as $k => $v) {
            $list[$k]['n'] = $bank[$v['bank']]['name'];
        }

        $this->bank = $Mb->order('sort asc')->select();

        $this->cid = $cid;
        $this->cpl = $cpl;
        $this->ctl = $ctl;
        $this->cfl = $cfl;
        $this->list = $list;

        $this->display();

    }
    public function index(){
    	$Mc = M('card');
    	$Mb = M('bank');
    	$ba = M('banktype');
    	$list = $Mc->select();
    	$bank = $Mb->select();
        $this->bank = $Mb->order('sort asc')->limit('7')->select();
    	$this->list = $list;

		$uid = session(C('USER_AUTH_KEY'));
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
		$lu = M('img');
    	$lun = $lu->select();
    	$this->lun = $lun;

		$this->nav1 = $nav;
        $this->display();
    }

    public function read1($id){
        $Mc = M('card');
        $Mb = M('bank');
        $ba = M('banktype');
        $list = $Mc->where(array('bank'=>$id))->select();
        $bank = $Mb->select();
        foreach ($list as $k => $v) {
            $b = $v['bank']-1;
            $list[$k]['n'] = $bank[$b]['name'];
            //查询卡的类型
        	$ka = $ba->where(array('Id'=>$list[$k]['name']))->find();
        	$list[$k]['name']=$ka['typename'];
        }
        $this->bank = $Mb->order('sort asc')->select();
        $this->list = $list;
        $this->display();
    }
    
    public function read($id,$tid=0){
		
		//推广者id  存入
		/*$invitor = I('invitor');
 		if(!$invitor){
 			$this->error('参数错误！');
 		}*/

		if($tid){
 			//存入cookie
 			cookie('invitor',$tid,7*24*3600);//7天内
		}

        $Mc = M('card');
        $Mb = M('bank');
        $ba = M('banktype');
        $list = $Mc->where(array('id'=>$id))->find();

		$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $fu = $Mu->find($uid);
        $this->fu=$fu;
        $this->f = $list;
        $this->display();
    }
    
    public function content($status=0){
        $Mc = M('card');
        $Mb = M('bank');
        $ba = M('banktype');
        $list = $Mc->where(array('name'=>$status))->select();
        $bank = $Mb->select();
        foreach ($list as $k => $v) {
            $b = $v['bank']-1;
            $list[$k]['n'] = $bank[$b]['name'];
            //查询卡的类型
        	$ka = $ba->where(array('Id'=>$list[$k]['name']))->find();
        	$list[$k]['name']=$ka['typename'];
        }
        $this->bank = $Mb->order('sort asc')->select();
        $this->list = $list;
        $this->display();
    }

    public function more(){
        $Mc = M('card');
        $Mb = M('bank');
        $list = $Mc->select();
        $bank = $Mb->select();
        foreach ($list as $k => $v) {
            $list[$k]['n'] = $bank[$v['bank']]['name'];
        }
        $this->bank = $Mb->order('sort asc')->select();
        $this->list = $list;
        $this->display();
    }

	function liu(){
		$data = array('status' => 0,'msg' => '未知错误');

		$type = I('type');
		$uid = I('id');
		$mo=1;
		if($type==1){
			//产品
			$Payorder2 = D("loan");
			$u2=$Payorder2->where(array('id' => $uid))->setInc('pv');
			if($u2){
				$data['status'] = 1;
			}
		}else{
			//卡
			$Payorder2 = D("card");
			$u2=$Payorder2->where(array('id' => $uid))->setInc('pv');
			if($u2){
				$data['status'] = 1;
			}
		}
		$this->ajaxReturn($data);
		exit;

	}


	public function shuju(){
		$data = array('status' => 0,'msg' => '非法');
		$Payorder = D("shuju");
		$time=time();
        $time=$time-300;
		$id = I('id');
		$uid = I('uid');
		$type=I('type');
		
		if(!$uid){
			$data['msg'] = "不能为空";
		}else if ($type){
			$zd=array();
			$zd['addtime']=array('gt',$time);
			$cx=$Payorder->where(array('tuiuser'=>0))->where($zd)->order('addtime Asc')->find();
			if($cx){
				$arr = array(
				'status'=>1,
				'tuiuser'=>$uid,
			);
					
         	$status=$Payorder->where(array('id'=>$cx['id']))->save($arr);
          	if($status){
            	$data['msg']='接单成功';
                $data['status']=1;
                $data['id']=$cx['id'];
            }
			}else{
				$data['msg']='请刷新后再接单';
              	$this->ajaxReturn($data);	
			}
			
		}
			else{
		
          
          	$pd=$Payorder->where(array('id'=>$id))->find();
			if($pd['tuiuser']!=0||$pd['status']!=0||$time>$pd['addtime']){
            	$data['msg']='请刷新后再接单';
              	$this->ajaxReturn($data);
            }
			//直接保存
			$arr = array(
				'status'=>1,
				'tuiuser'=>$uid
			);
			
         	$status=$Payorder->where(array('id'=>$id))->save($arr);
          	if($status){
            	$data['msg']='接单成功';
                $data['status']=1;
            }
		}

		
		
    		//$data['msg'] = "没有可提现金额";
    	
    		
		$this->ajaxReturn($data);
		exit;
	}



}