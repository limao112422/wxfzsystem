<?php
namespace Home\Controller;
use Think\Controller;
class QudaoController extends ComController {
	protected function getpass($pass){
		return md5('*&>'.md5($pass) );
	}
	protected function setlogin($name = ''){
		if(empty($name)){
			session(C('USER_QUDAO_KEY'),null);
		}else{
			session(C('USER_QUDAO_KEY'),$name);
		}
	}
	public function logout(){
		$this->title="注销登录";
		layout(true);
		$this->setlogin('');
		$this->redirect(U('Qudao/Main/index'));
	}
	public function Main_add(){
        $qudao=D('qudao');
        $qd=$qudao->find(session(C('USER_QUDAO_KEY')));
        $yongjin=C('cfg_yongjin');
        	$price=I('price','',trim);
          	if($price<$yongjin){
            	$this->error('小于最小佣金'.$yongjin.'元');
            }else{
            	$res=$qudao->where(array('id'=>session(C('USER_QUDAO_KEY'))))->save(array('yongjin'=>$price));
              	if($res){
                	$this->success('保存成功');
                }
            }
	}
	public function Main_index(){
        $qudao=D('qudao');
        $qd=$qudao->find(session(C('USER_QUDAO_KEY')));
        $shouxu=C('cfg_shouxu');
		$this->title="系统设置";
        $this->shouxu=$shouxu;
        $this->yongjin=$qd['yongjin'];
		layout(true);
		$this->display();
	}
	
