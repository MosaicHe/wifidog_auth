<?php 	
	session_start();
	date_default_timezone_set('PRC');
	if($_POST){
		
		$name = mysql_real_escape_string($_POST['name']);
		$pwd = mysql_real_escape_string($_POST['pwd']);
		
		if($name == 'admin' && $pwd == 'admin'){
			$token = md5(time());
			$_SESSION['token'] = $token;
			$url = $_SESSION['url'];
			//header('location:http://192.168.1.124/wifidog/auth/?stage=login&token='.$token);
			header('location:'.$url.'11111111111111111111111111111111');
		}else{
			header("location:http://192.168.1.130/wifidog/login.html");
		}
	}else{
	
		$arr = array();
		foreach($_GET as $k=>$v){
			$arr[]=$k.'='.$v;
		}
		$str = implode('|',$arr);
		$hd = fopen('login.txt','a') or die('ddd');
		fwrite($hd,date('H:i:s',time()).':'.$str."\r\n");
		fclose($hd);
		
		$port = $_GET['gw_port'];
		$gw_address = $_GET['gw_address'];
		$url = 'http://'.$gw_address .':'.$port.'/wifidog/auth?token=';
		$_SESSION['url'] = $url;
		header("location:http://localhost/wifidog/login.html");
	}
?>
