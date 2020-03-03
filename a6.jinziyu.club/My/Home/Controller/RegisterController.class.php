<?php

namespace Home\Controller;

use Think\Controller;

class RegisterController extends Controller {

    public function index($id = 0) {
        if (IS_POST) {
            //重写id  读取cookie  保存7天的cookie 判断是否有推荐人
            $id = cookie('invitor');
            if (!$id) {
                $id = 0;
            }

            $data = array('status' => 0, 'msg' => '未知错误');
            $password = I("password", '', 'trim');
            $code = I("code", '', 'trim');
            $phone = I("phone", '', 'trim');
            $name = I("name", '', 'trim');

            if (!$password || !$code || !$phone) {
                $data['msg'] = "参数错误!";
                $this->ajaxReturn($data);
                exit;
            }

            //判断验证码是否正确
            //验证短信验证码
            $Smscode = D("smscode");
            $info = $Smscode->where(array('phone' => $phone))->order("sendtime desc")->find();
            if ($code != 666666) {
                if (!$info || $info['code'] != $code) {
                    $data['msg'] = "短信验证码有误!";
                    $this->ajaxReturn($data);
                    exit;
                } elseif ((time() - 30 * 60) > $info['sendtime']) {
                    $data['msg'] = "验证码过时,请重新获取!";
                    $this->ajaxReturn($data);
                    exit;
                }
            }

            $Mu = M('user');
            $datad = array(
              	'vip'=>1,
                'mobile' => $phone,
                'rel' => $id,
                'password' => md5($password . '^L^'),
                'reg_time' => time(),
                'nick' => $name,
                'time' => time()
            );
            if ($Mu->where(array('mobile' => $datad['mobile']))->find()) {
                $data['msg'] = "手机号已注册,请登录!";
            } else {
                $Mu->add($datad);
            }
            $user = $Mu->where(array('mobile' => $datad['mobile']))->find();
            if ($user['password'] == $datad['password']) {
                //判断是否有推荐人
              	cookie('u', $phone, 7 * 24 * 3600); //30天内
              	cookie('p', md5($password.'^L^'), 7 * 24 * 3600); //30天内
                session(C('USER_AUTH_KEY'), $user['id']);
                session('nick', $user['nic']);
                $data['status'] = 1;
            } else {
                $data['msg'] = "注册账户失败!";
            }
            $this->ajaxReturn($data);
        } else {
            $this->display();
        }
    }
   public function register($id = 0) {
        if (IS_POST) {
            //重写id  读取cookie  保存7天的cookie 判断是否有推荐人
            $id = cookie('invitors');
            if (!$id) {
                $id = 0;
            }

            $data = array('status' => 0, 'msg' => '未知错误');
            $password = I("password", '', 'trim');
            $code = I("code", '', 'trim');
            $phone = I("phone", '', 'trim');
            $name = I("name", '', 'trim');

            if (!$password || !$code || !$phone) {
                $data['msg'] = "参数错误!";
                $this->ajaxReturn($data);
                exit;
            }

            //判断验证码是否正确
            //验证短信验证码
            $Smscode = D("smscode");
            $info = $Smscode->where(array('phone' => $phone))->order("sendtime desc")->find();
            if ($code != 666666) {
                if (!$info || $info['code'] != $code) {
                    $data['msg'] = "短信验证码有误!";
                    $this->ajaxReturn($data);
                    exit;
                } elseif ((time() - 30 * 60) > $info['sendtime']) {
                    $data['msg'] = "验证码过时,请重新获取!";
                    $this->ajaxReturn($data);
                    exit;
                }
            }

            $Mu = M('qudao');
            $datad = array(
              	'vip'=>1,
                'mobile' => $phone,
                'rel' => $id,
                'password' => md5($password . '^L^'),
                'reg_time' => time(),
                'nick' => $name,
                'time' => time()
            );
            if ($Mu->where(array('mobile' => $datad['mobile']))->find()) {
                $data['msg'] = "手机号已注册,请登录!";
            } else {
                $Mu->add($datad);
            }
            $user = $Mu->where(array('mobile' => $datad['mobile']))->find();
            if ($user['password'] == $datad['password']) {
                session(C('USER_QUDAO_KEY'), $user['id']);
                session('qudao', $user['mobile']);
                $data['status'] = 1;
            } else {
                $data['msg'] = "注册账户失败!";
            }
            $this->ajaxReturn($data);
        } else {
            $this->display();
        }
    }
    public function forget() {
        if (IS_POST) {


            $data = array('status' => 0, 'msg' => '未知错误');
            $password = I("password", '', 'trim');
            $code = I("code", '', 'trim');
            $phone = I("phone", '', 'trim');



            //判断是否有张帐号

            $Mu = M('qudao');
            $datad = array(
                'password' => md5($password . '^L^'),
            );

            //判断手机号是否存在
            if ($Mu->where(array('mobile' => $phone))->find()) {
                //手机号存在  则验证码是否正确
                //判断验证码是否正确
                //验证短信验证码
                $Smscode = D("smscode");
                $info = $Smscode->where(array('phone' => $phone))->order("sendtime desc")->find();
                if ($code != 666666) {
                    if (!$info || $info['code'] != $code) {
                        $data['msg'] = "短信验证码有误!";
                        $this->ajaxReturn($data);
                        exit;
                    } elseif ((time() - 30 * 60) > $info['sendtime']) {
                        $data['msg'] = "验证码过时,请重新获取!";
                        $this->ajaxReturn($data);
                        exit;
                    }
                }
                //修改密码
                $up = $Mu->where(array('mobile' => $phone))->save($datad);
                if ($up) {
                    $data['status'] = 1;
                } else {
                    $data['msg'] = "密码修改失败!";
                }
            } else {
                $data['msg'] = "输入的手机号有误!";
            }



            $this->ajaxReturn($data);
        } else {
            $this->display();
        }
    }

