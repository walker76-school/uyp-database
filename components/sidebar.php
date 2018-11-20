<?php
  if($_COOKIE['type'] === 'admin'){
    include("admin_sidebar.php");
  } else {
    include("user_sidebar.php");
  }

?>