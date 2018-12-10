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

        $message = "";

        $crn = generateRandomCrn();
        $name;
        $grade_level;
        $room_number;
        $building;
        $instructor;
        $session;
        $year;
        $start_hour;
        $start_minute;
        $start_period;
        $end_hour;
        $end_minute;
        $end_period;
        $capacity;
        $current_enrollment;

        if (!empty($_POST["name"])) {
            $name = "\"" . $_POST["name"] . "\"";
        } else {
            $name = 'NULL';
        }
        
        if (!empty($_POST["grade_level"])) {
            $grade_level = "\"" . $_POST["grade_level"] . "\"";
        } else {
            $grade_level = 'NULL';
        }
        
        if (!empty($_POST["room_number"])) {
            $room_number = "\"" . $_POST["room_number"] . "\"";
        } else {
            $room_number = 'NULL';
        }
        
        if (!empty($_POST["building"])) {
            $building = "\"" . $_POST["building"] . "\"";
        } else {
            $building = 'NULL';
        }
        
        if (!empty($_POST["instructor"])) {
            $instructor = "\"" . $_POST["instructor"] . "\"";
        } else {
            $instructor = 'NULL';
        }
        
        if (!empty($_POST["capacity"])) {
            $capacity = "\"" . $_POST["capacity"] . "\"";
        } else {
            $capacity = 'NULL';
        }
        
        if (!empty($_POST["current_enrollment"])) {
            $current_enrollment = "\"" . $_POST["current_enrollment"] . "\"";
        } else {
            $current_enrollment = 'NULL';
        }
        
        if (!empty($_POST["session"])) {
            $session = "\"" . $_POST["session"] . "\"";
        } else {
            $session = 'NULL';
        }

        if (!empty($_POST["year"])) {
            $year = $_POST["year"];
        } else {
            $year = 'NULL';
        }
        
        if (!empty($_POST["start_hour"])) {
            $start_hour = $_POST["start_hour"];
        } else {
            $start_hour = 'NULL';
        }
        
        if (!empty($_POST["start_minute"])) {
            $start_minute = $_POST["start_minute"];
        } else {
            $start_minute = 'NULL';
        }

        if (!empty($_POST["start_period"])) {
            $start_period = $_POST["start_period"];
            if(strcmp($start_period, "PM") == 0 && $start_hour != 12){
                $start_hour += 12;
            } else if (strcmp($start_period, "AM") == 0 && $start_hour == 12){
                $start_hour = 0;
            }
        }
        
        if (!empty($_POST["end_hour"])) {
            $end_hour = $_POST["end_hour"];
        } else {
            $end_hour = 'NULL';
        }
        
        if (!empty($_POST["end_minute"])) {
            $end_minute = $_POST["end_minute"];
        } else {
            $end_minute = 'NULL';
        }

        if (!empty($_POST["end_period"])) {
            $end_period = $_POST["end_period"];
            if(strcmp($end_period, "PM") == 0 && $end_hour != 12){
                $end_hour += 12;
            } else if (strcmp($end_period, "AM") == 0 && $end_hour == 12){
                $end_hour = 0;
            }
        }

        if (!empty($_POST["capacity"])) {
            $capacity = $_POST["capacity"];
        } else {
            $capacity = '0';
        }

        $start_time = "\"" . $start_hour . ":" . $start_minute . "\"";
        $end_time = "\"" . $end_hour . ":" . $end_minute . "\"";

        $stmt = 'INSERT INTO Class (CRN, Name, Grade_Level, Building, Room_Number, Instructor_Name, Session, Year, Start_Time, End_Time, Capacity, Current_Enrollment) VALUES (' . $crn . ', ' . $name . ', ' . $grade_level . ', ' . $building . ', ' . $room_number . ', ' . $instructor . ', ' . $session . ', ' . $year . ', ' . $start_time . ', ' . $end_time . ', ' . $capacity . ', 0);' ; // ON DUPLICATE KEY UPDATE ;

        $checkStmt = 'SELECT * FROM Class WHERE Name=' . $name . ' AND Session = ' . $session . ' AND Year=' . $year . ' AND Grade_Level=' . $grade_level;
        $checkResult = $conn->query($checkStmt);
        //echo $checkStmt;

        if($checkResult && mysqli_num_rows($checkResult) > 0){
            $message = "Class already exists for that session and grade level";
        } else {
            if ($conn->query($stmt) === TRUE) {
                $message = "Class created successfully";
            } else {
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