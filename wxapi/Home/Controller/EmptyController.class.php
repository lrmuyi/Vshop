<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
		public function _empty(){
			echo "服务器出错了！";
			exit;
		}
}