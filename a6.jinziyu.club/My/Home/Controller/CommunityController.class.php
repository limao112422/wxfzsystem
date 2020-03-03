<?php
namespace Home\Controller;
use Think\Controller;
class CommunityController extends Controller {
    public function index(){

		/*$Mu = M('user');
    	$uid = session(C('USER_AUTH_KEY'));
        $f = $Mu->find($uid);
		if($f['vip']!=1){
			$this->redirect('User/join');
		}
		*/

		$uid = session(C('USER_AUTH_KEY'));



    	$Ml = M('text');
		$uu = M('user');
    	$list = $Ml->where(array('type'=>1))->select();
		$nav=0;
		if($uid){
			for($i=0;$i<count($list);$i++){
				$id=$list[$i]['id'];
				$user =$uu->where(array('id'=>$uid))->find();
				if($user){
					$textid=$user['textid'];
					$arr_a =explode(",",$textid);
					if(!in_array($id, $arr_a)){
					  $list[$i]['yue']=1;
					  $nav=1;
					}
				}

			}
		
		}
		$this->nav1 = $nav;
    	$this->list = $list;

		$list2 = $Ml->where(array('type'=>2))->select();
		$nav2=0;
		if($uid){
			for($i=0;$i<count($list2);$i++){
				$id=$list2[$i]['id'];
				$user =$uu->where(array('id'=>$uid))->find();
				if($user){
					$textid=$user['textid'];
					$arr_a =explode(",",$textid);
					if(!in_array($id, $arr_a)){
					  $list2[$i]['yue']=1;
					  $nav2=1;
					}
				}

			}
		
		}
		$this->nav2 = $nav2;
    	$this->list2 = $list2;

		$list3 = $Ml->where(array('type'=>3))->select();
		$nav3=0;
		if($uid){
			for($i=0;$i<count($list3);$i++){
				$id=$list3[$i]['id'];
				$user =$uu->where(array('id'=>$uid))->find();
				if($user){
					$textid=$user['textid'];
					$arr_a =explode(",",$textid);
					//print_r($id);exit;
					if(!in_array($id,$arr_a)){
					  $list3[$i]['yue']=1;
					  $nav3=1;
					}
				}

			}
		
		}
		$this->nav3 = $nav3;
    	$this->list3 = $list3;
        $this->display();
    }
    
    public function text($id=0){
		
		if(!isset($_SESSION[C('USER_AUTH_KEY')])){
			$this->redirect('/login');
		}

		$uu = M('user');
		$uid = session(C('USER_AUTH_KEY'));
		$user =$uu->where(array('id'=>$uid))->find();
		if($user){
			$uetxidt=$user['textid'];
			$arr_a =explode(",",$uetxidt);
					if(!in_array($id, $arr_a)){
					  $res=$uetxidt.','.$id;
						$uu->where(array('id'=>$uid))->save(array('textid'=>$res));
					}
			
		}
      
      	//判断是否是vip
      	$usvip=$user['vip'];
      	$Ml = M('text');
    	$list = $Ml->where(array('Id'=>$id))->find();
      	if($list['vip']==1){
        	//判断是否为vip用户
            if($usvip==0){
                $this->redirect('/User/join');exit;
            }
        }
      
      
    	$Ml = M('text');
		//给当前id+1阅读量
		$Ml->where(array('Id'=>$id))->setInc('pv',1);;
    	$list =$Ml->where(array('Id'=>$id))->find();
    	$this->list = $list;
        $this->display();
    }
    
    
    
    
}