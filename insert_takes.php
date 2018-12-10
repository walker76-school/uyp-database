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

		$user = "";
		$crn = "";
		$success = true;

		$message = "";

		if (!empty($_POST["user"])) {
			$user = $_POST["user"];
		} else {
			$user = $_COOKIE['validated'];
		}

		if (!empty($_POST["crn"])) {
			$crn = "\"" . $_POST["crn"] . "\"";
		}

		$sql = 'SELECT current_enrollment, capacity, grade_level FROM CLASS WHERE CRN = ' . $crn;

		$result = $conn->query($sql);

		if($result && mysqli_num_rows($result) > 0){

			$correct_grade = false;
			$capacity = -1;
			$enrollment = 0;

			$row = $result->fetch_assoc();
			//var_dump($row);

			$enrollment = (int)$row["current_enrollment"];
			$capacity = (int)$row["capacity"];
			$grade_level_class = $row["grade_level"];

			$sql = 'SELECT SECONDARY_USER_INFO.Grade_In_Fall as gif FROM USERS NATURAL JOIN SECONDARY_USER_INFO WHERE USERS.ID = ' . $user;
			$result2 = $conn->query($sql);

			$row2 = $result2->fetch_assoc();
			//var_dump($row2);
			$grade_level_student = (int)$row2["gif"];

			//see if grade level is correct
			if(($grade_level_class == '4th - 5th Grade' && $grade_level_student < 6 && $grade_level_student > 3) || 
			($grade_level_class == '6th - 8th Grade' && $grade_level_student < 9 && $grade_level_student > 5) ||
			($grade_level_class == '9th - 12th Grade' && $grade_level_student < 13 && $grade_level_student > 8)
			){
				$correct_grade = true;
			}

			if($capacity > 0 && $enrollment >= $capacity){
				$message = "Error: This class is full";
			}else if($correct_grade == false){
				$message = "You are not in the correct grade for this class.";
				//echo "You are in grade " . $grade_level_student . "while the class is for " . $grade_level_class;
			}
			else{
				$stmt = 'INSERT INTO Takes (ID, CRN) VALUES (' . $user . ', ' . $crn . ');' ; // ON DUPLICATE KEY UPDATE ;
				$sql2 = 'UPDATE CLASS SET current_enrollment = current_enrollment + 1 WHERE CRN = ' . $crn;

				try{
					$conn->query("BEGIN TRANSACTION");
					$val4 = $conn->query($stmt);
					$val5 = $conn->query($sql2);
					$conn->commit();
					$success = $success && $val4 && $val5;
				}catch(Exception $e){
					$conn->rollBack();
				}
				if ($success) {
					$message = "You've successfully enrolled in the class";
				} else {
					$message = "Error: " . $stmt . "<br>" . $conn->error;
				}
			}

		} else {
			$message = "Class not found.";
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


