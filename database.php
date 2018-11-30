<?php
	$servername = "localhost";
	$username = "php";
	$password = "ALW1mys1@%";
	$db = "UYP";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	function generateRandomUser($length = 10) {
	  $characters = '123456789';
	  $randomString = '';
	  for ($i = 0; $i < $length; $i++) {
	    $randomString .= $characters[rand(0, strlen($characters) - 1)];
	  }
	  return $randomString;
	}

	function generateRandomPass($length = 15) {
	  $characters = '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
	  $randomString = '';
	  for ($i = 0; $i < $length; $i++) {
	    $randomString .= $characters[rand(0, strlen($characters) - 1)];
	  }
	  return $randomString;
	}

	function generateRandomCrn($length = 6) {
	  $characters = '1234';
	  $randomString = '';
	  for ($i = 0; $i < $length; $i++) {
	    $randomString .= $characters[rand(0, strlen($characters) - 1)];
	  }
	  return $randomString;
	}
?>