<?php

	function check_verify($code, $id = ''){
        $config =    array(
            'imageW'      => 100,
            'imageH'      => 32,
            'fontSize'    => 17,    // 验证码字体大小
            'length'      => 3,     // 验证码位数
        );
        $verify = new \Think\Verify($config);
        return $verify->check($code, $id);
    }

    function p($data){
        echo '<pre>';
        print_r($data) . "</pre>";
    }

    function xl($data,$pid){
        $arr = array();
        foreach($data as $v){
            if($v['books'] == $pid){
                $arr[] = $v;
                $arr= array_merge($arr,xl($data,$v['id']));
            }
        }
        return $arr;
    }

	//验证手机号
function checkphone($number){
	if(preg_match("/^1\d{10}$/",$number)){  
	    return true;
	}else{  
	    return false;
	} 
}



    function getTree($data,$pid){
        if (!is_array($data) || empty($data) ) return false;
        $tree = array();
        foreach ($data as $k => $v) {
            if ($v['books'] == $pid) {
                $g = getTree($data,$v['id']);
                if(!empty($g)){
                    $v['pid'] = $g;
                }
                $tree[] = $v;
                unset($data[$k]);
            }
        }
        return $tree;
    }


function sendTsms($phone,$content){
    $smsapi = C('cfg_SMS_API'); //短信网关
    $user = C('cfg_SMS_USER'); //短信平台帐号
    $pass = md5(C('cfg_smspass')); //短信平台密码
    $content=$content;//要发送的短信内容
    $phone = $phone;
    $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
    $result =file_get_contents($sendurl) ;
    return $result;
}

 /*****/
//自定义函数手机号隐藏中间四位
function yc_phone($str){
    $str=$str;
    $resstr=substr_replace($str,'****',3,4);
    return $resstr;
}

//生成订单号
function neworderNum(){
	$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
	$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
	return $orderSn;
}

function writeArr($arr, $filename) {
    return file_put_contents($filename, "<?php\r\nreturn " . var_export($arr, true) . ";");
}

/**
 *  验证身份证号码有效性
 */
function isIdCard($number) {
    if(empty($number)) return false;
    //加权因子
    $wi = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
    //校验码串
    $ai = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
    //按顺序循环处理前17位
    $sigma = 0;
    for ($i = 0;$i < 17;$i++) {
        //提取前17位的其中一位，并将变量类型转为实数
        $b = (int) $number{$i};
        //提取相应的加权因子
        $w = $wi[$i];
        //把从身份证号码中提取的一位数字和加权因子相乘，并累加
        $sigma += $b * $w;
    }
    //计算序号
    $snumber = $sigma % 11;
    //按照序号从校验码串中提取相应的字符。
    $check_number = $ai[$snumber];
    if ($number{17} == $check_number) {
        return true;
    } else {
        return false;
    }
}

/**
 *  验证姓名有效性
 */
function isChineseName($name){
    if (preg_match('/^([\xe4-\xe9][\x80-\xbf]{2}){2,4}$/', $name)) {
		return true;
	} else {
		return false;
	}
}

