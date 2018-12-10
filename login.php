<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>

  </head>

  <body class="bg-dark">

    <?php

      $error;

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user;
        $pass;

        if (!empty($_POST["user"])) {
          $user = $_POST["user"];
        }

        if (!empty($_POST["pass"])) {
          $pass = $_POST["pass"];
        }

        if($user == 'admin' && $pass == 'password'){
            setcookie("validated", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("type", "admin", time() + (86400 * 30), "/");
            header("Location: admin_index.php");
        } else {
          $sql = "SELECT * FROM Users WHERE id=" . $user . " AND password='" . $pass . "'";
          //echo $sql;

          $result = $conn->query($sql);
          //var_dump($result);

          if ($result && $result->num_rows > 0) {
              setcookie("validated", $user, time() + (86400 * 30), "/"); // 86400 = 1 day
              setcookie("type", "user", time() + (86400 * 30), "/");
              header("Location: user_index.php");
          } else {
              $error = "Invalid Credentials";
          }
        }

      }
    ?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <?php 
              if(!empty($error)){
                echo "<label style='color: red;'>$error</label>";
              }
            ?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputID" name="user" class="form-control" placeholder="User ID" required="required" autofocus="autofocus">
                <label for="inputID">User ID</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <!--
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>-->
            <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Login'>
          </form>
          <!--
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>-->
        </div>
      </div>
    </div>

    <?php include("components/javascript.php"); ?>

  </body>

</html>
