<?php 
// 本类由系统自动生成，仅供测试用途
class Wifi{
    public function index(){
		echo "hello,wifidog!";
    }
	
	public function ping(){
		$arr = array();
		foreach($_GET as $k=>$v){
			$arr[]=$k.'='.$v;
		}
		$str = implode('|',$arr);
		$hd = fopen('../test.txt','a') or die('ddd');
		fwrite($hd,$str."\r\n");
		fclose($hd);
		
		echo 'Pong';	
	}
	public function login(){
		
		if($_POST){
			
		}else{
			$mac = 
			header('location:http://192.168.1.124/wifidog/login.html');
		}
		
		
	}
	/*public function auth(){
		$data['id'] = I('get.ip','');
		$data['mac'] = I('get.mac','');
		$data['token'] = I('get.token','');
		$data['incoming'] = I('get.incoming','');
		$data['outgoing'] = I('get.outgoing','');
		$data['stage'] = I('get.stage','');
		if($data['stage'] == 'login')  
		{  
          //根据MAC地址查询用户token，等相关验证
          if(true){
			echo "Auth: 1"; 
		  }else{
			echo "Auth: 0";
		  }
           
		}  
		else if($data['stage'] == 'counters')  
		{  
        //做一个简单的流量判断验证，下载流量超值时，返回下线通知，否则保持在线  
			if(!empty($data['incoming']) and $data['incoming'] > 10000000)  
			{  
				  echo "Auth: 0";  
			}
			else
			{  
				echo "Auth: 1\n";  
			}  
		}  
		else
		{  
          echo "Auth: 0"; //其他情况都返回拒绝  
		}
	}
	
	public function portal(){
		/*  
		  wifidog 带过来的参数 如下  
		  1. gw_id  
		*
		redirect('http://www.baidu.com');
	}
	
	/**  
     * wifidog 的gw_message 接口，信息提示页面  
     * 
    public function gw_message(){  
      if (isset($_REQUEST["message"])) {  
          switch ($_REQUEST["message"]) {  
              case 'failed_validation':  
                  //auth的stage为login时，被服务器返回AUTH_VALIDATION_FAILED时，来到该处处理  
                  //认证失败，请重新认证  
                  break;  
              case 'denied':  
                  //auth的stage为login时，被服务器返回AUTH_DENIED时，来到该处处理  
                  //认证被拒  
                  break;  
              case 'activate':  
                  //auth的stage为login时，被服务器返回AUTH_VALIDATION时，来到该处处理  
                  //待激活  
                  break;  
              default:  
                  break;  
          }  
      }else{  
          //不回显任何信息  
      }  
    }*/
}
?>