		public function Haos_index(){
      	
		$this->title = "下级号商管理";
        $map['rel']=session(C('USER_QUDAO_KEY'));
		$User = D("qudao");
        $shuju=D("shuju");
		$count = $User->where($map)->count();
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $User->where($map)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		for($i=0;$i<count($list);$i++){
        $c=$shuju->where(array('rel'=>$list[$i]['id']))->count();
        $list[$i]['c']=$c;
        }
		$this->data = $list;
		$this->page = $show;
		layout(true);
		$this->display();
	}
  public function changepassed(){
		$this->title='修改管理密码';
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("qudao");
			//$pass = sha1(md5($pass));
			//$pass = $this->getpass($pass);
			$pass=$this->getpass($pass);
			$status = $User->where(array('id' => $id))->save(array('password' => $pass));
			if(!$status){
				$data['msg'] = "操作失败!";
			}else{
				$data['status'] = 1;
			}
        }
		$this->ajaxReturn($data);
	}


	public function Caiwu_index(){
		$this->title = "财务流水";
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;
		if($keyword5 || $keyword4){
			$str=strtotime($keyword4);
			$end=strtotime($keyword5);
			$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
		}
        $Qudao=D("qudao");
        $qudao=	session(C('USER_QUDAO_KEY'));
		$map['user']=$qudao;
      	$map['type'] =2;
		$Admin = D("moneylog");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('Id desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select(); 
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	
	
	 public function tixian_chuli() {
        $data = array('status' => 0, 'msg' => '未知错误');
        //判断余额是否大于规定额度

        //判断是否填写提现资料了


        $Ma = M('admin');
        $aid = session('admin_user');
        $f = $Ma->find($aid);

        //查询帐户
        if ($f['payno'] == '') {
            $data['status'] = 2;
            $this->ajaxReturn($data);
            exit;
        }

        if ($f && $f['price'] > 0) {
            $mo = $f['price'];//提现的金额

            $min = C('cfg_min');
            if ($mo < $min) {
                $data['msg'] = "您的余额低于最低提现额度" . $min . "无法提现";
                $this->ajaxReturn($data);
                exit;
            }

            //加入提现列表
            $arr = array(
                'userid' => $f['username'],
                'money' => $mo,
                'status' => 0,
                'addtime' => time()
            );
            $Payorder2 = D("tixian");
            $ord2 = $Payorder2->add($arr);
            if ($ord2) {
                //减去余额
                $a2 = $Ma->where(array('id' => $aid))->setDec('price', $mo);
                if ($a2) {
                    $data['status'] = 1;
                } else {
                    $data['msg'] = "扣款失败";
                }
            }

        } else {
            $data['msg'] = "没有可提现金额";
        }

        $this->ajaxReturn($data);
        exit;
    }
	
	public function jieshen(){
		$this->title = "任务列表";
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');
      	$keyword6 = I("keyword6",'','trim');
		$p = I("p",'','trim');
		if(!$p){
			$p=1;
		}
		$this->p = $p;
		$this->keyword4 = $keyword4;
		$this->keyword5 = $keyword5;
		$this->keyword6 = $keyword6;

		$where = array();
		if($keyword4 || $keyword5|| $keyword6){
          	if($keyword6){
				$key6['status'] = $keyword6;
				$map1[6] = $key6;
			}
			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[3] = $key4;
			}
			$map['_complex'] = $map1;
		}
			$aid=session(C('USER_QUDAO_KEY'));
            $map['rel']=$aid;
			$submit = I("submit",'','trim');

		$Admin = D("shuju");
        $Ma=D("qudao");
      	$Mu=D("user");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();


        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}

	public function heshijine2(){
		$this->title = "结算";

		
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');
		$keyword6 = I("keyword6",'','trim');
		$p = I("p",'','trim');
		

		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		//查询订单信息
		$User = D("shuju");
		$info = $User->where(array('id' => $id))->find();
		if(!$info){
			$this->error("订单不存在!");
		}
		
		$newstatus = 6;//无效
		
		$status = $User->where(array('id' => $id,'status'=>2))->save(array('status' => $newstatus));
		if($status){
		
				$url='Qudao/jieshen';
	
			$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 0, '结算成功...即将跳转页面');exit;
		}
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
	public function list_add(){
		$this->title = "添加任务";
       	  $Mq=D('qudao');
          $pd=$Mq->find(session(C('USER_QUDAO_KEY')));
           
		$Block = D("shuju");
		if(IS_POST){
          	if($_POST['pay']<8){
            	$this->error("请设置任务佣金！");
            }
			$_POST['rel'] = session(C('USER_QUDAO_KEY'));
            $_POST['addtime'] = time();
            $_POST['time'] = date('Y-m-d H:i:s',time()+300);
			$_POST['type'] = '2';
			$bh=date('Y-m-d');
			$bh= str_replace('-', '', $bh);
			$_POST['bh']=$bh.rand(1000,9000);
			$shouxu=C('cfg_shouxu');
          	$zh=round($_POST['pay']*(1+$shouxu),2);
              if($pd['price']-$zh<0){
              	$this->error("账户余额不足！");
              }
              $status = $Block->add($_POST);
			  if(!$status){
				$this->error("添加失败!");
			  }
              $res=$Mq->where(array('id'=>session(C('USER_QUDAO_KEY'))))->setDec('price',$zh);
          	  if($res){
              $user1= session(C('USER_QUDAO_KEY'));
              $bili1=$zh;
			  $text="任务发布";
              $motype=2;//减少 
              $type=2;//下单员
              $momsg=$this->getusermoney($user1,$bili1,$motype,$text,$type); 
              }
              if($pd['rel']!=0){
                $bili2=round(($zh-$_POST['pay'])*C('cfg_fencheng2'),2);
                $res2=$Mq->where(array('id'=>$pd['rel']))->setInc('price',$bili2);
                if($res2){
              	$user2= $pd['rel'];
			    $text2="下级号商发布分成";
                $motype2=1;//增加 
                $type2=2;//下单员
                $momsg=$this->getusermoney($user2,$bili2,$motype2,$text2,$type2); 
                }
              }
			  $this->success("添加成功!");
			exit;
		}
        $this->yongjin=$pd['yongjin'];
		layout(true);
		$this->display();
	}

	public function heshijine(){
  
		$this->title = "结算";
		$id = I("id",0,'trim');
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');
      	$keyword6 = I("keyword6",'','trim');
		$p = I("p",'','trim');
		if(!$id){
			$this->error("参数错误!");
		}
		//查询订单信息
		$User = D("shuju");
		$info = $User->where(array('id' => $id))->find();
		if(!$info){
			$this->error("订单不存在!");
		}
		$newstatus = 3;//结算成功
		$status = $User->where(array('id' => $id,'status'=>2))->save(array('status' => $newstatus));
		if($status){		
			//开始分成
							$bili1=$info['pay'];
							$url='Qudao/jieshen';
							$user = D("user");
                            $y=$user->where(array('id'=>$info['tuiuser']))->setInc('price',$bili1);
									if($y){		
										$type=1;//用户变动
										$user1=$info['tuiuser'];
										$text='任务佣金';
                                      	$motype=1;//增加
										$momsg=$this->getusermoney($user1,$bili1,$motype,$text,$type,$id);
										if($momsg){
											//查询一级的id是否有上级是否有二级
                                          	$rel=$user->where(array('id'=>$info['tuiuser']))->find();
                                            $rel=$rel['rel'];
                                            $cx=$user->where(array('id'=>$rel))->find();
											$erji = $cx['id'];
                                            if($erji){
												$mo2=round($info['pay']*C('cfg_fencheng'),2);
												$y2=$user->where(array('id'=>$erji))->setInc('price',$mo2);
												if($y2){
                                                  	$type=1;//用户变动
                                               	    $user2=$erji;
													$motype=1;//增加
													$text=$ttttxxxt.'任务二级佣金';
													$momsg2=$this->getusermoney($user2,$mo2,$motype,$text,$type,$id);
												
												}
											}

                                        }
											
										}
					$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 0, '结算成功...即将跳转页面');exit;


			}
		
	}
	
	
		public function tixian_index(){
		$this->title = "提现管理";
	
		
		$Ma = M('qudao');
        $aid=session(C('USER_QUDAO_KEY'));
    	if(IS_POST){
    		$data=array('code' => 0,'msg' => '未知错误');
    		$payno = I("payno",'','trim');
			


    		if(!$payno){
    			$data['msg']="结算帐号不得为空";
    		}else{
    			$status = $Ma->where(array('id' => $aid))->save(array('payno'=>$payno));
    			if($status){
    				$data['status'] = 1;
    			}
    		}
    		$this->ajaxReturn($data);exit;
    	}

        $f = $Ma->where(array('id'=>$aid))->find();
        $tx=D('tixian');
        $dai=$tx->where(array('userid'=>$f['username']))->where(array('status'=>0))->find();
        $dai=$dai['money'];
        $this->dai=$dai;
        $this->f=$f;
        layout(true);
        $this->display();
	}
	
	
	
	
	
	
	
	
	
    
}