<?php
namespace Home\Controller;
use Think\Controller;
class ComController extends Controller {
    public function _initialize(){
		if(!isset($_SESSION[C('USER_QUDAO_KEY')])){
			$this->redirect('/login/login');
		}
	}

	
}