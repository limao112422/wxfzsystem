<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        if(IS_POST){
	        
	        $data=array('status' => 0,'msg' => '未知错误');
			$password = I("password",'','trim');
			$code = I("code",'','trim');
			$phone = I("phone",'','trim');
	        
	        if(!$password || !$code || !$phone){
				$data['msg'] = "参数错误!";
				$this->ajaxReturn($data);exit;
			}
	        /*
	        if(!check_verify($code)){
				$data['msg'] = "图形验证码错误";$this->ajaxReturn($data);exit;
			}*/
	        
            $data = array(
                'mobile' => $phone,
                'password' => md5($password.'^L^'),
            );
            $Mu = M('user');
            $user = $Mu->where(array('mobile'=>$data['mobile']))->find();
            if($user['password'] == $data['password']){
                if($user['vip']==0){
                	$data['msg'] = "账户已被锁定,联系官方客服";$this->ajaxReturn($data);exit;
                }
                cookie('u', $phone, 7 * 24 * 3600); //30天内
              	cookie('p', md5($password.'^L^'), 7 * 24 * 3600); //30天内
                session(C('USER_AUTH_KEY'),$user['id']);
                session('nick',$user['nic']);
                /*if ($user['mobile'] == C('RBAC_SUPERADMIN')) {
                    session(C('ADMIN_AUTH_KEY'),true);
                    $this->success('登陆成功！',U('/admin/index'));
                }else{*/
                    //$this->success('登陆成功！',U('/user'));
                    $data['status'] = 1;
               //}
            }else{
            	$data['msg'] = "账号或者密码错误";
                //$this->error('账号或者密码错误！',U('/login'));
            }
            $this->ajaxReturn($data);exit;
    	}else{
    		$this->display();
    	}
    }
	
public function login(){
        if(IS_POST){
	        
	        $data=array('status' => 0,'msg' => '未知错误');
			$password = I("password",'','trim');
			$code = I("code",'','trim');
			$phone = I("phone",'','trim');
	        
	        if(!$password || !$code || !$phone){
				$data['msg'] = "参数错误!";
				$this->ajaxReturn($data);exit;
			}
	        /*
	        if(!check_verify($code)){
				$data['msg'] = "图形验证码错误";$this->ajaxReturn($data);exit;
			}*/
	        
            $data = array(
                'mobile' => $phone,
                'password' => md5($password.'^L^'),
            );
            $Mu = M('qudao');
            $qudao = $Mu->where(array('mobile'=>$data['mobile']))->find();
            if($qudao['password'] == $data['password']){
                if($qudao['vip']==0){
                	$data['msg'] = "账户已被锁定,联系官方客服";$this->ajaxReturn($data);exit;
                }
                session(C('USER_QUDAO_KEY'),$qudao['id']);
                session('qudao',$qudao['mobile']);
                /*if ($user['mobile'] == C('RBAC_SUPERADMIN')) {
                    session(C('ADMIN_AUTH_KEY'),true);
                    $this->success('登陆成功！',U('/admin/index'));
                }else{*/
                    //$this->success('登陆成功！',U('/user'));
                    $data['status'] = 1;
               //}
            }else{
            	$data['msg'] = "账号或者密码错误";
                //$this->error('账号或者密码错误！',U('/login'));
            }
            $this->ajaxReturn($data);exit;
    	}else{
    		$this->display();
    	}
    }



}