<?php 
	include('../includes/wifidog.class.php');	
	$param = array();
	foreach($_GET as $k=>$v){
		$param[] = $v;
	}
	$wifi = new Wifi;
	@call_user_func_array(array($wifi,'ping'), $param);

?>