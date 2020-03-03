<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends CommonsController {
   public function qx(){
        $Ma=M('admin');
        $admin=session('admin_user');
        $qx_list=$Ma->where(array('id'=>$admin))->find();
        $gid=$qx_list['gid'];
        if($gid!=1){
                	$this->error('无权限访问');
        	}
        } 
     public function glqx(){
        $Ma=M('admin');
        $admin=session('admin_user');
        $qx_list=$Ma->where(array('id'=>$admin))->find();
        $gid=$qx_list['gid'];
        if($gid<0){
                	$this->error('无权限访问');
        	}
        } 

    
  public function Daili_index(){
  	    $this->title = '团队列表';
        $this->glqx();
        $Ma=M('admin');
        $admin=session('admin_user');
        $qx_list=$Ma->where(array('id'=>$admin))->find();
        $name=$qx_list['username'];
        $gid=$qx_list['gid'];
    
       
        $Admin = D("admin");
        $where = array();
        $keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$keyword3 = I("keyword3",'','trim');
		$this->keyword3 = $keyword3;

		
		$where = array();
		if($keyword || $keyword3 ){
			//$where= 'nick like "%{$keyword}" ';
		
			$where['username']  = array('like',"%{$keyword}%");
			
			
			if($keyword3){
				$key3['lyname']=array('like',"%{$keyword3}%");
                 $map1[1]=$key3;
			}
          
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
        $map['gid']=array('lt',0);
        if($gid!=1){
        	 	$map['lyname']=$name;
        }
   
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();
        $this->data = $list;
        $this->page = $show;
    layout(true);
    $this->display();
  }
	 public function Center_qun(){
    layout(true);
    $this->display();
  }
  public function Center_team(){
     $this->glqx();
     $keyword4 = I("keyword4",'','trim');
	$keyword5 = I("keyword5",'','trim');
 
	$p = I("p",'','trim'); 
	if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				
		}
    
		$Admin=D("admin");;
        $admin=session('admin_user');
        $qx_list=$Admin->where(array('id'=>$admin))->find();
        $name=$qx_list['username'];
        $gid=$qx_list['gid'];
   
       if($gid!=1){
       	$qx['lyname']=$name;
       }
        $qx['gid']=-1;
        $count=$Admin->where($qx)->count();
        $count=$count+1;
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$data = $Admin->where($qx)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	
       $data=$Admin->where($qx)->select();
        for($i=0;$i<count($data);$i++){
            $User = D("shuju");
           $z=$User->where($map)->where(array('rel'=>$data[$i]['username']))->count();
       	   $ys=$User->where($map)->where(array('rel'=>$data[$i]['username']))->where(array('status'=>1))->count();
           $ws=$User->where($map)->where(array('rel'=>$data[$i]['username']))->where(array('status'=>2))->count();
           $ds=$User->where($map)->where(array('rel'=>$data[$i]['username']))->where(array('status'=>0))->count();
   			$data[$i]['ys']=$ys;
          	$data[$i]['ws']=$ws;
          $data[$i]['ds']=$ds;
           $data[$i]['z']=$z;
        }
	 $User = D("shuju");
	 $count=$User->count();
     $ycount=$User->where(array('status'=>1))->count();
     $wcount=$User->where(array('status'=>2))->count();
     $dcount=$User->where(array('status'=>0))->count();
     $this->data=$data;
    $this->count=$count;
    $this->ycount=$ycount;
    $this->wcount=$wcount;
    $this->dcount=$dcount;
    
    
     layout(true);
    $this->page = $show;
    $this->display();
  }
  public function Center_users(){
  	$keyword4 = I("keyword4",'','trim');
	$keyword5 = I("keyword5",'','trim');
 
	$p = I("p",'','trim'); 
	if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				
		}
    
		$user=D("user");
    	$Admin=D("admin");;
        $admin=session('admin_user');
      
        $qx_list=$Admin->where(array('id'=>$admin))->find();
        $name=$qx_list['username'];
        $gid=$qx_list['gid'];
       if($gid==0){
       	  $qx['lyname']=$name;
    
       }else if($gid==-1){
       	  $qx['rel']=$name;
        
       }
   		$count=$user->where($qx)->count();
        $count=$count+1;
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$data = $user->where($qx)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        for($i=0;$i<count($data);$i++){
            $User = D("shuju");
           $z=$User->where($map)->where(array('tuiuser'=>$data[$i]['mobile']))->count();
       	   $ys=$User->where($map)->where(array('tuiuser'=>$data[$i]['mobile']))->where(array('status'=>1))->count();
           $ws=$User->where($map)->where(array('tuiuser'=>$data[$i]['mobile']))->where(array('status'=>2))->count();
           $ds=$User->where($map)->where(array('tuiuser'=>$data[$i]['mobile']))->where(array('status'=>0))->count();
   			$data[$i]['ys']=$ys;
          	$data[$i]['ws']=$ws;
          $data[$i]['ds']=$ds;
           $data[$i]['z']=$z;
        }
	$User = D("shuju");
	 $count=$User->count();
     $ycount=$User->where(array('status'=>1))->count();
     $wcount=$User->where(array('status'=>2))->count();
     $dcount=$User->where(array('status'=>0))->count();
     $this->data=$data;
    $this->count=$count;
    $this->ycount=$ycount;
    $this->wcount=$wcount;
    $this->dcount=$dcount;
     layout(true);
    $this->page=$show;
    $this->display();
  }
  public function Creply_index(){
     $this->qx();
   $this->title = "借款申请数据";
		$keyword = I("keyword",'','trim');
		$keyword2 = I("keyword2",'','trim');
		$keyword3 = I("keyword3",'','trim');
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');
		$p = I("p",'','trim');
		if(!$p){
			$p=1;
		}
		$this->p = $p;

		$this->keyword = $keyword;
		$this->keyword2 = $keyword2;
		$this->keyword3 = $keyword3;
		$this->keyword4 = $keyword4;
		$this->keyword5 = $keyword5;

		/***********导入数据核对***************/

		$xls = I("xls",'','trim');
		$this->xls = $xls;
		$submit = I("submit",'','trim');
		 if ($xls && $submit=='导入数据') {
            vendor("PHPExcel.PHPExcel");
            $file_name='./'.$xls;//$info[0]['savepath'].$info[0]['savename'];
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++)
            {	
				//先查询id 
                $id=trim($objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue());
				//查询姓名
                $username=trim($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
				//查询身份证号
				$cardno=trim($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
				//查询手机号
				$shouji=trim($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
				//查询状态
				$status=trim($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());
				//查询创建
				$addtime=strtotime($objPHPExcel->getActiveSheet()->getCell("H".$i)->getValue());
				
				
				
				//核实记录是否是真实的
				$shuju = D("shuju");
				$ss = $shuju->where(array('Id' => $id))->find();
				if($ss){
					//echo 'id='.$id.$username.'=='.$ss['name'].$cardno.'=='.$ss['shenno'].$shouji.'=='.$ss['shouji'].$addtime.'=='.$ss['addtime'];exit;
					if($ss['status']==0){

						if($username==$ss['name'] && $cardno==$ss['shenno'] && $shouji==$ss['shouji'] && $addtime==$ss['addtime']){
							//修改状态
							if($status=='核实成功'){$sstno=1;}else if($status=='订单无效'){$sstno=2;}else if($status=='订单未核实'){$sstno=0;}else{$this->error("ID为!".$id."的数据状态格式不对");	exit;	}
							$sxs = $shuju->where(array('Id' => $id))->save(array('status' => $sstno));
							//echo $sstno;exit;
							if($sxs && $sstno==1){
								//计算分成了
								$chantype=$ss['type'];
								$chanid=$ss['chanid'];
								if($ss['type']==1){
									$uid1=$ss['chanid'];
									$Payorder = D("card");
									$ck = $Payorder->where(array('id' => $uid1))->find();
									$bili1=$ck['pay'];
									$eryong=$ck['eryong'];
									$sanyong=$ck['sanyong'];
									$ttttxxxt="信用卡";
								}else if($ss['type']==2){
									$uid1=$ss['chanid'];
									$Payorder = D("loan");
									$ck = $Payorder->where(array('id' => $uid1))->find();
									$bili1=$ck['pay'];
									$eryong=$ck['eryong'];
									$sanyong=$ck['sanyong'];
									$ttttxxxt="产品";
								}
								
								$vi=$bili1;//vip
								$mo=$bili1;
								$user = D("user");
								$info2 = $user->where(array('mobile' => $ss['tuiuser']))->find();
								if($info2){
								$rel=$info2['id'];
								//echo $mo;
									//一级分成
									$y=$user->where(array('id'=>$rel))->setInc('price',$bili1);
									if($y){
										$type=1;
										$user1=$this->fenname($rel);//$info2['mobile'];
										//存入金额记录
										$text=$ttttxxxt.'推广分成';
										$mobile=$user->where(array('id'=>$rel))->setDec('mobile',$zh);
										$momsg=$this->getusermoney($user1,$mobile,$bili1,$type,$text,$chantype,$chanid);
										if($momsg){
											//查询一级的id是否有上级是否有二级
											$erji = $user->where(array('id' => $rel))->find();
											if($erji && $erji['rel']!=0){
												$erjirel=$erji['rel'];
												//二级分成
												//$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=$eryong;
												$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
												if($y2){
													$type=1;
													$user2=$this->fenname($erjirel);//$erji['mobile'];
													//存入金额记录
													$text=$ttttxxxt.'推广费二级分成';
													$momsg2=$this->getusermoney($user2,$erji['mobile'],$mo2,$type,$text,$chantype,$chanid);
													if($momsg2){
														//查询二级的id是否有上级  是否有三级
														$sanji = $user->where(array('id' => $erjirel))->find();
														if($sanji && $sanji['rel']!=0){
															$sanjirel=$sanji['rel'];
															//三级分成
															//$fen3=C("cfg_fencheng3");//分成百分比
															$mo3=$sanyong;
															$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
															if($y3){
																$type=1;
																$user3=$this->fenname($sanjirel);//$sanji['mobile'];
																//存入金额记录
																$text=$ttttxxxt.'推广费三级分成';
																$momsg3=$this->getusermoney($user3,sanji['mobile'],$mo3,$type,$text,$chantype,$chanid);
																//echo $snjiarel;exit;
																if($momsg3){
																	//$data['status'] = 1;
																	//$data['msg'] = "分成成功";	
																	//$this->success("分成成功!");
																}
															}



														}
													}
												}
											}


											
										}
										//$this->success("分成成功!");
										//二级
									}	
								}

								
							
							}
						}else{
							$this->error("ID为".$id."的数据比对不一致，请重新核实");	
						}
					}
				}
				
               // M('Member')->add($data);
            }
			//print_r($data);exit;
            $this->success('导入成功！');exit;
        }

		/***********导入数据核对end***************/

		
		$where = array();
		if($keyword || $keyword2 || $keyword3 || $keyword4 || $keyword5){
			if($keyword2){
				
				$key2['tuiuser']  = array('like',"%{$keyword2}%");
				//查询推广人姓名
				$Payorder = D("user");
				$info = $Payorder->where(array('nick' => $keyword2))->find();
				if($info){
					$keyword2=$info['mobile'];
					$key2['tuiuser'] = array('like',"%{$keyword2}%");
				}
				$key2['_logic'] = 'or';
				$map1[1] = $key2;
			}
			if($keyword3){
				$key3['chanid'] = $keyword3;
				$key3a['name'] = array('like',"%{$keyword3}%");
				//查询推广人姓名
				$Payorder = D("loan");
				$info = $Payorder->where($key3a)->select();
				//print_r($info);exit;
				if($info){
					$keyword3=$info['id'];
					//echo $keyword3;exit;
					for($xx=0;$xx<count($info);$xx++){
						$key3[$xx]['chanid']=$info[$xx]['id'];
					}
					//$key3['chanid'] = array('like',"%{$keyword3}%");
				}
				$key3['_logic'] = 'or';
				$map1[2] = $key3;
			}

			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[3] = $key4;
			}

			$where['shenno'] = array('like',"%{$keyword}%");
			$where['name']  = array('like',"%{$keyword}%");
			$where['shouji'] = array('like',"%{$keyword}%");
			$where['_logic'] = 'or';
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		
		

			
			$map['type']  = array('eq',2);
			$map['status']=0;

			$submit = I("submit",'','trim');
		if($submit=='导出数据'){
			$xlsName  = "借款审核记录";
			$xlsCell  = array(
				array('id','序列'),
				array('name','姓名'),
				array('shenno','身份证号'),
				array('shouji','手机号'),
				array('chanid','产品名字'),
				array('tuiuser','推荐人'),
				array('status','核实状态(核实成功|订单无效)'),
				array('addtime','创建时间'),
			);
			$xlsModel = M('shuju');
			$xlsData  = $xlsModel->Field('id,name,shenno,shouji,chanid,tuiuser,type,status,addtime')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$uu=$xlsData[$k]['tuiuser'];
				$Payorder = D("user");
				$info = $Payorder->where(array('mobile' => $uu))->find();
				$xlsData[$k]['tuiuser']=$info['nick'].'/'.$xlsData[$k]['tuiuser'];

				//查询产品名称
				if($xlsData[$k]['type']==1){
					$uid1=$xlsData[$k]['chanid'];
					$Payorder = D("card");
					$ck = $Payorder->where(array('id' => $uid1))->find();
					$xlsData[$k]['chanid']=$ck['name'];
				}else if($xlsData[$k]['type']['type']==2){
					$uid1=$xlsData[$k]['chanid'];
					$Payorder = D("loan");
					$ck = $Payorder->where(array('id' => $uid1))->find();
					$xlsData[$k]['chanid']=$ck['name'];
				}


				if($xlsData[$k]['status']==1){
					$xlsData[$k]['status']='核实成功';
				}else if($xlsData[$k]['status']==2){
					$xlsData[$k]['status']='订单无效';
				}else if($xlsData[$k]['status']==0){
					$xlsData[$k]['status']='订单未核实';
				}
				$xlsData[$k]['shouji'] = "\t".$xlsData[$k]['shouji']."\t";
				$xlsData[$k]['addtime'] = date("Y-m-d H:i:s", $v['addtime']);
				$xlsData[$k]['shenno'] = "\t".$xlsData[$k]['shenno']."\t";
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
		$Admin = D("shuju");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();


        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['chanid'];
        	$Payorder = D("loan");
			$info = $Payorder->where(array('id' => $uid1))->find();
			if($info){
				$list[$i]['bankname']=$info['name'];
				$list[$i]['img']=$info['img'];
				$list[$i]['pay']=$info['pay'];
				$list[$i]['eryong']=$info['eryong'];
				$list[$i]['sanyong']=$info['sanyong'];
			}
			//查询推荐人姓名
			$uu=$list[$i]['tuiuser'];
			$Payorder = D("user");
			$info = $Payorder->where(array('mobile' => $uu))->find();
			$list[$i]['nick']=$info['nick'];

        }  

		//获取所有产品信息
		$pro = D("loan");		
		$ck_pro = $pro->where()->select();		
		
		$this->ck_pro = $ck_pro;
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
  public function Creply_vague(){
     $this->qx();
    $pro = D("loan");		
		$ck_pro = $pro->where()->select();		
		
		$this->ck_pro = $ck_pro;
 
	$keyword3 = I("keyword3",'','trim');
	$keyword4 = I("keyword4",'','trim');
	$keyword5 = I("keyword5",'','trim');
 	$this->keyword3=$keyword3;
    $this->keyword4=$keyword4;
    $this->keyword5=$keyword5;
	$p = I("p",'','trim'); 
    $model = M('shuju');
    if($keyword3 || $keyword4 || $keyword5){
			
			if($keyword3){
				$key3['chanid'] = $keyword3;
				$key3a['name'] = array('like',"%{$keyword3}%");
				//查询推广人姓名
				$Payorder = D("loan");
				$info = $Payorder->where($key3a)->select();
				//print_r($info);exit;
				if($info){
					$keyword3=$info['id'];
					//echo $keyword3;exit;
					for($xx=0;$xx<count($info);$xx++){
						$key3[$xx]['chanid']=$info[$xx]['id'];
					}
					//$key3['chanid'] = array('like',"%{$keyword3}%");
				}
				$key3['_logic'] = 'or';
				$map1[2] = $key3;
			}

			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[3] = $key4;
			}

			$map['_complex'] = $map1;
		}
    	$User = D("shuju");
	$submit = I("submit",'','trim');
 	if($submit=='查看总站'){
    	  $count=$User->where($map)->count();
          $this->count=$count;
    }
    if($submit=='确定核对'){ 
    	$bl = I("bl",'','trim');
        if(!$bl){
        $this->error('请输入结算比例');
        }
  
	
        $mh=$User->where($map)->select();
   
        $mhid=array();
        for($i=0;$i<count($mh);$i++){
        $mhid[]=$mh[$i]['id'];
        }
        $z=$User->where($map)->count();//4
        echo $z;
        $j=floor($bl*$z);//2
        $cid=array();
        for($i=0;$i<$j;$i++){
        	$cid[]=$mhid[$i];//$i=0,1
        }
        $sid=array();
        for($i=$j;$i<$z;$i++){
        	$sid[]=$mhid[$i];//$i=2,3
        }
        $cids = join(',', $cid);
        //echo $cids;
        $sids = join(',', $sid);
        //echo $sids;
      
        $data['id']=array('in',$cids);
      	$dd['id']=array('in',$sids);
    
		$status = $User->where($data)->save(array('status' => 1));
      	$status_1 = $User->where($dd)->save(array('status' => 2));
		if($status||$status_1){
			if($info['type']==1){
				$url='Admin/kashen';
			}else{
				$url='Admin/jieshen';
			}
			$this->redirect($url, array('keyword'=>$keyword,'keyword2'=>$keyword2,'keyword3'=>$keyword3,'keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 3, '结算成功...即将跳转页面');exit;
		}
    	else{
        	$this->error('操作错误');
        }
    }
     layout(true);
    $this->display();
  }
  public function Goods_edit(){
    layout(true);
    $this->display();
  }

  public function Qun_index(){
    layout(true);
    $this->display();
  }
  public function Reply_loan(){
    layout(true);
    $this->display();
  }

  public function Center_index(){
     $this->qx();
    $keyword4 = I("keyword4",'','trim');
	$keyword5 = I("keyword5",'','trim');
 
	$p = I("p",'','trim'); 
	if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				
		}
		$Admin=D("admin");
        $qx['gid']=array('gt',-1);
    	$count=$Admin->where($qx)->count();
        $count=$count+1;
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$data = $Admin->where($qx)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        for($i=0;$i<count($data);$i++){
            $User = D("shuju");
           $z=$User->where($map)->where(array('lyname'=>$data[$i]['username']))->count();
       	   $ys=$User->where($map)->where(array('lyname'=>$data[$i]['username']))->where(array('status'=>1))->count();
           $ws=$User->where($map)->where(array('lyname'=>$data[$i]['username']))->where(array('status'=>2))->count();
           $ds=$User->where($map)->where(array('lyname'=>$data[$i]['username']))->where(array('status'=>0))->count();
   			$data[$i]['ys']=$ys;
          	$data[$i]['ws']=$ws;
          $data[$i]['ds']=$ds;
           $data[$i]['z']=$z;
        }
	
	 $count=$User->count();
     $ycount=$User->where(array('status'=>1))->count();
     $wcount=$User->where(array('status'=>2))->count();
     $dcount=$User->where(array('status'=>0))->count();
     $this->data=$data;
    $this->count=$count;
    $this->ycount=$ycount;
    $this->wcount=$wcount;
    $this->dcount=$dcount;
     layout(true);
    $this->page=$show;
    $this->display();
  }
   public   function curlQuery($url) {
        //设置附加HTTP头
        $addHead = array(
            "Content-type: application/json"
        );
     
        //初始化curl，当然，你也可以用fsockopen代替
        $curl_obj = curl_init();
     
        //设置网址
        curl_setopt($curl_obj, CURLOPT_URL, $url);
     
        //附加Head内容
        curl_setopt($curl_obj, CURLOPT_HTTPHEADER, $addHead);
     
        //是否输出返回头信息
        curl_setopt($curl_obj, CURLOPT_HEADER, 0);
     
        //将curl_exec的结果返回
        curl_setopt($curl_obj, CURLOPT_RETURNTRANSFER, 1);
     
        //设置超时时间
        curl_setopt($curl_obj, CURLOPT_TIMEOUT, 15);
     
        //执行
        $result = curl_exec($curl_obj);
     
        //关闭curl回话
        curl_close($curl_obj);
     
        return $result;
    }
     
    //简单处理下url，sina对于没有协议(http://)开头的和不规范的地址会返回错误
    public   function filterUrl($url = '') {
        $url = trim(strtolower($url));
        $url = trim(preg_replace('/^http:\/\//', '', $url));
        if ($url == '')
            return false;
        else
            return urlencode('http://' . $url);
    }
     
    //根据长网址获取短网址
    public  function sinaShortenUrl($long_url) {
        //拼接请求地址，此地址你可以在官方的文档中查看到
        $url = 'http://api.t.sina.com.cn/short_url/shorten.json?source=912538945&url_long=' . $long_url;
     
        //获取请求结果
        $result = $this->curlQuery($url);
     
        //下面这行注释用于调试，你可以把注释去掉看看从sina返回的信息是什么东西
        //print_r($result);exit();
     
        //解析json
        $json = json_decode($result);
     
        //异常情况返回false
        if (isset($json->error) || !isset($json[0]->url_short) || $json[0]->url_short == '')
            return false;
        else
            return $json[0]->url_short;
    }
	
	/**
     * 调用新浪接口将长链接转为短链接
     * @param  string        $source     默认调用官方的key
     * @param  array|string  $url_long  长链接，支持多个转换（需要先执行urlencode)
     * @param  string        $api         默认调用新浪微博的接口 自定义需要换成开发文档的地址
     * @return array
     */

	public function getSinaShortUrl($url_long , $source = "2849184197", $api = "http://api.weibo.com/2/short_url/shorten.json" )
	{
		// 参数检查
		if(empty($source) || !$url_long){
			return false;
		}
		// 参数处理，字符串转为数组
		if(!is_array($url_long)){
			$url_long = array($url_long);
		}
		// 拼接url_long参数请求格式
		$url_param = array_map(function($value){
			return '&url_long='.urlencode($value);
		}, $url_long);
		$url_param = implode('', $url_param); 
		// 请求url
		$request_url = sprintf($api.'?source=%s%s', $source, $url_param);
		$result = [];
		// 执行请求
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_URL, $request_url);
		$data = curl_exec($ch);
		if($error=curl_errno($ch)){
			return false;
		}
		curl_close($ch);
		$result = json_decode($data, true);
		return $result;
	}
	
    public function url(){
		$url = I('url');
        $data=$this->getSinaShortUrl($url);
		$data['url'] = $data['urls'][0]['url_short'];
        $this->ajaxReturn($data);exit;
    }
    	
  	public function allurl(){
        $uid=session('admin_user');
		$url = I('url');
      	$Payorder = D("card");
		$info = $Payorder->where(array('type'=>0))->select();

        foreach ($info as $k => $v)
        {	
          $id=$v['id'];
          $url= "http://".$_SERVER['SERVER_NAME'].U('/Card/read',array('id'=>$id,'tid'=>$uid));
          $data_array=$this->getSinaShortUrl($url);
          $url_short = $data_array['urls'][0]['url_short'];  //短链接
          $name=$v['name'];
          $data.= $name.':'.$url_short.'   
          ';
        }
        $this->ajaxReturn($data);
        exit;
       
    }
	protected function islogin(){
		if(!session('admin_user') ){
			return false;
		}
		return true;
	}
	
	protected function setlogin($name = ''){
		if(empty($name)){
			session('admin_user',null);
		}else{
			session('admin_user',$name);
		}
	}
	
	protected function getlogin(){
		return session('admin_user');
	}
	
	protected function getpass($pass){
		return md5('*&>'.md5($pass) );
	}
	
	//导出操作
    public function exportExcel($expTitle,$expCellName,$expTableData){
        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $expTitle.date('_Ymd_His');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        vendor("PHPExcel.PHPExcel");
        $objPHPExcel = new \PHPExcel();
        $cellName = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','AA','AB','AC','AD','AE','AF','AG','AH','AI','AJ','AK','AL','AM','AN','AO','AP','AQ','AR','AS','AT','AU','AV','AW','AX','AY','AZ');
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:'.$cellName[$cellNum-1].'1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle.'  Export time:'.date('Y-m-d H:i:s'));//第一行标题
        for($i=0;$i<$cellNum;$i++){
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i].'2', $expCellName[$i][1]);
        }
        // Miscellaneous glyphs, UTF-8
        for($i=0;$i<$dataNum;$i++){
            for($j=0;$j<$cellNum;$j++){
                $objPHPExcel->getActiveSheet(0)->setCellValue($cellName[$j].($i+3), $expTableData[$i][$expCellName[$j][0]]);
            }
        }
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="'.$xlsTitle.'.xls"');
        header("Content-Disposition:attachment;filename=$fileName.xls");//attachment新窗口打印inline本窗口打印
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save('php://output');
        exit;
    }

	
	
	public function index(){
		if(!$this->islogin()){
			$this->redirect(GROUP_NAME.'/login');
		}else{
			$this->redirect(GROUP_NAME.'/Main_index');
		}
	}
	
	
	public function login(){
		$this->title="登录系统";
		$this->u=0;
		if(IS_POST){
			$_validate = array(
				array('username','require','用户名不能为空!'),
				array('password','require','密码不能为空!'),
			);
			$Admin = D("admin");
			$Admin-> setProperty("_validate",$validate);
			$result = $Admin->create();
			if(!$result){
				$this->error($Admin->getError());
			}
			$username = I('username','','trim');
			$password = I('password','','trim');
			$password = $this->getpass($password);
			$tmp = $Admin->where(array('username' => $username,'password' => $password))
						 ->find();
			if($tmp){
				if($tmp['status']){
					//写入登录记录
					$Admin_login = D("admin_login");
					$Admin_login->add(array(
						'username'  => $username,
						'logintime' => time(),
						'loginip'	=> get_client_ip()
					));
					//更新最近登录时间
					$this->setlogin($username);
					$Admin->where(array('username' => $username))
						  ->save(array('lastlogin' => time() ));
					$this->success('登录成功!',U(GROUP_NAME.'/Main_index'));exit;
				}else{
					$this->u=1;
					$this->titles="该账户已被禁用";//echo "该账户已被禁用";//$this->error('该账户已被禁用!');
				}
			}else{
				$this->u=1;
				$this->titles="用户名或密码错误";//echo "用户名或密码错误";//$this->error('用户名或密码错误!');
			}
		}
		layout(true);
		$this->display();
		
	}

	public function logout(){
		$this->title="注销登录";
		layout(true);
		$this->setlogin('');
		$this->redirect(U(GROUP_NAME.'/Index/login'));
	}
	
	public function Main_index(){
		$this->title="系统设置";
		layout(true);
		$this->display();
	}
	
	 //管理员列表
    public function Admin_index(){
        $this->title = '合伙人列表';
        $this->qx();
        $Admin = D("admin");
        $where = array();
        if(IS_POST){
            $keyword = I('keyword','','trim');
            if($keyword){
                $where['username'] = array('like',"%{$keyword}%");
                $this->keyword = $keyword;
            }
        }
        $where['gid']=array('gt',-1);
        $count = $Admin->where($where)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
    }

	 //添加管理员
    public function Admin_add(){
        $Admin = D("admin");
        $this->title = '添加合伙人';
        $this->qx();
        if(IS_POST){
            //添加
            $validate = array(
                array('username','require','管理员名称不能为空!'),
                array('username','','管理员名称已经存在！',0,'unique',1),
                array('password','require','管理员密码不能为空!'),
                array('password_confirm','password','两次密码输入不一致!',0,'confirm'),
            );
            $Admin->setProperty("_validate",$validate);
            if(!$Admin->create()){
                $this->error($Admin->getError());
            }
            $_POST['addtime'] = time();
            $_POST['lastlogin'] = time();
            $_POST['gid'] = 0;//管理组预留
            $_POST['password'] = $this->getpass($_POST['password']);
            $status = $Admin->add($_POST);
            if(!$status){
                $this->error('添加失败!');
            }
            $this->success('添加成功!');
            exit;
        }
		 layout(true);
        $this->display();
    }
  public function Daili_add(){
        $this->title='添加团队';
        $this->glqx();
        $Admin = D("admin");
        $admin=session('admin_user');
        $name_list=$Admin->where(array('id'=>$admin))->find();
        $name=$name_list['username'];
 
        if(IS_POST){
            //添加
            $validate = array(
                array('username','require','管理员名称不能为空!'),
                array('username','','管理员名称已经存在！',0,'unique',1),
                array('password','require','管理员密码不能为空!'),
                array('password_confirm','password','两次密码输入不一致!',0,'confirm'),
            );
            $Admin->setProperty("_validate",$validate);
            if(!$Admin->create()){
                $this->error($Admin->getError());
            }
            $_POST['addtime'] = time();
            $_POST['lastlogin'] = time();
            $_POST['gid'] = -1;//管理组预留
    
            $_POST['lyname'] = $name;//管理组预留
            
        
            $_POST['password'] = $this->getpass($_POST['password']);
            $status = $Admin->add($_POST);
            if(!$status){
                $this->error('添加失败!');
            }
            $this->success('添加成功!');
            exit;
        }
		 layout(true);
        $this->display();
    }

    //修改管理信息
    public function Admin_edit(){
       $this->qx();
        $this->title = '修改合伙人信息';
        $Admin = D("admin");
        if(IS_POST){
            $editId = I('editId',0,'trim');
            $username = I('username','','trim');
            $price = I('price','','trim');
           
            $data = $Admin->where(array('id'=>$editId))->find();
            if(!$data){
                $this->error('管理员ID不存在!');
            }
            $status = I('status',1,'trim');
            //判断是否为唯一未禁用管理且操作将禁用
            $num = $Admin->where(array('status' => 1))->count();
            if($num == 1 && $data['status'] == 1 && $status == 0){
                $this->error('禁用所有管理员将无法管理系统!');
            }
            //验证用户名是否存在
            $data = $Admin->where(array('username' => $username))->find();
            if(!$data || $data['id'] == $editId){
                $arr = array(
                    'username' => $username,
                    'status'   => $status,
                    'price'=>$price
                );
                $Admin->where(array('id' => $editId))->save($arr);
            
                $this->success('修改成功!');
            }else{
                $this->error('管理名称已存在!');
            }
        }
        $editId = I('get.editid',0,'trim');
        $data = $Admin->where(array('id' => $editId))->find();
        if(!$data){
            $this->error('管理员ID不存在!');
        }
        $this->data = $data;
		 layout(true);
        $this->display();
    }
