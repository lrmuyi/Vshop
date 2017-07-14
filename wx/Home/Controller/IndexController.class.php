<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	$this->display();
    }
	public function getmoney(){
	return "提款1000元";
    }
    public function call_person(){
//	var_dump(get_defined_constants(TRUE));
	$this -> display();
    }
	public function about(){
	$this->display();
    }
	public function commodity_car(){
	$this->display();
    }
	public function my_collection(){
	$this->display();
    }
	public function order_mang(){
	$this->display();
    }
	public function person_info(){
	$this->display();
    }
	public function location(){
	$this->display(location);
    }
	public function purchase_history(){
	$this->display(purchase_history);
    }
	public function _empty(){
		echo "服务器繁忙";
    }
}