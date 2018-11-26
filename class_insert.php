<?php
    include('database.php');

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
        if(strcmp($name, "\"-\"") == 0){
            $name = 'NULL';
        }
    } else {
        $name = null;
    }
	
	if (!empty($_POST["grade_level"])) {
        $grade_level = "\"" . $_POST["grade_level"] . "\"";
        if(strcmp($grade_level, "\"-\"") == 0){
            $grade_level = 'NULL';
        }
    } else {
        $grade_level = null;
    }
	
	if (!empty($_POST["room_number"])) {
        $room_number = "\"" . $_POST["room_number"] . "\"";
        if(strcmp($room_number, "\"-\"") == 0){
            $room_number = 'NULL';
        }
    } else {
        $room_number = null;
    }
	
	if (!empty($_POST["building"])) {
        $building = "\"" . $_POST["building"] . "\"";
        if(strcmp($building, "\"-\"") == 0){
            $building = 'NULL';
        }
    } else {
        $building = null;
    }
	
	if (!empty($_POST["instructor"])) {
        $instructor = "\"" . $_POST["instructor"] . "\"";
        if(strcmp($instructor, "\"-\"") == 0){
            $instructor = 'NULL';
        }
    } else {
        $instructor = null;
    }
	
	if (!empty($_POST["capacity"])) {
        $capacity = "\"" . $_POST["capacity"] . "\"";
        if(strcmp($capacity, "\"-\"") == 0){
            $capacity = 'NULL';
        }
    } else {
        $capacity = null;
    }
	
	if (!empty($_POST["current_enrollment"])) {
        $current_enrollment = "\"" . $_POST["current_enrollment"] . "\"";
        if(strcmp($current_enrollment, "\"-\"") == 0){
            $current_enrollment = 'NULL';
        }
    } else {
        $current_enrollment = null;
    }
	
	if (!empty($_POST["month"])) {
        $month = $_POST["month"];
        if(strcmp($month, "\"-\"") == 0){
            $month = 'NULL';
        }
    } else {
        $month = null;
    }

    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
        if(strcmp($day, "\"-\"") == 0){
            $day = 'NULL';
        }
    } else {
        $day = null;
    }

    if (!empty($_POST["year"])) {
        $year = $_POST["year"];
        if(strcmp($year, "\"-\"") == 0){
            $year = 'NULL';
        }
    } else {
        $year = null;
    }
	
	if (!empty($_POST["start_hour"])) {
        $start_hour = $_POST["start_hour"];
        if(strcmp($start_hour, "\"-\"") == 0){
            $start_hour = 'NULL';
        }
    } else {
        $start_hour = null;
    }
	
	if (!empty($_POST["start_minute"])) {
        $start_minute = $_POST["start_minute"];
        if(strcmp($start_minute, "\"-\"") == 0){
            $start_minute = 'NULL';
        }
    } else {
        $start_minute = null;
    }
	
	if (!empty($_POST["end_hour"])) {
        $end_hour = $_POST["end_hour"];
        if(strcmp($end_hour, "\"-\"") == 0){
            $end_hour = 'NULL';
        }
    } else {
        $end_hour = null;
    }
	
	if (!empty($_POST["end_minute"])) {
        $end_minute = $_POST["end_minute"];
        if(strcmp($end_minute, "\"-\"") == 0){
            $end_minute = 'NULL';
        }
    } else {
        $end_minute = null;
    }
	
	$start_day = "\"" . $year . "-" . $month . "-" . $day . "\"";
	$start_time = "\"" . $start_hour . ":" . $start_minute . "\"";
	$end_time = "\"" . $end_hour . ":" . $end_minute . "\"";

	
	$stmt = 'INSERT INTO Class (Name, Start_Day, Grade_Level, Room_Number, Instructor_Name, Start_Time, End_Time, Capacity, Current_Enrollment) VALUES (' . $name . ', ' . $start_day . ', ' . $grade_level . ', ' . $room_number . ', ' . $building . ', ' . $instructor . ', ' . $start_time . ', ' . $end_time . ', ' . $capacity . ', ' . $current_enrollment . ');' ; // ON DUPLICATE KEY UPDATE ;
	if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>