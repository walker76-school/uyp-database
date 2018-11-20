<?php
	$cookie_name = "validated";

	if (isset($_COOKIE[$cookie_name])) {
	    unset($_COOKIE[$cookie_name]);
	    setcookie($cookie_name, '', time() - 3600, '/'); // empty value and old timestamp
	}
	header("Location: login.php");

?>