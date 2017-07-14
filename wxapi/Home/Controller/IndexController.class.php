<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
		public function _empty(){
			echo "服务器出错了！";
			exit;
		}
		public function checkSignature(){
			$timestamp = $_GET['timestamp'];
			$nonce 	= $_GET['nonce'];
			$token= 'fircracker';//填写你设定的key
			$echostr = $_GET['echostr'];
			$signature = $_GET['signature'];
			$options = array($timestamp,$nonce,$token);
			sort($options);
			$tmpstr = implode('', $options);
			$tmpstr = sha1($tmpstr);
			if($tmpstr == $signature && $echostr){
				echo $echostr;
				exit;
			}else{
				$this -> handleText();
			}
		}
		
		 public function responseMsg(){
			//get post data, May be due to the different environments
			$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
	        fopen('log.txt','a+');
	      	//extract post data
			if (!empty($postStr)){
	                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
	                   the best way is to check the validity of xml by yourself */
	                libxml_disable_entity_loader(true);//安全问题
	              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
	                $fromUsername = $postObj->ToUserName;
	                $toUsername = $postObj->FromUserName;
	                $keyword = trim($postObj->Content);
	                $time = time();
	                $textTpl = "<xml>
								<ToUserName><![CDATA[%s]]></ToUserName>
								<FromUserName><![CDATA[%s]]></FromUserName>
								<CreateTime>%s</CreateTime>
								<MsgType><![CDATA[%s]]></MsgType>
								<Content><![CDATA[%s]]></Content>
								</xml>";             
					if(!empty( $keyword )){
	              		$msgType = "text";
	                	$contentStr = "Welcome to wechat world!";
	                	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
	                	echo $resultStr;
	                }else{
	                	echo "Input something...";
	                }

	        }else{
	        	echo "1";
	        	exit;
	        }
	    }
		
		public function handleText(){
			$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
	        $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);

        $keyword = trim($postObj->Content);
 
        if(!empty( $keyword ))
        {
            $contentStr = "nihao";
            $resultStr = _response_text($postObj,$contentStr);
            echo $resultStr;
        }else{
            echo "Input something...";
        }
}
		
		
		
		
		
		
		
		
		
		
		public function reponseMsg(){
//			1、获取到微信推送过来的post数据
			$postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
//			2、处理消息类型，并设置回复类型
			//<xml>
			//<ToUserName><![CDATA[toUser]]></ToUserName>
			//<FromUserName><![CDATA[FromUser]]></FromUserName>
			//<CreateTime>123456789</CreateTime>
			//<MsgType><![CDATA[event]]></MsgType>
			//<Event><![CDATA[subscribe]]></Event>
			//</xml>
			$postObj = simplexml_load_string($postArr);
			//$postObj ->ToUserName = '';
			//$postObj ->FromUserName = '';
			//$postObj ->CreatTime = '';
			//$postObj ->MsgType = '';
			
			//$postObj ->Event = '';
//			3、判断该数据包是否订阅的事件推送
			if(strtolower($postObj -> MsgType) == 'event'){
//				如果是关注
				if(strtolower($postObj -> Event == 'subscribe')){
					//回复用户信息
					$toUser = $postObj -> FromUserName;
					$fromUser = $postObj -> ToUserName;
					$time = time();
					$msgType = 'text';
					$content = '欢迎关注我们的微信公众平台';
					$template = "<xml>
									<ToUserName><![CDATA[%s]]></ToUserName>
									<FromUserName><![CDATA[%s]]></FromUserName>
									<CreateTime>%s</CreateTime>
									<MsgType><![CDATA[%s]]></MsgType>
									<Event><![CDATA[%s]]></Event>
								</xml>";
					$info = sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
					echo $info;
				
				}else{
					echo 1;
				}
			}else{
				echo 2;
			}		
		}
	}
	