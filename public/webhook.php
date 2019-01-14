<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-01-10
 * Time: 16:54
 */


// 与webhook配置相同，为了安全，请设置此参数
$secret = "czjge-blog-webhook123456!";
// 项目路径
$path = "/data/blog";

// 校验发送位置，正确的情况下自动拉取代码，实现自动部署
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
if ($signature) {
    $hash = "sha1=".hash_hmac('sha1', file_get_contents("php://input"), $secret);
    if (strcmp($signature, $hash) == 0) {
	//echo shell_exec("sudo mkdir aaa 2>&1");
	//echo shell_exec("id -a");
        echo shell_exec("cd \ && cd {$path} && sudo git pull 2>&1");
        exit();
    }
}

http_response_code(404);
