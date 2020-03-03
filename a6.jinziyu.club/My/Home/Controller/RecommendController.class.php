<?php
namespace Home\Controller;
use Think\Controller;
class RecommendController extends Controller {
    public function index(){

		$invitor = I('invitor');
 		if($invitor){
 			//´æÈëcookie
 			cookie('invitor',$invitor,7*24*3600);//7ÌìÄÚ
 		}
 		
 		

    	$Ml = M('loan');
    	$list = $Ml->where(['type'=>['lt','4']])->order('sday asc')->select();
    	$this->list = $list;


		$Mc = M('card');
        $this->card = $Mc->order('sday asc')->select();
        $this->display();
    }
}