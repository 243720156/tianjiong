<?php
namespace app\okok\controller;
use \Qiniu\Auth;
use \Qiniu\Storage\UploadManager;
class Index extends	\think\Controller
{	


private $accessKey = '-ziN8FET4lxeKQznq203kABogN1DqjYmkaPUOr9m';
private $secretKey = 'h68NTJ4AdNnO7ajqMF3x6uYzIubpBa8TuqUOJv3D';
private $bucket = 'song';

public function index()
    {
        // 用于签名的公钥和私钥
        $accessKey = $this->accessKey;
        $secretKey = $this->$secretKey;
        
        // 初始化签权对象
        $auth = new Auth($accessKey, $secretKey);

        dump($auth);
        
        //空间名  https://developer.qiniu.io/kodo/manual/concepts
        $bucket = $this->$bucket;
        // 生成上传Token
        $token = $auth->uploadToken($bucket);
        echo $token;
        // 构建 UploadManager 对象
        $uploadMgr = new UploadManager();
        // 上传文件到七牛
        $filePath = "./11.jpg";
        $key = 'php-logo2.png';
        list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
        echo "\n====> putFile result: \n";
        if ($err !== null) {
            var_dump($err);
        } else {
            var_dump($ret);
        }
        exit;

    }


    public function upload()
    {	
    	$accessKey = $this->accessKey;
        $secretKey = $this->secretKey;
        $bucket = $this->bucket;
    	$auth = new Auth($accessKey, $secretKey);
		$upToken = $auth->uploadToken($bucket);

		$this->assign('upToken',$upToken);
		return view('index');
    }



    //复制文件
    public function copyfile($value='')
    {
    	$accessKey = $this->accessKey;
        $secretKey = $this->secretKey;
        $bucket = $this->bucket;

		$key = "FiJR0I9QfTP89nJIoJvAUZOmAV5c";//文件名
		$auth = new Auth($accessKey, $secretKey);
		$config = new \Qiniu\Config();
		$bucketManager = new \Qiniu\Storage\BucketManager($auth, $config);
		
		$srcBucket = $bucket;
		$destBucket = $bucket;
		$srcKey = $key;
		$destKey = $key . "_copy";
		$err = $bucketManager->copy($srcBucket, $srcKey, $destBucket, $destKey, true);
		if ($err) {
		    print_r($err);
		}

    }

}	
