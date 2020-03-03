<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
      
  		  if(!isset($_SESSION[C('USER_AUTH_KEY')])){
          if(isset($_COOKIE['u'])){
          $user=cookie('u');
          $password=cookie('p');
          $Mu=M('user');
          $u=$Mu->where(array('mobile'=>$user))->find();
          if($u['password'] == $password){
                session(C('USER_AUTH_KEY'),$u['id']);
                session('nick',$u['nic']);
         }else{
          	   $this->redirect('/login');
          }
          }	else{
              $this->redirect('/login');
            }
		}
	}

}