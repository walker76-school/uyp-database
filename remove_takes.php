<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Confirmation</title>

    <?php include("components/header.php"); ?>

  </head>

	<?php
    
    include('database.php');

    $user;
    $crn;
    $message = "";

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    } else {
        $user = $_COOKIE['validated'];
    }

    if (!empty($_POST["crn"])) {
        $crn = $_POST["crn"];
    } else {
        $crn = 'crn';
    }
	$stmt = 'SELECT * FROM Takes WHERE ID=' . $user . ' AND CRN= ' . $crn ; // ON DUPLICATE KEY UPDATE ;
    $stmt2 = 'DELETE FROM Takes WHERE ID=' . $user . ' AND CRN= ' . $crn ; // ON DUPLICATE KEY UPDATE ;
	$stmt3 = 'UPDATE CLASS SET current_enrollment = current_enrollment - 1 WHERE CRN = ' . $crn;
	$result = $conn->query($stmt);
    if (mysqli_num_rows($result) === 0) {
		$message = "Not registered for this class";
	}
	else{
		$success = true;
		try{
			$conn->query("BEGIN TRANSACTION");
			$val1 = $conn->query($stmt2);
			$val2 = $conn->query($stmt3);
			$conn->commit();
			$success = $success && $val1 && $val2;
			if($success){
				$message = "You've successfully unenrolled";
			}else {
				$message = "Error: " . $stmt . "<br>" . $conn->error;
			}
		}catch(Exception $e){
			$conn->rollBack();
			$message = "Error: " . $stmt . "<br>" . $conn->error;
		}
		
	}

?>

  <body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

      <?php include("components/sidebar.php"); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Page Content -->
          <h3>Registration </h3>
      	  </br>

          <p><?php echo $message ?></p>

        </div>
        <!-- /.container-fluid -->

        <?php include("components/footer.php"); ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include("components/javascript.php"); ?>

  </body>

</html>

