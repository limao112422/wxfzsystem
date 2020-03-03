<?php

namespace Home\Controller;

use Think\Controller;

/* 	后台权限验证方法	 */

class CommonsController extends Controller {

	
	public function _initialize(){
		//判断登录
		if(MODULE_NAME != "Log" && MODULE_NAME != "tj" &&!$this->islogin()){
			$this->redirect('Log/login');
		}
    }
    protected function islogin() {
        if (!session('admin_user')) {
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
	

    protected function getlogin() {
        return session('admin_user');
    }

    protected function getpass($pass) {
        return md5(C('cfg_adminkey') . md5($pass));
    }

    //增加金额变动记录
    protected function getusermoney($user, $money, $most, $text, $type = 0, $chanid = 0) {
        $arr = array(
            'user' => $user,
            'money' => $money,
            'motype' => $most,
            'text' => $text,
            'type' => $type,
            'chanid' => $chanid,
            'addtime' => time()
        );
        $Payorder = D("moneylog");
        $status = $Payorder->add($arr);
        return $status;
    }

}
