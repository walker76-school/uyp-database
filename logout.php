<?php
	$user_cookie = "validated";
	$type_cookie = "validated";

	if (isset($_COOKIE[$user_cookie])) {
	    unset($_COOKIE[$user_cookie]);
	    setcookie($user_cookie, '', time() - 3600, '/'); // empty value and old timestamp
	}

	if (isset($_COOKIE[$type_cookie])) {
	    unset($_COOKIE[$type_cookie]);
	    setcookie($type_cookie, '', time() - 3600, '/'); // empty value and old timestamp
	}

	header("Location: login.php");

?>