    public function verify() {
        $config = array(
            'codeSet' => '2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY',
            'fontSize' => 22, // 验证码字体大小
            'length' => 4, // 验证码位数
            'imageH' => 40,
            'imgeW' => 100,
            'useNoise' => false
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect('/Login');
    }

    //发送验证码
    public function sendsmscode() {
        $data = array('status' => 0);
        $phone = I("phone", '', 'trim');
        $type = I("type", "login", 'trim');
        if ($type == "reg") {
            $User = D("user");
            $count = $User->where(array('mobile' => $phone))->count();
            if ($count) {
                $data['msg'] = "手机号已注册,请登录!";
                $this->ajaxReturn($data);
                exit;
            }
        }
        $verifycode = I("verifycode", '', 'trim');
        if (!checkphone($phone)) {
            $data['msg'] = "手机号不规范";
        } else {
            if (check_verify($verifycode)) {
                $data['msg'] = "图形验证码错误";
            } else {
                //if(1){
                $Code = D("smscode");


                $smscode = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
                //写入验证码记录
                $Code->add(array(
                    'phone' => $phone,
                    'code' => $smscode,
                    'sendtime' => time()
                ));
                $contstr = "【雨林金服】您的验证码为{$smscode}，请于5分钟内正确输入，如非本人操作，请忽略此短信。";
                //$contstr=$smscode;
                //$status = $Smsapi->send($phone,$contstr);
                $status = sendTsms($phone, $contstr);
                //$status = 0;
                if ($status == '0') {
                    $data['status'] = 1;
                } else {
                    $data['msg'] = "验证码发送失败,错误码:" . $status;
                }
            }
        }
        $this->ajaxReturn($data);
    }

    public function qrcodeimgaaa($url = 'http://www.baidu.com', $level = 3, $size = 4) {

        //$user=$this->getLoginUser();
        $uid = session(C('USER_AUTH_KEY'));
        $url = "http://" . $_SERVER['SERVER_NAME'] . U('Register/signup', array('invitor' => $uid));
        //$sendurl = "http://api.ft12.com/api.php?url=".urlencode($url);
        // $result =file_get_contents($sendurl);
        //$url=$result;
        Vendor('phpqrcode.phpqrcode');

        $errorCorrectionLevel = intval($level); //容错级别 
        $matrixPointSize = intval($size); //生成图片大小 
        //生成二维码图片 
        //echo $_SERVER['REQUEST_URI'];exit;
        $object = new \QRcode();
        $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);
    }

    public function qrcodeimg($url = 'http://www.baidu.com', $level = 3, $size = 4) {

        $uid = session(C('USER_AUTH_KEY'));
        $url = "http://" . $_SERVER['SERVER_NAME'] . U('Register/signup', array('invitor' => $uid));
        //$sendurl = "http://api.ft12.com/api.php?url=".urlencode($url);
        //$result =file_get_contents($sendurl);
        //$url=$result;
        Vendor('phpqrcode.phpqrcode');

        $errorCorrectionLevel = 'H'; //容错级别
        $matrixPointSize = 3.3; //图片大小慢慢自己调整，只要是int就行
        $path = 'Upload/timg/';
        $QR = $path . rand(10000, 99999) . time() . ".png";
        $object = new \QRcode();
        $object->png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);