public function Admin_edits(){

        $this->title = '修改管理信息';
        $Admin = D("admin");
        if(IS_POST){
            $editId = I('editId',0,'trim');
            $username = I('username','','trim');
            $password = I('password','','trim');
            $password_confirm = I('password_confirm','','trim');
          
            $data = $Admin->where(array('id'=>$editId))->find();
            if(!$data){
                $this->error('管理员ID不存在!');
            }
          
            //验证用户名是否存在
            $data = $Admin->where(array('username' => $username))->find();
            if(!$data || $data['id'] == $editId){
                $arr = array(
                    'username' => $username,
                    'status'   => 1
                );
                $Admin->where(array('id' => $editId))->save($arr);
                //验证密码
                if(!empty($password) && $password != $password_confirm){
                    $this->error('两次密码输入不一致!');
                }else{
                    $Admin->where(array('id' => $editId))->save(array('password' => $this->getpass($password)));
                }
                $this->success('修改成功!');
            }else{
                $this->error('管理名称已存在!');
            }
        }
        $editId = I('get.editid',0,'trim');
        $data = $Admin->where(array('id' => $editId))->find();
        if(!$data){
            $this->error('管理员ID不存在!');
        }
        $this->data = $data;
		 layout(true);
        $this->display();
    }
    //删除管理员
    public function Admin_del(){
       $this->qx();
        $this->title='删除管理员';
        $id = I('get.id',0,'trim');
        $Admin = D("admin");
        //判断是否为唯一未禁用管理员
        $num = $Admin->where(array('status' => 1))->count();
        if($num == 1){
            $this->error('必须保留一个未禁用管理员!');
        }
        $status = $Admin->delete($id);
        if(!$status){
            $this->error('删除失败!');
        }
        $this->success('删除成功!');
    }


    //修改自己信息
    public function Admin_chagemypass(){
        $username = $this->getlogin();
        $Admin = D("admin");
        $data = $Admin->where(array('id' => $username))->find();
        if(!$data){
            $this->setlogin('');
            $this->error('非法操作!',U(GROUP_NAME.'/Index/login'));
        }
        $this->redirect(U(GROUP_NAME.'/Admin_edits',array('editid'=>$data['id'])));
    }








    //系统设置
	public function System_index(){
        $this->title = '系统设置';
        $this->qx();
        if(IS_POST){
            $sitename = I('sitename','','trim');
            $sitetitle = I('sitetitle','','trim');
            if(empty($sitename) || empty($sitetitle)){
                $this->error('网站标题、网站名称不能为空!');
            }
            $file='./My/Home/Conf/config.site.php';;
            $arr = array_keys($_POST);
            $siteConfig = array();
            for($i=0;$i<count($arr);$i++){
                $siteConfig['cfg_'.$arr[$i]] = htmlspecialchars($_POST[$arr[$i]]);
            }
			//$siteConfig=array('name' => 'aree');
            if(!writeArr($siteConfig,$file)){
                $this->error('保存失败!');
            }
            //print_r($siteConfig);
           // echo $file;exit;
            $this->success('保存成功!');
            exit;
        }
        layout(true);
        $this->display();
    }
	public function Img_index(){
		$this->title = "轮播图管理";
		$Admin = D("img");
        $count = $Admin->where($where)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();	
	}
	//删除自由块
	public function Img_del(){
		$this->title = "删除自由块";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("img");
		$status = $Block->where(array('Id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	//删除自由块
	public function Tag_del(){
		$this->title = "删除自由块";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("tag");
		$status = $Block->where(array('Id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	//
	public function block_index(){
		$this->title = "帮助中心";
		$Admin = D("block");
        $count = $Admin->where($where)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();	
	}

	//添加自由块
	public function Img_add(){
		$this->title = "添加自由块";
		$Block = D("img");
		if(IS_POST){
			$name = I("img",'','trim');
			if(!$name){
				$this->error("图片不能为空!");
			}

			$_POST['addtime'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}

	//编辑自由块
	public function Img_edit(){
		$this->title = "修改自由块";
		$id = I("get.id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("img");
		if(IS_POST){
			//判断新名称是否重复
			$name = I("img",'','trim');
			if(!$name){
				$this->error("图片不能为空!");
			}
			$status = $Block->where(array('Id' => $id))->save($_POST);
			if(!$status){
				$this->error("操作失败!");
			}
			$this->success("修改成功!");
			exit;
		}
		$data = $Block->where(array('Id' => $id))->find();
		$this->data = $data;
		layout(true);
		$this->display();
	}
	public function Tag_add(){
		$this->title = "添加自由块";
		$Block = D("tag");
		if(IS_POST){
			$name = I("img",'','trim');
			if(!$name){
				$this->error("图片不能为空!");
			}

			$_POST['addtime'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}

	//编辑自由块
	public function Tag_edit(){
		$this->title = "修改自由块";
		$id = I("get.id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("tag");
		if(IS_POST){
			//判断新名称是否重复
			$name = I("img",'','trim');
			if(!$name){
				$this->error("图片不能为空!");
			}
			$status = $Block->where(array('Id' => $id))->save($_POST);
			if(!$status){
				$this->error("操作失败!");
			}
			$this->success("修改成功!");
			exit;
		}
		$data = $Block->where(array('Id' => $id))->find();
		$this->data = $data;
		layout(true);
		$this->display();
	}
	//添加自由块
	public function block_add(){
		$this->title = "添加自由块";
		$Block = D("block");
		if(IS_POST){
			$name = I("name",'','trim');
			if(!$name){
				$this->error("调用名称不能为空!");
			}
			$count = $Block->where(array('name' => $name))->count();
			if($count){
				$this->error("调用名称不能重复!");
			}
			$_POST['addtime'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}
	
	//删除自由块
	public function block_del(){
		$this->title = "删除自由块";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("block");
		$status = $Block->where(array('id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	//编辑自由块
	public function block_edit(){
		$this->title = "修改自由块";
		$id = I("get.id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("block");
		if(IS_POST){
			//判断新名称是否重复
			$name = I("name",'','trim');
			if(!$name){
				$this->error("调用名称不能为空!");
			}
			$info = $Block->where(array('name' => $name))->find();
			if($info && $info['id'] != $id){
				$this->error("调用名称不能重复!");
			}
			$status = $Block->where(array('id' => $id))->save(array(
				'name' => $name,
				'cont' => I("cont",'','')
			));
			if(!$status){
				$this->error("操作失败!");
			}
			$this->success("修改成功!");
			exit;
		}
		$data = $Block->where(array('id' => $id))->find();
		$this->data = $data;
		layout(true);
		$this->display();
	}
	
	
	public function text_index(){
		$this->title = "协议设置";
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			$where['title'] = array('like',"%{$keyword}%");
		}
		$Admin = D("text");
        $count = $Admin->where($where)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->where($where)->order('addtime')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	//添加文章
	public function text_add(){
		$this->title = "添加文章";
		$Block = D("text");
		if(IS_POST){
			$name = I("title",'','trim');
			if(!$name){
				$this->error("文章名称不能为空!");
			}
			$count = $Block->where(array('title' => $name))->count();
			if($count){
				$this->error("文章名称不能重复!");
			}
			if(!$_POST['type']){
				$this->error("分类不能为空!");
			}
			$_POST['addtime'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}
	
	//编辑文章
	public function text_edit(){
		$this->title = "编辑文章";
		$id = I("get.id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("text");
		if(IS_POST){
			//判断新名称是否重复
			$name = I("title",'','trim');
			if(!$name){
				$this->error("文章名称不能为空!");
			}
			$status = $Block->where(array('Id' => $id))->save($_POST);
			if(!$status){
				$this->error("操作失败!");
			}
			$this->success("修改成功!");
			exit;
		}
		$data = $Block->where(array('Id' => $id))->find();
		$this->data = $data;
		layout(true);
		$this->display();
	}
	
	public function text_del(){
		$this->title = "删除文章";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("text");
		$status = $Block->where(array('Id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	//用户列表
		public function User_index(){
      	
		$this->title = "用户管理";
       
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			$map['mobile'] =array('like',"%{$keyword}%");
		}
		$User = D("user");
		$count = $User->where($map)->count();
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $User->where($map)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	
		$this->list = $list;
		$this->page = $show;
		layout(true);
		$this->display();
	}
 
	public function User_add(){
       $this->qx();
		$this->title = "添加会员";
		$Block = D("user");
		if(IS_POST){
			$name = I("nick",'','trim');
			if(!$name){
				$this->error("会员姓名不能为空!");
			}
			$pho = I("mobile",'','trim');
			if(!$pho){
				$this->error("手机号不能为空!");
			}
			$count = $Block->where(array('mobile' => $pho))->count();
			if($count){
				$this->error("手机号不能重复!");
			}
			$pp = I("password",'','trim');
			if(!$pp){
				$this->error("会员密码不能为空!");
			}
			

			$pass=md5($pp.'^L^');       
			$_POST['password'] = $pass;
            $_POST['vip'] = '1';
			$_POST['time'] = time();
			$_POST['reg_time'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}

	public function User_edit(){
       $this->qx();
        $this->title='编辑会员';
        $Cat = D("user");
        $cid = I("get.id",0,'trim');
        if(!$cid){
            $this->error("参数有误!");
        }
        $this->cid = $cid;
        $info = $Cat->where(array('id'=>$cid))->find();
        if(!$info){
            $this->error("用户不存在!");
        }
        $this->info = $info;
        if(IS_POST){
            $name = I("nick",'','trim');
			if(!$name){
				$this->error("用户姓名不能为空!");
			}
			$pho = I("mobile",'','trim');
			if(!$pho){
				$this->error("手机号不能为空!");
			}
			
			
			$vip = I("vip");
				$d=array(
					'nick' => $name,
					'mobile' => $pho,
					'vip' => $vip
				);
            $status = $Cat->where(array('id'=>$cid))->save($d);
            if(!$status){
                $this->error("修改失败!");
            }
            $this->success("修改成功:");
            exit;
        }
		layout(true);
        $this->display();
    }
	
	
	//删除用户
	public function User_del(){
        $this->title='删除用户';
        $id=I('id');//获取post提交的值并获取id值
        $Id=I('Id');
    	$ids = join(',', $id);
        if(!$ids&&!$Id){
            $this->error("参数有误!");
        }
        $User = D("user");

        // 获取用户手机号
      if($ids){
      $status = $User->where($ids)->delete();
      }
       if($Id){
      $status = $User->where(array('id'=>$Id))->delete();
      }
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除用户成功!");
	}



  //用户列表
		public function Qudao_index(){
      	
		$this->title = "下单员管理";

		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$where = array();
		if($keyword){
			//$where= 'nick like "%{$keyword}" ';
			$where['mobile'] = array('like',"%{$keyword}%");
			$where['nick']  = array('like',"%{$keyword}%");
			$where['_logic'] = 'or';
			
			
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
 
		
		$User = D("qudao");
		$count = $User->where($map)->count();
		$Page  = new \Think\Page($count,20);
		$Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
		$show  = $Page->show();
		$list = $User->where($map)->order('id Desc')->limit($Page->firstRow.','.$Page->listRows)->select();
	
		$this->list = $list;
		$this->page = $show;
		layout(true);
		$this->display();
	}
 
	public function Qudao_add(){
       $this->qx();
		$this->title = "添加下单员";
        
		$Block = D("qudao");
		if(IS_POST){
			$name = I("nick",'','trim');
			if(!$name){
				$this->error("会员姓名不能为空!");
			}
			$pho = I("mobile",'','trim');
			if(!$pho){
				$this->error("手机号不能为空!");
			}
			$count = $Block->where(array('mobile' => $pho))->count();
			if($count){
				$this->error("手机号不能重复!");
			}
			$pp = I("password",'','trim');
			if(!$pp){
				$this->error("会员密码不能为空!");
			}
			

			$pass=md5($pp.'^L^');       
          
			$_POST['password'] = $pass;
            $_POST['vip'] = '1';
			$_POST['time'] = time();
			$_POST['reg_time'] = time();
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}
	public function Qudao_edit(){
       $this->qx();
        $this->title='编辑会员';
        $Cat = D("qudao");
        $cid = I("get.id",0,'trim');
        if(!$cid){
            $this->error("参数有误!");
        }
        $this->cid = $cid;
        $info = $Cat->where(array('id'=>$cid))->find();
        if(!$info){
            $this->error("用户不存在!");
        }
        $this->info = $info;
        if(IS_POST){
            $name = I("nick",'','trim');
			if(!$name){
				$this->error("用户姓名不能为空!");
			}
			$pho = I("mobile",'','trim');
			if(!$pho){
				$this->error("手机号不能为空!");
			}
			
			
			$vip = I("vip",'','trim');
	

				$d=array(
					'nick' => $name,
					'mobile' => $pho,
					'vip' => $vip
				);
            $status = $Cat->where(array('id'=>$cid))->save($d);
            if(!$status){
                $this->error("修改失败!");
            }
            $this->success("修改成功:");
            exit;
        }
		layout(true);
        $this->display();
    }
	
	
	//删除用户
	public function Qudao_del(){
        $this->title='删除用户';
        $id=I('id');//获取post提交的值并获取id值
        $Id=I('Id');
    	$ids = join(',', $id);
        if(!$ids&&!$Id){
            $this->error("参数有误!");
        }
        $User = D("qudao");

        // 获取用户手机号
      if($ids){
      $status = $User->where($ids)->delete();
      }
       if($Id){
      $status = $User->where(array('id'=>$Id))->delete();
      }
        if(!$status){
            $this->error("删除失败!");
        }
        $this->success("删除用户成功!");
	}
	 public function changecz(){
		$this->title='下单员充值';
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("qudao");
			$status = $User->where(array('id' => $id))->setInc('price',$pass);
			if(!$status){
				$data['msg'] = "操作失败!";
			}else{
              	
				$data['status'] = 1;
              $user1=$id;
              $bili1=$pass;
			  $text="充值";
              $motype=1;//增加 
			  $type=2;//下单员
			  $mobile=$user->where(array('id'=>$id))->setDec('mobile',$zh);
              $momsg=$this->getusermoney($user1,$mobile$bili1,$motype,$text,$type);
			}
        }
		$this->ajaxReturn($data);
	}

	//修改用户密码
	public function changepass(){
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("user");
			//$pass = sha1(md5($pass));
			//$pass = $this->getpass($pass);
			$pass=md5($pass.'^L^');
			$status = $User->where(array('id' => $id))->save(array('password' => $pass));
			if(!$status){
				$data['msg'] = "操作失败!";
			}else{
				$data['status'] = 1;
			}
        }
		$this->ajaxReturn($data);
	}
  public function changeqdpassed(){
		$this->title='修改渠道密码';
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("qd");
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

  public function changepassed(){
		$this->title='修改管理密码';
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("admin");
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


	//结算
	public function jiesuanstatus(){
		$this->title = "结算";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$User = D("tixian");
		$info = $User->where(array('Id' => $id))->find();
		if(!$info){
			$this->error("订单不存在!");
		}
		$newstatus = 1;
		$status = $User->where(array('Id' => $id,'status'=>0))->save(array('status' => $newstatus));
		if(!$status){
			$this->error("操作失败!");
		}
		//加入提现处理总额里面
		      $user1=$info['userid'];
              $bili1=$info['money'];
              $bili2=$info['money']-$info['moneys'];
			  $text="提现";
      		  $text2="提现手续费";
              $motype=2;//减少
              $type=1;//用户
			  $mobile2=$User->where(array('id'=>$id))->setDec('mobile',$zh);
      		  $momsg2=$this->getusermoney($user1,$mobile2,$bili2,$motype,$text2,$type);
		$this->success("结算成功!");
	}

	public function jiesuanstatus2(){
		$this->title = "结算";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$User = D("tixian");
		$info = $User->where(array('Id' => $id))->find();
		if(!$info){
			$this->error("订单不存在!");
		}
		$newstatus = 2;
		$status = $User->where(array('Id' => $id,'status'=>0))->save(array('status' => $newstatus));
		if(!$status){
			$this->error("操作失败!");
		}
		//执行退款给用户操作
      	$Mu=D('user');
        $res=$Mu->where(array('id'=>$info['userid']))->setInc('price',$info['money']);
      	if($res){
			  $user1=$info['userid'];
              $bili1=$info['money'];
			  $text="提现失败退还";
              $motype=1;//增加 
			  $type=1;//用户
			  $mobile1=$info['userid'];
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type);
        }
		$this->success("结算成功!");
	}


	


public function jiessyong(){
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("shuju");
			//$pass = sha1(md5($pass));
			//$pass = $this->getpass($pass);
			
			$status = $User->where(array('id' => $id))->save(array('pay' => $pass));
			if(!$status){
				$data['msg'] = "操作失败!";
			}else{
				$data['status'] = 1;
			}
        }
		$this->ajaxReturn($data);
	}


public function jiessyongss(){
		$data = array('status' => 0,'msg' => '未知错误');
        $id = I('post.id',0,'trim');
		$pass = I("post.pass",'','trim');
        if(!$id || !$pass){
            $data['msg'] = "参数有误!";
        }else{
        	$User = D("shuju");
			//$pass = sha1(md5($pass));
			//$pass = $this->getpass($pass);
			
			$status = $User->where(array('id' => $id))->save(array('pay' => $pass));
			if(!$status){
				$data['msg'] = "操作失败!";
			}else{
				$data['status'] = 1;
			}
        }
		$this->ajaxReturn($data);
	}




	
	public function card_sort(){
      $id=$_POST['id'];
      $sort=$_POST['sort'];
      echo "<pre>";
      print_r($id);
      echo "<br>";
       print_r($sort);
      $Md=D("card");
      for($i=0;$i<count($id);$i++){
        	$status=$Md->where(array('id'=>$id[$i]))->save(array('sort'=>$sort[$i]));
        }
      
      $this->redirect(GROUP_NAME.'/card_index');
  
  
    }
	public function card_index(){
		$this->title = "产品列表";
         $this->qx();
        $id=session('admin_user');
        $admin=D('admin');
        $gid=$admin->where(array('id'=>$id))->find();
        $this->uid=$id;
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;

		$where = array();
		if($keyword || $keyword4 || $keyword4){
			$where['name'] = array('like',"%{$keyword}%");
			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['time'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[1] = $key4;
			}
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		$map['type']="0";
		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
           if($gid!=1){
           $this->error('无权限');
           }
			$xlsName  = "信用卡数据";
			$xlsCell  = array(
				array('id','账号序列'),
				array('name','产品名称'),
				array('member','发放人数'),
				array('price','额度范围'),
				array('day','期限'),
				array('red','利息范围'),
				array('pay','产品佣金'),
				array('jiesuan','佣金结算方式'),
				array('pv','浏览量'),
				array('sday','审核时间'),
				array('link','申请地址'),
				array('time','创建时间'),
			);
			$xlsModel = M('card');
			$xlsData  = $xlsModel->Field('id,name,member,price,day,red,pay,jiesuan,pv,sday,link,time')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$xlsData[$k]['time'] = date("Y-m-d H:i:s", $v['time']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}


		$Admin = D("card");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->where($map)->order('sort')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->select();
         for($i=0;$i<count($list);$i++){
        	//查询银行
        	$b=$list[$i]['bank'];
        	$Payorder = D("bank");
			$info = $Payorder->where(array('id' => $b))->find();
			if($info){
				$list[$i]['bank']=$info['name'];
			}
			
			
			
        } 
      	
        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['id'];
        	$Payorder = D("shujus");
			$info = $Payorder->where(array('chanid' => $uid1))->count();
          $time=date('Y-m-d');
            $infos=$Payorder->where(array('chanid'=>$uid1))->where(array('time'=>$time))->count();
         
			$list[$i]['count']=$info;
             $list[$i]['counts']=$infos;
			
			}
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
public function card_xj(){
		$this->title = "下架列表";
         $this->qx();
        $id=session('admin_user');
        $admin=D('admin');
        $gid=$admin->where(array('id'=>$id))->find();
        $this->uid=$id;
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;

		$where = array();
		if($keyword || $keyword4 || $keyword4){
			$where['name'] = array('like',"%{$keyword}%");
			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['time'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[1] = $key4;
			}
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		$map['type']="1";
		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
           if($gid!=1){
           $this->error('无权限');
           }
			$xlsName  = "信用卡数据";
			$xlsCell  = array(
				array('id','账号序列'),
				array('name','产品名称'),
				array('member','发放人数'),
				array('price','额度范围'),
				array('day','期限'),
				array('red','利息范围'),
				array('pay','产品佣金'),
				array('jiesuan','佣金结算方式'),
				array('pv','浏览量'),
				array('sday','审核时间'),
				array('link','申请地址'),
				array('time','创建时间'),
			);
			$xlsModel = M('card');
			$xlsData  = $xlsModel->Field('id,name,member,price,day,red,pay,jiesuan,pv,sday,link,time')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$xlsData[$k]['time'] = date("Y-m-d H:i:s", $v['time']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}


		$Admin = D("card");
        $count = $Admin->where($map1)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->where($map)->order('sort')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
         for($i=0;$i<count($list);$i++){
        	//查询银行
        	$b=$list[$i]['bank'];
        	$Payorder = D("bank");
			$info = $Payorder->where(array('id' => $b))->find();
			if($info){
				$list[$i]['bank']=$info['name'];
			}
			
			
			
        } 
      	
        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['id'];
        	$Payorder = D("shujus");
			$info = $Payorder->where(array('chanid' => $uid1))->count();
          $time=date('Y-m-d');
            $infos=$Payorder->where(array('chanid'=>$uid1))->where(array('time'=>$time))->count();
         
			$list[$i]['count']=$info;
             $list[$i]['counts']=$infos;
			
			}
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
  public function card_inviteInfo(){
		$this->title='导流详情';
    	 $this->qx();
		$id = I('id',0,'trim');
        if(!$id){
            $this->error("参数有误!");
        }

       $Mj=M('shujus');
        $count = $Mj->where(array('chanid'=>$id))->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Mj->where(array('chanid'=>$id))->order('time')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->select();
       	
    	layout(true);
        $this->page=$show;
        $this->list=$list;
        $this->display();
    }
  public function card_type(){
		$this->title = "更改产品状态";
        $this->qx();
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$User = D("card");
		$info = $User->where(array('id' => $id))->find();
		if(!$info){
			$this->error("用户不存在!");
		}
		$newstatus = empty($info['type'])?1:0;
		$status = $User->where(array('id' => $id))->save(array('type' => $newstatus));
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("变更产品状态成功!");
	}
	
	public function card_edit(){
        $this->title='产品编辑';
        $this->qx();
        $Cat = D("card");
		$bank_list = D("bank");
        $cid = I("get.id",0,'trim');
		
        if(!$cid){
            $this->error("参数有误!");
        }
        $this->aid = $cid;
        $info = $Cat->where(array('id'=>$cid))->find();
        if(!$info){
            $this->error("栏目不存在!");
        }
		
		$bank = $bank_list->select();
		$this->bank = $bank;
        $this->info = $info;
		
		$bank_id = $Cat->field('bank')->where(array('id'=>$cid))->find();
		$bank_id=$bank_id['bank'];
		$bank_name = $bank_list->field('name')->where(array('id'=>$bank_id))->find();
		$bank_name=$bank_name['name'];
		$this->bank_name = $bank_name; //当前分类名称
		

        if(IS_POST){
            $name = I("name",'','htmlspecialchars');
            if(empty($name)){
                $this->error("栏目名称不能为空!");
            }
			$f = I("bank",0,'trim');
			if(!$f){
				$this->error("分类名称不能为空!");
			}
            $_POST['name'] = $name;
	
            $status = $Cat->where(array('id'=>$cid))->save($_POST);
            if(!$status){
                $this->error("修改失败!");
            }
            $this->success("修改成功","/Admin/card_index");
            exit;
        }
		layout(true);
        $this->display();
    }
	
	public function card_del(){
		$this->title = "删除产品";
        $this->qx();
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("card");
		$status = $Block->where(array('id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	public function card_add(){
		$this->title = "产品添加";
        $this->qx();
		$Block = D("card");
      
		if(IS_POST){
			$name = I("name",'','trim');
			if(!$name){
				$this->error("产品名称不能为空!");
			}
			$count = $Block->where(array('name' => $name))->count();
          	 $Dc=$Block->count();
            $_POST['sort']=$Dc+1;
			$value=$_POST['bq'];
           
            $value=implode(',',$value);
            $_POST['bq']=$value;
			$_POST['time'] = time();
			$_POST['type'] ='0';
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
			
			//查询银行
        	$Payorder = D("bank");
			$info = $Payorder->where()->select();
			if($info){
				$this->bank = $info;
			}
			//查询银行
        	$Payorder2 = D("banktype");
			$info2 = $Payorder2->where()->select();
			if($info2){
				$this->banktype = $info2;
			}
			//查询银行
        	$Payorder3 = D("tag");
			$info3 = $Payorder3->where()->select();
			if($info3){
				$this->tag = $info3;
			}
		
		layout(true);
		$this->display();
	}
	
	public function bank_index(){
		$this->title = "产品分类";
        $this->qx();
		$Admin = D("bank");
        $count = $Admin->where($where)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('time')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($where)
                       ->select();
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	public function bank_edit(){
        $this->title='编辑分类';
        $Cat = D("bank");
        $cid = I("get.id",0,'trim');
        if(!$cid){
            $this->error("参数有误!");
        }
        $this->aid = $cid;
        $info = $Cat->where(array('id'=>$cid))->find();
        if(!$info){
            $this->error("栏目不存在!");
        }
        $this->info = $info;
        if(IS_POST){
            $name = I("name",'','htmlspecialchars');
            if(empty($name)){
                $this->error("栏目名称不能为空!");
            }

            $_POST['name'] = $name;
            $status = $Cat->where(array('id'=>$cid))->save($_POST);
            if(!$status){
                $this->error("修改失败!");
            }
            $this->success("修改成功","/Admin/bank_index");
            exit;
        }
		layout(true);
        $this->display();
    }
	public function bank_del(){
		$this->title = "删除分类";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("bank");
		$status = $Block->where(array('id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	public function bank_add(){
		$this->title = "添加分类";
		$Block = D("bank");
		if(IS_POST){
			$name = I("name",'','trim');
			if(!$name){
				$this->error("银行名称不能为空!");
			}
			$count = $Block->where(array('name' => $name))->count();
			if($count){
				$this->error("银行名称不能重复!");
			}
			$_POST['time'] = time();
			$_POST['type'] ='0,1,2,3';
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}
	
	public function list_sort(){
      $id=$_POST['id'];
      $sort=$_POST['sort'];
      echo "<pre>";
      print_r($id);
      echo "<br>";
       print_r($sort);
      $Md=D("loan");
      for($i=0;$i<count($id);$i++){
        	$status=$Md->where(array('id'=>$id[$i]))->save(array('sort'=>$sort[$i]));
        }
      
      $this->redirect(GROUP_NAME.'/list_index');
  
  
    }
	public function list_index(){
		  $this->title = "产品列表";
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
     	 $keyword2 = I("keyword2",'','trim');
		$this->keyword2 = $keyword2;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;

		$where = array();
		if($keyword || $keyword2|| $keyword4 || $keyword5){
			$where['name'] = array('like',"%{$keyword}%");
            if($keyword2){
                if($keyword2==1){
                 $key2['type']='上架';
                }else{
                $key2['type']='下架';
                }
               $map1[2]=$key2;
            }
			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['time'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[1] = $key4;
			}
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
			$xlsName  = "借贷产品数据";
			$xlsCell  = array(
				array('id','账号序列'),
				array('name','产品名称'),
				array('type','产品分类'),
				array('member','申请人数'),
				array('price','额度范围'),
				array('day','期限'),
				array('red','利息范围'),
				array('pay','产品佣金'),
				array('jiesuan','佣金结算方式'),
				array('pv','浏览量'),
				array('sday','审核时间'),
				array('link','申请地址'),
				array('time','创建时间'),
			);
			$xlsModel = M('loan');
			$xlsData  = $xlsModel->Field('id,name,type,member,price,day,red,pay,jiesuan,pv,sday,link,time')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				if($xlsData[$k]['type']=='1'){
					$xlsData[$k]['type']="推荐借款";
				}
				if($xlsData[$k]['type']=='2'){
					$xlsData[$k]['type']="身份证贷";
				}
				if($xlsData[$k]['type']=='3'){
					$xlsData[$k]['type']="信用卡贷";
				}
				$xlsData[$k]['time'] = date("Y-m-d H:i:s", $v['time']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
		$Admin = D("loan");
        $count = $Admin->where($map1)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('time')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map1)
                       ->select();
     	foreach ($list as $k_l => $v_l)
        {
          	$Bank=D('bank');
          	$data = $Bank->where(array('id'=>$v_l['bank']))->find();  //当前分类
        	$list[$k_l]['bank']= $data['name'];
        }
        $this->data = $list;
		
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	public function list_del(){
       $this->qx();
		$this->title = "删除产品";
		$id = I("id",0,'trim');
		if(!$id){
			$this->error("参数错误!");
		}
		$Block = D("loan");
		$status = $Block->where(array('id' => $id))->delete();
		if(!$status){
			$this->error("操作失败!");
		}
		$this->success("删除成功!");
	}
	
	public function list_add(){
        $this->glqx();
		$this->title = "添加任务";
        
		$Block = D("shuju");
		if(IS_POST){
			$_POST['rel'] = session('admin_user');
            $_POST['addtime'] = time();
            $_POST['time'] = date('Y-m-d H:i:s',time()+300);
			$_POST['type'] = '2';
			$status = $Block->add($_POST);
			if(!$status){
				$this->error("添加失败!");
			}
			$this->success("添加成功!");
			exit;
		}
		layout(true);
		$this->display();
	}

	public function list_edit(){
       $this->qx();
        $this->title='编辑产品';
        $Cat = D("loan");
        $cid = I("get.id",0,'trim');
      
      	$Bank = D("bank");
        $bank_list  = $Bank->order('time')
                       ->select();
        $this->bank = $bank_list;

        if(!$cid){
            $this->error("参数有误!");
        }
        $this->aid = $cid;
        $info = $Cat->where(array('id'=>$cid))->find();
      	
        $data = $Bank->where(array('id'=>$info['bank']))->find();  //当前分类
      	$this->now_typename = $data['name'];
      	$this->now_typeid = $data['id'];
        if(!$info){
            $this->error("栏目不存在!");
        }
        $this->info = $info;
        if(IS_POST){
            $name = I("name",'','htmlspecialchars');
            if(empty($name)){
                $this->error("栏目名称不能为空!");
            }
		/*	$f = I("bank",'','trim');
			if(!$f){
				$this->error("分类名称不能为空!");
			}*/
            $_POST['name'] = $name;
         
            $status = $Cat->where(array('id'=>$cid))->save($_POST);
            if(!$status){
                $this->error("修改失败!");
            }
            $this->success("修改成功","/Admin/list_index");
            exit;
        }
		layout(true);
        $this->display();
    }


	
	public function Payorder_index(){
		$this->title = "支付记录";
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;
		$where = array();
		if($keyword || $keyword5 || $keyword4){

			$where['ordernum'] = array('like',"%{$keyword}%");
			
				$where['user'] = array('like',"%{$keyword}%");
				$key3a['nick'] = array('like',"%{$keyword}%");
				//查询推广人姓名
				$Payorder = D("user");
				$info = $Payorder->where($key3a)->find();
				//print_r($info);exit;
				if($info){
					$keyword3=$info['mobile'];
					//echo $keyword3;exit;
					$where['user'] = array('like',"%{$keyword3}%");
				}
				$where['_logic'] = 'or';
				//$map1[2] = $key3;
			

			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[1] = $key4;
			}


			
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}

		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
			$xlsName  = "支付记录";
			$xlsCell  = array(
				array('id','账号序列'),
				array('ordernum','订单号'),
				array('user','用户'),
				array('type','支付类型'),
				array('money','支付金额'),
				array('status','状态'),
				array('addtime','创建时间'),
			);
			$xlsModel = M('payorder');
			$xlsData  = $xlsModel->Field('id,ordernum,user,type,money,status,addtime')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$uu=$xlsData[$k]['user'];
				$Payorder = D("user");
				$info = $Payorder->where(array('mobile' => $uu))->find();
				$xlsData[$k]['user']=$info['nick'].'/'.$xlsData[$k]['user'];
				if($xlsData[$k]['status']==1){
					$xlsData[$k]['status']='支付成功';
				}else{
					$xlsData[$k]['status']='支付失败';
				}
				$xlsData[$k]['addtime'] = date("Y-m-d H:i:s", $v['addtime']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
		$Admin = D("payorder");
        $count = $Admin->where($map1)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map1)
                       ->select();   
		for($i=0;$i<count($list);$i++){
			//查询推荐人姓名
			$uu=$list[$i]['user'];
			$Payorder = D("user");
			$info = $Payorder->where(array('mobile' => $uu))->find();
			$list[$i]['nick']=$info['nick'];
		}
		
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	public function Caiwu_index(){
		$this->title = "财务流水";
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
        $keyword2 = I("keyword2",'','trim');
		$this->keyword2 = $keyword2;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;
		$where = array();
		if($keyword || $keyword2 || $keyword5 || $keyword4){
          	if($keyword2){
            $map['type'] = $keyword2;
            }
			if($keyword){
				$map['user'] =$keyword;
				}
		  if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
			}
		}
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
	
	public function tixian_index(){
		$this->title = "提现管理";
	
		
		$Ma = M('admin');
         $aid=session('admin_user');
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
	public function jiesuan(){
		$this->title = "结算申请";
	
		$keyword = I("keyword",'','trim');
		$this->keyword = $keyword;
		$keyword4 = I("keyword4",'','trim');
		$this->keyword4 = $keyword4;
		$keyword5 = I("keyword5",'','trim');
		$this->keyword5 = $keyword5;
		$where = array();
		if($keyword || $keyword5 || $keyword4){

			
			if($keyword){
				$map['userid']=$keyword;
			}
            if($keyword4 && $keyword5){
					$str=strtotime($keyword4);
					$end=strtotime($keyword5);
					$map['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				}
			
			
		}

		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
			$xlsName  = "提现记录";
			$xlsCell  = array(
				array('id','账号序列'),
				array('userid','用户'),
				array('type','支付类型'),
				array('money','支付金额'),
				array('status','状态'),
				array('addtime','创建时间'),
			);
			$xlsModel = M('tixian');
			$xlsData  = $xlsModel->Field('id,userid,money,status,addtime')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$uu=$xlsData[$k]['userid'];
				$Payorder = D("user");
				$info = $Payorder->where(array('mobile' => $uu))->find();
				$xlsData[$k]['userid']=$info['nick'].'/'.$xlsData[$k]['userid'];
				$xlsData[$k]['type']=$info['payno'];
				if($xlsData[$k]['status']==1){
					$xlsData[$k]['status']='提现成功';
				}else{
					$xlsData[$k]['status']='提现失败';
				}
				$xlsData[$k]['addtime'] = date("Y-m-d H:i:s", $v['addtime']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
		$Admin = D("tixian");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();  
        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['userid'];
        	$Payorder = D("user");
			$info = $Payorder->where(array('id' => $uid1))->find();
			if($info){
				$list[$i]['payno']=$info['payno'];
				$list[$i]['nick']=$info['nick'];
			}
        }   
		
		


        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	
	function adminuplod(){
		$data=array('code' => 0,'msg' => '未知错误');
		$upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     './Public/loan/'; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            // 上传文件
            $info = $upload->upload();
            if($info){
            	$url= "/Public/loan/".$info['file']['savepath'].$info['file']['savename'];
            	$data['code'] = 0;
            	$data['msg']="上传成功";
            	$res=array('src' => $url);
            	$data['data']=$res;
            }else{
            	$data['msg']="上传失败";
            }
           
        $this->ajaxReturn($data);
	}
	public function kashen(){
		$this->title = "信用卡申请数据";
		$keyword = I("keyword",'','trim');
		$keyword2 = I("keyword2",'','trim');
		$keyword3 = I("keyword3",'','trim');
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');

		$p = I("p",'','trim');
		if(!$p){
			$p=1;
		}
		$this->p = $p;

		$this->keyword = $keyword;
		$this->keyword2 = $keyword2;
		$this->keyword3 = $keyword3;
		$this->keyword4 = $keyword4;
		$this->keyword5 = $keyword5;

		
		
		/***********导入数据核对***************/

		$xls = I("xls",'','trim');
		$this->xls = $xls;
		$submit = I("submit",'','trim');
		 if ($xls && $submit=='导入数据') {
            vendor("PHPExcel.PHPExcel");
            $file_name='./'.$xls;//$info[0]['savepath'].$info[0]['savename'];
            $objReader = \PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数
            for($i=3;$i<=$highestRow;$i++)
            {	
				//先查询id 
                $id=trim($objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue());
				//查询姓名
                $username=trim($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue());
				//查询身份证号
				$cardno=trim($objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue());
				//查询手机号
				$shouji=trim($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
				//查询状态
				$status=trim($objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue());
				//查询创建
				$addtime=strtotime($objPHPExcel->getActiveSheet()->getCell("H".$i)->getValue());
				
				
				
				//核实记录是否是真实的
				$shuju = D("shuju");
				$ss = $shuju->where(array('Id' => $id))->find();
				if($ss){
					//echo 'id='.$id.$username.'=='.$ss['name'].$cardno.'=='.$ss['shenno'].$shouji.'=='.$ss['shouji'].$addtime.'=='.$ss['addtime'];exit;
					if($ss['status']==0){

						if($username==$ss['name'] && $cardno==$ss['shenno'] && $shouji==$ss['shouji'] && $addtime==$ss['addtime']){
							//修改状态
							if($status=='核实成功'){$sstno=1;}else if($status=='订单无效'){$sstno=2;}else if($status=='订单未核实'){$sstno=0;}else{$this->error("ID为!".$id."的数据状态格式不对");	exit;	}
							$sxs = $shuju->where(array('Id' => $id))->save(array('status' => $sstno));
							//echo $sstno;exit;
							if($sxs && $sstno==1){
								//计算分成了
								$chantype=$ss['type'];
								$chanid=$ss['chanid'];
								if($ss['type']==1){
									$uid1=$ss['chanid'];
									$Payorder = D("card");
									$ck = $Payorder->where(array('id' => $uid1))->find();
									$bili1=$ck['pay'];
									$eryong=$ck['eryong'];
									$sanyong=$ck['sanyong'];
									$ttttxxxt="信用卡";
								}else if($ss['type']==2){
									$uid1=$ss['chanid'];
									$Payorder = D("loan");
									$ck = $Payorder->where(array('id' => $uid1))->find();
									$bili1=$ck['pay'];
									$eryong=$ck['eryong'];
									$sanyong=$ck['sanyong'];
									$ttttxxxt="产品";
								}
								
								$vi=$bili1;//vip
								$mo=$bili1;
								$user = D("user");
								$info2 = $user->where(array('mobile' => $ss['tuiuser']))->find();
								if($info2){
								$rel=$info2['id'];
								//echo $mo;
									//一级分成
									$y=$user->where(array('id'=>$rel))->setInc('price',$bili1);
									if($y){
										$type=1;
										$user1=$this->fenname($rel);//$info2['mobile'];
										//存入金额记录
										$text=$ttttxxxt.'推广分成';
										$mobile1 = $info2["mobile"]
										$momsg=$this->getusermoney($user1,$mobile1,$bili1,$type,$text,$chantype,$chanid);
										if($momsg){
											//查询一级的id是否有上级是否有二级
											$erji = $user->where(array('id' => $rel))->find();
											if($erji && $erji['rel']!=0){
												$erjirel=$erji['rel'];
												//二级分成
												//$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=$eryong;
												$y2=$user->where(array('id'=>$erjirel))->setInc('price',$mo2);
												if($y2){
													$type=1;
													$user2=$this->fenname($erjirel);//$erji['mobile'];
													//存入金额记录
													$text=$ttttxxxt.'推广费二级分成';
													$mobile2 = $erji["mobile"]
													$momsg2=$this->getusermoney($user2,$mobile2,$mo2,$type,$text,$chantype,$chanid);
													if($momsg2){
														//查询二级的id是否有上级  是否有三级
														$sanji = $user->where(array('id' => $erjirel))->find();
														if($sanji && $sanji['rel']!=0){
															$sanjirel=$sanji['rel'];
															//三级分成
															//$fen3=C("cfg_fencheng3");//分成百分比
															$mo3=$sanyong;
															$y3=$user->where(array('id'=>$sanjirel))->setInc('price',$mo3);
															if($y3){
																$type=1;
																$user3=$this->fenname($sanjirel);//$sanji['mobile'];
																//存入金额记录
																$text=$ttttxxxt.'推广费三级分成';
																$mobile3 = $sanji["mobile"]
																$momsg3=$this->getusermoney($user3,$mobile3,$mo3,$type,$text,$chantype,$chanid);
																//echo $snjiarel;exit;
																if($momsg3){
																	//$data['status'] = 1;
																	//$data['msg'] = "分成成功";	
																	//$this->success("分成成功!");
																}
															}



														}
													}
												}
											}


											
										}
										//$this->success("分成成功!");
										//二级
									}	
								}

								
							
							}
						}else{
							$this->error("ID为".$id."的数据比对不一致，请重新核实");	
						}
					}
				}
				
               // M('Member')->add($data);
            }
			//print_r($data);exit;
            $this->success('导入成功！');exit;
        }

		/***********导入数据核对end***************/


		$where = array();
		if($keyword || $keyword2 || $keyword3 || $keyword4 || $keyword5){
			if($keyword2){
				
				$key2['tuiuser']  = array('like',"%{$keyword2}%");
				//查询推广人姓名
				$Payorder = D("user");
				$info = $Payorder->where(array('nick' => $keyword2))->find();
				if($info){
					$keyword2=$info['mobile'];
					$key2['tuiuser'] = array('like',"%{$keyword2}%");
				}
				$key2['_logic'] = 'or';
				$map1[1] = $key2;
			}
			if($keyword3){
				$key3['chanid'] = $keyword3;
				$key3a['name'] = array('like',"%{$keyword3}%");
				//查询推广人姓名
				$Payorder = D("card");
				$info = $Payorder->where($key3a)->select();
				//print_r($info);exit;
				if($info){
					for($x=0;$x<count($info);$x++){
						$key3[$x]['chanid']=$info[$x]['id'];
					}
					//echo $keyword3;exit;
					//$key3['chanid'] = $keyword3;
				}
				$key3['_logic'] = 'or';
				$map1[2] = $key3;
			}

			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[3] = $key4;
			}

			$where['shenno'] = array('like',"%{$keyword}%");
			$where['name']  = array('like',"%{$keyword}%");
			$where['shouji'] = array('like',"%{$keyword}%");
			$where['_logic'] = 'or';
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		
		

			
			$map['type']  = array('eq',1);

		
		$submit = I("submit",'','trim');
		if($submit=='导出数据'){
			$xlsName  = "信用卡审核记录";
			$xlsCell  = array(
				array('id','序列'),
				array('name','姓名'),
				array('shenno','身份证号'),
				array('shouji','手机号'),
				array('chanid','产品名字'),
				array('tuiuser','推荐人'),
				array('status','核实状态(核实成功|订单无效)'),
				array('addtime','创建时间'),
			);
			$xlsModel = M('shuju');
			$xlsData  = $xlsModel->Field('id,name,shenno,shouji,chanid,tuiuser,type,status,addtime')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				$uu=$xlsData[$k]['tuiuser'];
				$Payorder = D("user");
				$info = $Payorder->where(array('mobile' => $uu))->find();
				$xlsData[$k]['tuiuser']=$info['nick'].'/'.$xlsData[$k]['tuiuser'];

				//查询产品名称
				if($xlsData[$k]['type']==1){
					$uid1=$xlsData[$k]['chanid'];
					$Payorder = D("card");
					$ck = $Payorder->where(array('id' => $uid1))->find();
					$xlsData[$k]['chanid']=$ck['name'];
				}else if($xlsData[$k]['type']['type']==2){
					$uid1=$xlsData[$k]['chanid'];
					$Payorder = D("loan");
					$ck = $Payorder->where(array('id' => $uid1))->find();
					$xlsData[$k]['chanid']=$ck['name'];
				}


				if($xlsData[$k]['status']==1){
					$xlsData[$k]['status']='核实成功';
				}else if($xlsData[$k]['status']==2){
					$xlsData[$k]['status']='订单无效';
				}else if($xlsData[$k]['status']==0){
					$xlsData[$k]['status']='订单未核实';
				}
				$xlsData[$k]['shouji'] = "\t".$xlsData[$k]['shouji']."\t";
				$xlsData[$k]['shenno'] = "\t".$xlsData[$k]['shenno']."\t";
				$xlsData[$k]['addtime'] = date("Y-m-d H:i:s", $v['addtime']);
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
		


		$Admin = D("shuju");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();  
        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['chanid'];
        	$Payorder = D("card");
			$info = $Payorder->where(array('id' => $uid1))->find();
			if($info){
				

					//$Payorder2 = D("bank");
					//$info2 = $Payorder2->where(array('id' => $info['bank']))->find();
				$list[$i]['bankname']=$info['name'];
				$list[$i]['img']=$info['img'];
				$list[$i]['pay']=$info['pay'];
				$list[$i]['eryong']=$info['eryong'];
				$list[$i]['sanyong']=$info['sanyong'];
			}
			//查询推荐人姓名
			$uu=$list[$i]['tuiuser'];
			$Payorder = D("user");
			$info = $Payorder->where(array('mobile' => $uu))->find();
			$list[$i]['nick']=$info['nick'];
        }    

		


		//获取所有信用卡列表
		$pro = D("card");		
		$ck_pro = $pro->where()->select();		
		$this->ck_pro = $ck_pro;
		
        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
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


        for($i=0;$i<count($list);$i++){
            if($list[$i]['status']==0){
          	  $jtime=time()-180; 
              if($jtime>$list[$i]['addtime']){
           	  $res=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>14));//自动超时退款标记
              }
            }
           if($list[$i]['status']==1){
        	$qtime=time()-300; 
            if($qtime>$list[$i]['addtime']){
            $res=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>2));//自动等待确认
            }
           }
			if($list[$i]['status']==2){
        	$wtime=time()-1200; 
            if($wtime>$list[$i]['addtime']){
            $res=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>15));//自动收货标记
            }
           }
            if($list[$i]['status']==6){
        	$stime=time()-1200; 
            if($stime>$list[$i]['addtime']){
            $res=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>17));//自动失败标记
            }
           }
          	if($list[$i]['status']==14){
             $st=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>4));//自动超时退款
        	//检测到已自动退款
            $res=$Ma->where(array('id'=>$list[$i]['rel']))->setInc('price',$list[$i]['pay']);
             if($res){  
              $user1=$list[$i]['rel'];
              $bili1=$list[$i]['pay'];
			  $text="超时退款";
              $motype=1;//增加 
              $type=2;//下单员
			  $id=$list[$i]['id'];
			  $mobile1=$list[$i]['mobile']
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
              }
           }
          	if($list[$i]['status']==15){
             $st=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>5));//收货
        	//检测到已自动收货
              $bili1=$list[$i]['pay'];
            $res=$Mu->where(array('id'=>$list[$i]['tuiuser']))->setInc('price',$bili1);
               if($res){  
              $user1=$list[$i]['tuiuser'];
			  $text="任务佣金";
              $motype=1;//增加 
              $type=1;//用户
			  $id=$list[$i]['id'];
			  $mobile1=$list[$i]['mobile']
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
                 	if($momsg){
											//查询一级的id是否有上级是否有二级
                                          	$rel=$Mu->where(array('id'=>$user1))->find();
                                            $rel=$rel['rel'];
                                            $cx=$Mu->where(array('id'=>$rel))->find();
											$erji = $cx['id'];
                                            if($erji){
                                              	$mo2=round($list[$i]['pay']*C('cfg_fencheng'),2);
												$y2=$Mu->where(array('id'=>$erji))->setInc('price',$mo2);
												if($y2){
                                                  	$type=1;//用户变动
                                               	    $user2=$erji;
													$motype=1;//增加
													$text='任务二级佣金';
													$mobile1 = $cx['mobile'];
													$momsg2=$this->getusermoney($user2,$mobile1,$mo2,$motype,$text,$type,$id);
												
												}
											}
              }
           }
          }
          	if($list[$i]['status']==17){
            $st=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>7));//失败
        	//检测到已确定退款
            $res=$Ma->where(array('id'=>$list[$i]['rel']))->setInc('price',$list[$i]['pay']);
               if($res){  
              $user1=$list[$i]['rel'];
              $bili1=$list[$i]['pay'];
			  $text="订单退款";
              $motype=1;//增加 
              $type=2;//下单员
			  $id=$list[$i]['id'];
			  $mobile1 = $list[$i]['mobile'];
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
              }
           }
          	if($list[$i]['status']==19){
             $st=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>9));//卡商胜诉
        	//检测到卡商已胜诉
            $res=$Ma->where(array('id'=>$list[$i]['rel']))->setInc('price',$list[$i]['pay']);
               if($res){  
              $user1=$list[$i]['rel'];
              $bili1=$list[$i]['pay'];
			  $text="胜诉退款";
              $motype=1;//增加 
              $type=2;//下单员
			  $id=$list[$i]['id'];
			  $mobile1 = $list[$i]['mobile'];
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
              }
           }
          	if($list[$i]['status']==20){
             $res=$Admin->where(array('id'=>$list[$i]['id']))->save(array('status'=>10));//兼职胜诉
        	//检测到兼职已胜诉
             $bili1=$list[$i]['pay'];
            $res=$Mu->where(array('id'=>$list[$i]['tuiuser']))->setInc('price',$bili1);
              
           if($res){  
              $user1=$list[$i]['tuiuser'];

			  $text="任务佣金";
              $motype=1;//增加 
              $type=1;//用户
			  $id=$list[$i]['id'];
			  $mobile1 = $list[$i]['mobile'];
              $momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
                 	if($momsg){
											//查询一级的id是否有上级是否有二级
                                          	$rel=$Mu->where(array('id'=>$user1))->find();
                                            $rel=$rel['rel'];
                                            $cx=$Mu->where(array('id'=>$rel))->find();
											$erji = $cx['id'];
                                            if($erji){
												$mo2=round($list[$i]['pay']*C('cfg_fencheng'),2);
												$y2=$Mu->where(array('id'=>$erji))->setInc('price',$mo2);
												if($y2){
                                                  	$type=1;//用户变动
                                               	    $user2=$erji;
													$motype=1;//增加
													$text='任务二级佣金';
													$mobile1 = $cx['mobile'];
													$momsg2=$this->getusermoney($user2,$mobile1,$mo2,$motype,$text,$type,$id);
												
												}
											}
              }
           }
           }
        }  

        $this->data = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
 public function jieshen_edit(){
    $this->qx();
	$keyword4 = I("get.keyword4",'','trim');
	$keyword5 = I("get.keyword5",'','trim');
    $keyword6 = I("get.keyword6",'','trim');
	$p = I("p",'','trim'); 
    $model = M('shuju');
    $id=I('id');//获取post提交的值并获取id值
  

	$status = $model->where(array('id'=>$id))->save(array('status' => 19));
   	if($status){
    $url='Admin/jieshen';
	$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 3, '结算成功...即将跳转页面');exit;
		}
    	else{
        	$this->error('操作错误');
        }
    }
 public function jieshen_edit2(){
    $this->qx();
	$keyword4 = I("get.keyword4",'','trim');
	$keyword5 = I("get.keyword5",'','trim');
    $keyword6 = I("get.keyword6",'','trim');
	$p = I("p",'','trim'); 
    $model = M('shuju');
    $id=I('id');//获取post提交的值并获取id值
  

	$status = $model->where(array('id'=>$id))->save(array('status' => 20));
   	if($status){
    $url='Admin/jieshen';
    
	$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 3, '结算成功...即将跳转页面');exit;
		}
    	else{
        	$this->error('操作错误');
        }
    }
public function jieshens_edit(){
    $this->title="申请数据删除";
    $this->qx();
        
    $model = M('shujus');

    $id=I('post.id');//获取post提交的值并获取id值

    $ids = join(',', $id);
 
    $data = $model->delete($ids);

    if($data){

    $this->success("删除成功", U('Admin/jieshens'));

    }else{

    $this->error("删除失败");

    }

   
        }
		public function jieshens(){
		$this->title = "申请数据";
        $this->qx();
		$keyword = I("keyword",'','trim');
       	$keyword1 = I("keyword1",'','trim');
		$keyword2 = I("keyword2",'','trim');
		$keyword3 = I("keyword3",'','trim');
		$keyword4 = I("keyword4",'','trim');
		$keyword5 = I("keyword5",'','trim');
		$p = I("p",'','trim');
		if(!$p){
			$p=1;
		}
		$this->p = $p;

		$this->keyword = $keyword;
       $this->keyword1 = $keyword;
		$this->keyword2 = $keyword2;
		$this->keyword3 = $keyword3;
		$this->keyword4 = $keyword4;
		$this->keyword5 = $keyword5;

		$where = array();
		if($keyword || $keyword1 || $keyword2 || $keyword3 || $keyword4 || $keyword5){
			if($keyword2){
				$key2['tuiuser'] = array('like',"%{$keyword2}%");
				$map1[1] = $key2;
			}
			if($keyword3){

				$key3['chanid'] =$keyword3;
				$map1[2] = $key3;
			}
			if($keyword1){
				$key1['fz'] =$keyword1;
				$map1[4] = $key1;
			}
			if($keyword4 && $keyword5){
				$str=strtotime($keyword4);
				$end=strtotime($keyword5);
				$key4['addtime'] = array(array('gt',$str),array('lt',$end)) ;
				$map1[3] = $key4;
			}

			$where['shenno'] = array('like',"%{$keyword}%");
			$where['name']  = array('like',"%{$keyword}%");
			$where['shouji'] = array('like',"%{$keyword}%");
			$where['_logic'] = 'or';
			$map1[0] = $where;
			$map['_complex'] = $map1;
		}
		
		

			$admin_id=session('admin_user');
            $admin=D('admin');
            $admin_list=$admin->where(array('id'=>$admin_id))->find(); 
            $gid=$admin_list['gid'];
            $kl=$admin_list['kl'];
            if($gid==1){
            $Admin=D('shujus');
            }
            if($gid==0){
            $map['fz']=$admin_list['username'];
            $Admin = D("shujus");
            }
            if($gid==2){
            $Admin = D("shuju");
            $map['tuiuser']=$admin_list['username'];
            }
			$map['type']  = array('eq',2);

//导出数据
			$submit = I("submit",'','trim');
			if($submit=='导出数据'){
            if($gid!=1){
            	$this->error('无权限');
            }
			$xlsName  = "贷超申请记录";
			$xlsCell  = array(
				array('id','序列'),
				
			
				array('shouji','手机号'),
				array('chanid','产品名字'),
				array('tuiuser','推荐人'),
           	   	array('fz','来源管理组'),
				array('time','创建时间'),
			);
			$xlsModel = M('shujus');
			$xlsData  = $xlsModel->Field('id,shouji,chanid,tuiuser,fz,time')->where($map)->select();
			foreach ($xlsData as $k => $v)
			{	
				
				//查询产品名称
		
					$uid1=$xlsData[$k]['chanid'];
					$Payorder = D("card");
					$ck = $Payorder->where(array('id' => $uid1))->find();
					$xlsData[$k]['chanid']=$ck['name'];
				

				$xlsData[$k]['shouji'] = "\t".$xlsData[$k]['shouji']."\t";
		
				
			}
			$this->exportExcel($xlsName,$xlsCell,$xlsData);
			exit;
		}
       //--导出完毕
       
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->order('addtime desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->where($map)
                       ->select();
	   $lists=$Admin->where($map)->count();
   		$this->lists=$lists;
        for($i=0;$i<count($list);$i++){
        	$uid1=$list[$i]['chanid'];
            if($gid!=1){
              	  $mobile=$list[$i]['shouji'];
				  $newMobile2 = substr_replace($mobile, '****',3,4);
            	 $list[$i]['shouji']=$newMobile2;
            }
        	$Payorder = D("card");
			$info = $Payorder->where(array('id' => $uid1))->find();
			if($info){
				$list[$i]['bankname']=$info['name'];
				$list[$i]['img']=$info['img'];
            }
        }  

		//获取所有产品信息
		$pro = D("card");		
		$ck_pro = $pro->where()->select();		
		
		$this->ck_pro = $ck_pro;
         //查分组
      	$admin = D("admin");
        $m['gid']=array('lt',2);
		$fz = $admin->where($m)->select();		
      
		$this->fz = $fz;
        $this->list = $list;
        $this->page = $show;
        layout(true);
        $this->display();
	}
	
	

	function yuedulu(){
		$data = array('status' => 0,'msg' => '未知错误');
        $tt = I('post.tt',0,'trim');
        if(!$tt){
            $data['msg'] = "参数有误!";
        }
		$Usera = D("admin");
		$user=$this->getlogin();
		$status = $Usera->where(array('username' => $user))->save(array('text' => $tt));
		if($status){
			$data['status'] = 1;
		}else{
			$data['status'] = 2;
		}
		$this->ajaxReturn($data);
	}
	function fenname($user1){
		$user = D("user");
		$info2 = $user->where(array('id' => $user1))->find();
		return $info2['mobile'];
	}

	//增加金额变动记录
	
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
		$info = $User->where(array('Id' => $id))->find();
		if(!$info){
			$this->error("订单不存在!");
		}
		
		$newstatus = 6;//无效
		
		$status = $User->where(array('Id' => $id,'status'=>2))->save(array('status' => $newstatus));
		if($status){
		
				$url='Admin/jieshen';
	
			$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 0, '结算成功...即将跳转页面');exit;
		}
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
							$ttttxxxt="任务奖励";
							$url='Admin/jieshen';
							$user = D("user");
                            $y=$user->where(array('id'=>$info['tuiuser']))->setInc('price',$bili1);
									if($y){		
										$type=1;//用户变动
										$user1=$info['tuiuser'];
										$text=$ttttxxxt.'任务佣金';
										$motype=1;//增加
										$mobile1 = $info['mobile'];
										$momsg=$this->getusermoney($user1,$mobile1,$bili1,$motype,$text,$type,$id);
										if($momsg){
											//查询一级的id是否有上级是否有二级
                                          	$rel=$user->where(array('id'=>$info['tuiuser']))->find();
                                            $rel=$rel['rel'];
                                            $cx=$user->where(array('id'=>$rel))->find();
											$erji = $cx['id'];
                                            if($erji){
												//二级分成
												//$fen2=C("cfg_fencheng2");//分成百分比
												$mo2=0.1;
												$y2=$user->where(array('id'=>$erji))->setInc('price',$mo2);
												if($y2){
                                                  	$type=1;//用户变动
                                               	    $user2=$erji;
													$motype=1;//增加
													$text=$ttttxxxt.'任务二级佣金';
													$mobile1 = $cx['mobile'];
													$momsg2=$this->getusermoney($user2,$mobile1,$mo2,$motype,$text,$type,$id);
												
												}
											}

                                        }
											
										}
					$this->redirect($url, array('keyword4'=>$keyword4,'keyword5'=>$keyword5,'keyword6'=>$keyword6,'p'=>$p), 0, '结算成功...即将跳转页面');exit;


			}
		
	}
	
	
	
	
	
	//导出user用户表
	function expUser($xlsName='', $xlsCell=array(), $xlsModel=''){//导出Excel
        $xlsName  = "用户数据";
        $xlsCell  = array(
            array('id','账号序列'),
            array('nick','名字'),
            array('mobile','手机号'),
			array('price','余额'),
			array('vip','会员'),
            array('status','状态'),
			array('payno','结算账号'),
            array('time','创建时间'),
        );
        $xlsModel = M('user');
        $xlsData  = $xlsModel->Field('id,nick,mobile,price,vip,status,payno,time')->select();
        foreach ($xlsData as $k => $v)
        {	
			if($xlsData[$k]['status']==1){
				$xlsData[$k]['status']='禁止';
			}else{
				$xlsData[$k]['status']='正常';
			}
			if($xlsData[$k]['vip']==1){
				$xlsData[$k]['vip']='付费会员';
			}else{
				$xlsData[$k]['vip']='普通会员';
			}
            $xlsData[$k]['time'] = date("Y-m-d H:i:s", $v['time']);
        }
        $this->exportExcel($xlsName,$xlsCell,$xlsData);
    }

	
	
	
	
	
	
	
    
}