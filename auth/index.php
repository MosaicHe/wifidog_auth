<?php 
	header('content-type:text/html;charset=utf-8');
	session_start();
	$stage = $_GET['stage'];
	$token = $_GET['token'];
	
	$arr = array();
		foreach($_GET as $k=>$v){
			$arr[]=$k.'='.$v;
		}
		$str = implode('|',$arr);
		$hd = fopen('auth.txt','a') or die('ddd');
		fwrite($hd,$_SESSION['token'].'---'.date('H:i:s',time()).':'.$str."\r\n");
		fclose($hd);
	/*$mac = $_GET['mac'];
	$incoming = $_GET['incoming'];
	$gw_id = $_GET['gw_id'];
	$mac = $_GET['mac'];
	$ip = $_GET['ip'];*/
	//echo $token.'==='.$_SESSION['token'];
	if($stage == 'login'){
		//echo 'Auth: 1';
		if('11111111111111111111111111111111' == $token){
			echo 'Auth: 1';
		}else{
			echo 'Auth: 0';
		}
	}elseif($stage == 'counter'){
		echo 'Auth: 0';
	}elseif($stage == 'logout'){
		$_SESSION['token'] = null;
		echo 'Auth: 1';
	}else{
		echo 'Auth: 0';
	}
?>