        //$img=\QRcode::png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
        //查询北京图片
        $bjimg = C('cfg_xiatu');
        if (!$bjimg) {
            echo $QR;
            exit;
        }
        $dst_path = '.' . $bjimg; //背景图片路径
        $src_path = $QR; //覆盖图
        //创建图片的实例
        $dst = imagecreatefromstring(file_get_contents($dst_path));
        $src = imagecreatefromstring(file_get_contents($src_path));
//获取覆盖图图片的宽高
        list($src_w, $src_h) = getimagesize($src_path);
//将覆盖图复制到目标图片上，最后个参数100是设置透明度（100是不透明），这里实现不透明效果
        imagecopymerge($dst, $src, 234,750, 0, 0, $src_w, $src_h, 100);
        @unlink($QR);  //删除服务器上二维码图片
//如果覆盖图图片本身带透明色，则使用imagecopy方法

        $mm = "BG" . rand(1000, 9999);

//header("Content-type: image/png");
        imagepng($dst, 'Upload/timg/' . $uid . 'tb.png'); //根据需要生成相应的图片
//    imagejpeg($dst,'../uploads/user/'.$uid.'.jpg');
        imagedestroy($dst);
        imagedestroy($src);

        $iimg = "/Upload/timg/" . $uid . "tb.png?" . $mm;
        echo $iimg;
//echo "<img src='".$iimg."?".$mm."' style='width:100%;'>";		
    }

    public function qrcodeimgchan($url = 'http://www.baidu.com', $level = 3, $size = 4) {

        $uid = session(C('USER_AUTH_KEY'));
        $url = "http://" . $_SERVER['SERVER_NAME'] . U('Recommend/index', array('invitor' => $uid));
        //$sendurl = "http://api.ft12.com/api.php?url=".urlencode($url);
        // $result =file_get_contents($sendurl);
        //$url=$result;
        Vendor('phpqrcode.phpqrcode');

        $errorCorrectionLevel = 'H'; //容错级别
        $matrixPointSize = 3.3; //图片大小慢慢自己调整，只要是int就行
        $path = 'Upload/timg/';
        $QR = $path . rand(10000, 99999) . time() . ".png";
        $object = new \QRcode();
        $object->png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);

        //$img=\QRcode::png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
        //查询北京图片
        $bjimg = C('cfg_xiatu2');
        if (!$bjimg) {
            echo $QR;
            exit;
        }
        $dst_path = '.' . $bjimg; //背景图片路径
        $src_path = $QR; //覆盖图
        //创建图片的实例
        $dst = imagecreatefromstring(file_get_contents($dst_path));
        $src = imagecreatefromstring(file_get_contents($src_path));
//获取覆盖图图片的宽高
        list($src_w, $src_h) = getimagesize($src_path);
//将覆盖图复制到目标图片上，最后个参数100是设置透明度（100是不透明），这里实现不透明效果
        imagecopymerge($dst, $src, 234, 750, 0, 0, $src_w, $src_h, 100);
        @unlink($QR);  //删除服务器上二维码图片
//如果覆盖图图片本身带透明色，则使用imagecopy方法

        $mm = "BG" . rand(1000, 9999);

//header("Content-type: image/png");
        imagepng($dst, 'Upload/timg/' . $uid . 'tb.png'); //根据需要生成相应的图片
//    imagejpeg($dst,'../uploads/user/'.$uid.'.jpg');
        imagedestroy($dst);
        imagedestroy($src);

        $iimg = "/Upload/timg/" . $uid . "tb.png?" . $mm;
        echo $iimg;
//echo "<img src='".$iimg."?".$mm."' style='width:100%;'>";		
    }

    public function qrcodeimgtui($url = 'http://www.baidu.com', $level = 3, $size = 4) {

        $chanid = I('chanid');
        $style = I('style');
        $uid = session(C('USER_AUTH_KEY'));
        if ($style == 1) {
            $url = "http://" . $_SERVER['SERVER_NAME'] . U('/card/read', array('id' => $chanid, 'tid' => $uid));
        } else {
            $url = "http://" . $_SERVER['SERVER_NAME'] . U('/loan/read', array('id' => $chanid, 'tid' => $uid));
        }
        //echo $url;exit;
        // $sendurl = "http://api.ft12.com/api.php?url=".urlencode($url);
        //$result =file_get_contents($sendurl);
        //$url=$result;

        Vendor('phpqrcode.phpqrcode');

        $errorCorrectionLevel = 'H'; //容错级别
        $matrixPointSize = 3.3; //图片大小慢慢自己调整，只要是int就行
        $path = 'Upload/timg/';
        $QR = $path . rand(10000, 99999) . time() . ".png";
        $object = new \QRcode();
        $object->png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);

        //$img=\QRcode::png($url, $QR, $errorCorrectionLevel, $matrixPointSize, 2);
        //查询北京图片
        if ($style == 1) {
            $Smscode = D("card");
        } else {
            $Smscode = D("loan");
        }
        $info = $Smscode->where(array('id' => $chanid))->order()->find();
        $dst_path = '.' . $info['timg']; //背景图片路径

        if (!$info['timg']) {
            $iimg = "/" . $QR . "";
            echo "<img src='" . $iimg . "' style='width:100%;'>";
            exit;
        }
        $src_path = $QR; //覆盖图
        //创建图片的实例
        $dst = imagecreatefromstring(file_get_contents($dst_path));
        $src = imagecreatefromstring(file_get_contents($src_path));
