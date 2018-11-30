<?php
    include('database.php');

    $crn = generateRandomCrn();
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
	
	if (!empty($_POST["month"])) {
        $month = $_POST["month"];
    } else {
        $month = 'NULL';
    }

    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
    } else {
        $day = 'NULL';
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
	
	$start_day = "\"" . $year . "-" . $month . "-" . $day . "\"";
	$start_time = "\"" . $start_hour . ":" . $start_minute . "\"";
	$end_time = "\"" . $end_hour . ":" . $end_minute . "\"";

	
	$stmt = 'INSERT INTO Class (CRN, Name, Start_Day, Grade_Level, Room_Number, Instructor_Name, Start_Time, End_Time, Capacity, Current_Enrollment) VALUES (' . $crn, . ', ' . $name . ', ' . $start_day . ', ' . $grade_level . ', ' . $room_number . ', ' . $building . ', ' . $instructor . ', ' . $start_time . ', ' . $end_time . ', ' . $capacity . ', ' . $current_enrollment . ');' ; // ON DUPLICATE KEY UPDATE ;
	if ($conn->query($stmt) === TRUE) {
        header('Location: admin_index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>