<?php
	$cookie_name = "validated";
	$user;

	if(!isset($_COOKIE[$cookie_name])) {
	    header("Location: login.php");
	} else {
		$user = $_COOKIE[$cookie_name];
	}
?>