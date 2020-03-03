<?php
namespace Home\Controller;
use Think\Controller;
class LogController extends Controller {
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
					$this->setlogin($tmp['id'],$username);
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

	protected function islogin(){
		if(!session('admin_user') ){
			return false;
		}
		return true;
	}
	
	protected function setlogin($id = '',$name=''){
		if(empty($id)){
			session('admin_user',null);
		}else{
			session('admin_user',$id);
		}
      		if(empty($name)){
			session('admin_name',null);
		}else{
			session('admin_name',$name);
		}
	}
	
	protected function getlogin(){
		return session('admin_user');
	}
	
	protected function getpass($pass){
		return md5('*&>'.md5($pass) );
	}

}