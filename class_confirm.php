<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Update</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>

</head>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

               <?php
					$name;
					$start_day;
					$grade_level;
					$room_number;
					$building;
					$instructor;
					$start_time;
					$end_time;
					$capacity;
					$current_enrollment;

                if (!empty($_POST["name"])) {
					$name = $_POST["name"];
				} else {
					$name = "-";
				}
				
				if (!empty($_POST["grade_level"])) {
					$start_day = $_POST["grade_level"];
				} else {
					$grade_level = "-";
				}
				
				if (!empty($_POST["room_number"])) {
					$start_day = $_POST["room_number"];
				} else {
					$room_number = "-";
				}
				
				if (!empty($_POST["building"])) {
					$start_day = $_POST["building"];
				} else {
					$building = "-";
				}
				
				if (!empty($_POST["instructor"])) {
					$start_day = $_POST["instructor"];
				} else {
					$instructor = "-";
				}
				
				if (!empty($_POST["capacity"])) {
					$start_day = $_POST["capacity"];
				} else {
					$capacity = "-";
				}
				
				if (!empty($_POST["current_enrollment"])) {
					$start_day = $_POST["current_enrollment"];
				} else {
					$current_enrollment = "-";
				}
				
				if (!empty($_POST["month"])) {
					$month = $_POST["month"];
				} else {
					$month = "-";
				}

				if (!empty($_POST["day"])) {
					$day = $_POST["day"];
				} else {
					$day = "-";
				}

				if (!empty($_POST["year"])) {
					$year = $_POST["year"];
				} else {
					$year = "-";
				}
				
				if (!empty($_POST["start_hour"])) {
					$start_hour = $_POST["start_hour"];
				} else {
					$start_hour = "-";
				}
				
				if (!empty($_POST["start_minute"])) {
					$start_minute = $_POST["start_minute"];
				} else {
					$start_minute = "-";
				}
				
				if (!empty($_POST["end_hour"])) {
					$end_hour = $_POST["end_hour"];
				} else {
					$end_hour = "-";
				}
				
				if (!empty($_POST["end_minute"])) {
					$end_minute = $_POST["end_minute"];
				} else {
					$end_minute = "-";
				}
                ?>

                <div class="col-md-4">
                    <h5>Class Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$name</label>" ?>
                </div>
                
                <div class="col-md-4">
                    <h5>Start Day</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$month / $day / $year</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Grade Level</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$grade_level</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Room Number</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$room_number</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Building</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$building</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Instructor</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$instructor</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Start Time</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$start_hour : $start_minute</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>End Time</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$end_hour : $end_minute</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Capacity</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$capacity</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Current Enrollment</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$current_enrollment</label>" ?>
                </div>

                <form method="post" action="class_insert.php">
                    
                    <input type="hidden" name="name" value=<?php echo $name ?> >
                    <input type="hidden" name="grade_level" value=<?php echo $grade_level ?> >
                    <input type="hidden" name="room_number" value=<?php echo $room_number ?> >
                    <input type="hidden" name="building" value=<?php echo $building ?> >
                    <input type="hidden" name="instructor" value=<?php echo $instructor ?> >
                    <input type="hidden" name="capacity" value=<?php echo $capacity ?> >
                    <input type="hidden" name="current_enrollment" value=<?php echo $current_enrollment?> >
                    <input type="hidden" name="month" value=<?php echo $month ?> >
                    <input type="hidden" name="day" value=<?php echo $day ?> >
                    <input type="hidden" name="year" value=<?php echo $year ?> >
                    <input type="hidden" name="start_hour" value=<?php echo $start_hour ?> >
                    <input type="hidden" name="start_minute" value=<?php echo $start_minute ?> >
                    <input type="hidden" name="end_hour" value=<?php echo $end_hour ?> >
                    <input type="hidden" name="end_minute" value=<?php echo $end_minute ?> >

                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Submit'>

                </form>

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
