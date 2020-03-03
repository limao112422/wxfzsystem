<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends  CommonController {
    public function index1(){
       $bank=D('bank');
       $data=$bank->select();
       $this->data=$data;
    	$Ml = M('loan');
    	$list = $Ml->where(array('type'=>'上架'))->order('member')->select();
    	$this->list = $list;
		
      	$Mt=M('text');
        $list2 = $Mt->where(array('type'=>2))->select();  //滚动广告
        $this->list2=$list2;
		$lu = M('img');
    	$lun = $lu->select();
    	$this->lun = $lun;

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
		$this->nav1 = $nav;

        $this->display();
    }
    public function index(){
    	$uid = session(C('USER_AUTH_KEY'));
        $this->uid=$uid;
		$map['tuiuser']="0";
        $map['status']="0";
		$str=time()-300;
      	$map['addtime'] = array('gt',$str);
		$Admin = D("shuju");
        $count = $Admin->where($map)->count();
       	$Page  = new \Think\Page($count,20);
        $Page->setConfig('theme','共%totalRow%条记录 | 第 %nowPage% / %totalPage% 页 %upPage%  %linkPage%  %downPage%');
        $show  = $Page->show();
        $list  = $Admin->where($map)->order('pay desc')
                       ->limit($Page->firstRow.','.$Page->listRows)
                       ->select();


        $this->data = $list;
        $this->page = $show;
        $this->display();
	}
	 public function svn(){
		echo "C:演示站";
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
     public function sd($url){
       $sendurl="http://api.suolink.cn/api.php?format=json&url=".urlencode($url)."&key=5d9d86228e676d2de3714eb8@ad3035709df584677823f6a3f6d0f6b3";
       $result =file_get_contents($sendurl);
       $result=json_decode($result,true);
       return $result;
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

}