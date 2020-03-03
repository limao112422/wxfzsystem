<?php
/**
 * Created by PhpStorm.
 * User: Somnus
 * Date: 2016/11/9
 * Time: 17:28
 */
/**
 * [writeArr 写入配置文件方法]
 * @param  [type] $arr      [要写入的数据]
 * @param  [type] $filename [文件路径]
 * @return [type]           [description]
 */
function writeArr($arr, $filename) {
    return file_put_contents($filename, "<?php\r\nreturn " . var_export($arr, true) . ";");
}

function delDir($path){
    if ( $handle = opendir( "$path" ) ){
        while ( false !== ( $item = readdir( $handle ) ) ) {
            if ( $item != "." && $item != ".." ) {
                if ( is_dir( "$path/$item" ) ) {
                    delDir( "$path/$item" );
                } else {
                    unlink( "$path/$item" );
                }
            }
        }
        closedir( $handle );
    }
}

//生成订单号
function neworderNum(){
	$yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
	$orderSn = $yCode[intval(date('Y')) - 2011] . strtoupper(dechex(date('m'))) . date('d') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
	return $orderSn;
}

function sendTsms($phone,$content){
    $smsapi = C('cfg_SMS_API'); //短信网关
    $user = C('cfg_SMS_USER'); //短信平台帐号
    $pass = md5(C('cfg_sms_pass')); //短信平台密码
    $content=$content;//要发送的短信内容
    $phone = $phone;
    $sendurl = $smsapi."sms?u=".$user."&p=".$pass."&m=".$phone."&c=".urlencode($content);
    $result =file_get_contents($sendurl) ;
    return $result;
}