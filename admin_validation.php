<?php
	$user_cookie = "validated";
	$type_cookie = "type";
	$user;

	if(!isset($_COOKIE[$user_cookie]) || !isset($_COOKIE[$type_cookie]) || $_COOKIE[$type_cookie] != 'admin') {
	    header("Location: access_denied.php");
	} else {
		$user = $_COOKIE[$user_cookie];
	}
?>