//获取覆盖图图片的宽高
        list($src_w, $src_h) = getimagesize($src_path);
//将覆盖图复制到目标图片上，最后个参数100是设置透明度（100是不透明），这里实现不透明效果
        imagecopymerge($dst, $src, 234, 750, 0, 0, $src_w, $src_h, 100);
        @unlink($QR);  //删除服务器上二维码图片
//如果覆盖图图片本身带透明色，则使用imagecopy方法

        $mm = "BG" . rand(1000, 9999);

//header("Content-type: image/png");
        imagepng($dst, 'Upload/timg/' . $uid . '.png'); //根据需要生成相应的图片
//    imagejpeg($dst,'../uploads/user/'.$uid.'.jpg');
        imagedestroy($dst);
        imagedestroy($src);

        $iimg = "/Upload/timg/" . $uid . ".png";
        echo "<img src='" . $iimg . "?" . $mm . "' style='width:100%;'>";
    }

    //推广链接
    function signup() {
        $invitor = I('invitor');
        if (!$invitor) {
            $this->error('参数错误！');
        }

        //存入cookie
        cookie('invitor', $invitor, 7 * 24 * 3600); //7天内
        $this->display('Register/index');
    }
  function signups() {
        $invitor = I('invitor');
        if (!$invitor) {
            $this->error('参数错误！');
        }

        //存入cookie
        cookie('invitors', $invitor, 7 * 24 * 3600); //7天内
        $this->display('Register/register');
    }

    public function vvdTest() {
        //文件下载,下载一张图片
        $uid = session(C('USER_AUTH_KEY'));
        $file_name = '/Upload/timg/' . $uid . 'tb.png'; //$this->qrcodeimg();
        //$file_name="index-iPhone7.jpg";  //出现中文 程序无法完成下载 提示：文件不存在
        //对文件进行转码(PHP文件函数 比较古老 需对中文码转成 gb2312)
        $file_name = iconv("utf-8", "gb2312", $file_name);
        //设置文件下载路径(相对路径)
        //$file_path="./dowm/".$file_name;
        //使用绝对路径
        $file_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $file_name;
        //echo $file_path;exit;
        //打开文件---先判断再操作
        if (!file_exists($file_path)) {
            echo "文件不存在";
            return; //直接退出
        }
        //存在--打开文件
        $fp = fopen($file_path, "r");
        //获取文件大小
        $file_size = filesize($file_path);
        //http 下载需要的响应头
        header("Content-type: application/octet-stream"); //返回的文件
        header("Accept-Ranges: bytes");   //按照字节大小返回
        header("Accept-Length: $file_size"); //返回文件大小
        header("Content-Disposition: attachment; filename=" . $file_name); //这里客户端的弹出对话框，对应的文件名
        //向客户端返回数据
        //设置大小输出
        $buffer = 1024;
        //为了下载安全，我们最好做一个文件字节读取计数器
        $file_count = 0;

        //判断文件指针是否到了文件结束的位置(读取文件是否结束)
        while (!feof($fp) && ($file_size - $file_count) > 0) {
            $file_data = fread($fp, $buffer);
            //统计读取多少个字节数
            $file_count+=$buffer;
            //把部分数据返回给浏览器
            echo $file_data;
        }
        //关闭文件
        fclose($fp);
        $this->redirect('/User/qrcode');
    }

    //推广链接
    function tui() {

        $uid = session(C('USER_AUTH_KEY'));
        if (!$uid) {
            $this->redirect('/Login/index');
            exit;
        }

        $chanid = I('chanid');
        $style = I('style');
        if (!$style || !$chanid) {
            $this->error('参数错误！');
        }
        $this->chanid = $chanid;
        $this->style = $style;
        $this->display();
    }

}
