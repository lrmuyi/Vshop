<?php 

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
 public function login(){
        $tips="";
        if(!empty($_POST)){
            //验证码校验
            session('name1',$_POST['name']);
            session('pwd1',$_POST['pwd']);
            // $verify = new \Think\Verify();
            // if(!$verify->check($_POST['code'])){
                // $tips="验证码错误";
            // } else {
                $user = D(admin);
                $rst = $user -> checknamepwd(htmlspecialchars($_POST['name']),htmlspecialchars($_POST['pwd']));
                if($rst === false){
                    $tips="用户名或密码错误";
                } else {
                    $user = D(admin);
                    session('name',$rst['name']);
                    session('time',$rst['lasttime']);
                    session('pwd',$rst['pwd']);
                    session('studio',$rst['studio']);
                    $sql = "update admin set lasttime = now() where name = '$rst[name]'";
                    $user->query($sql);   
                    $this -> redirect('./index.php/Home/Index/index'); 
                }
            };
            $this -> assign('tips',$tips);
            $this -> assign('lang',L());
            $this -> display();      
    }
    public  function logout(){
                    session(null);
                    $this -> redirect("./index.php/Home/User/login");
        }   








}


 ?>