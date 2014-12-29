<?php 
	include('includes/wifidog.class.php');	
	if(!isset($_GET['actions']) || empty($_GET['actions']))
	{
		echo 'API is not available';
		exit;
	}
	$action = $_GET['actions'];
	unset($_GET['actions']);
	$actArray = array(
					'login',
					'ping'
				);
	if(!in_array($action,$actArray)){
		echo 'API is not available';
		exit;
	}
	$param = array();
	foreach($_GET as $k=>$v){
		$param[] = $v;
	}
	$wifi = new Wifi;
	@call_user_func_array(array($wifi,$action), $param);
?>