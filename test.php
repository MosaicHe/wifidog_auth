<?php 
	$token = $_GET['token'];
	header('location:http://192.168.1.124/auth/?stage=login&ip=192.168.111.100&mac=112233445566&token='.$token.'&incoming=0&outgoing=0&gw_id=112233445566');
?>