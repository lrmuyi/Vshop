<?php


header("Content-type: text/html; charset=utf-8"); 
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');


// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 引入ThinkPHP入口文件
require '../ThinkPHP/ThinkPHP.php';
