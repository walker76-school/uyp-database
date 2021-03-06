<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <?php include("components/header.php"); ?>

  </head>

  <body id="page-top">

    <?php 
      include("components/navbar.php");
    ?>

    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container-fluid">

          <?php
            $user_cookie = "validated";
            $type_cookie = "type";
            if(isset($_COOKIE[$user_cookie]) && isset($_COOKIE[$type_cookie])){
              $type = $_COOKIE[$type_cookie];
              if($type == 'admin'){
                header("Location: admin_index.php");
              } else if ($type == 'user'){
                header("Location: user_index.php");
              } else {
                unset($_COOKIE[$type_cookie]);
                setcookie($type_cookie, '', time() - 3600, '/'); // empty value and old timestamp
                header("Location: login.php");
              }
            } else {
              header("Location: login.php");
            }
          ?>

        </div>

        <?php 
          include("components/footer.php");
        ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php 
      include("components/javascript.php");
    ?>

  </body>

</html>
