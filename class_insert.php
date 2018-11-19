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
	
	if (!empty($_POST["start_day"])) {
        $start_day = "\"" . $_POST["start_day"] . "\"";
        if(strcmp($start_day, "\"-\"") == 0){
            $start_day = 'NULL';
        }
    } else {
        $start_day = null;
    }
	
	if (!empty($_POST["grade_level"])) {
        $start_day = "\"" . $_POST["grade_level"] . "\"";
        if(strcmp($grade_level, "\"-\"") == 0){
            $grade_level = 'NULL';
        }
    } else {
        $grade_level = null;
    }
	
	if (!empty($_POST["room_number"])) {
        $start_day = "\"" . $_POST["room_number"] . "\"";
        if(strcmp($room_number, "\"-\"") == 0){
            $room_number = 'NULL';
        }
    } else {
        $room_number = null;
    }
	
	if (!empty($_POST["building"])) {
        $start_day = "\"" . $_POST["building"] . "\"";
        if(strcmp($building, "\"-\"") == 0){
            $building = 'NULL';
        }
    } else {
        $building = null;
    }
	
	if (!empty($_POST["instructor"])) {
        $start_day = "\"" . $_POST["instructor"] . "\"";
        if(strcmp($instructor, "\"-\"") == 0){
            $instructor = 'NULL';
        }
    } else {
        $instructor = null;
    }
	
	if (!empty($_POST["start_time"])) {
        $start_day = "\"" . $_POST["start_time"] . "\"";
        if(strcmp($start_time, "\"-\"") == 0){
            $start_time = 'NULL';
        }
    } else {
        $start_time = null;
    }
	
	if (!empty($_POST["end_time"])) {
        $start_day = "\"" . $_POST["end_time"] . "\"";
        if(strcmp($end_time, "\"-\"") == 0){
            $end_time = 'NULL';
        }
    } else {
        $end_time = null;
    }
	
	if (!empty($_POST["capacity"])) {
        $start_day = "\"" . $_POST["capacity"] . "\"";
        if(strcmp($capacity, "\"-\"") == 0){
            $capacity = 'NULL';
        }
    } else {
        $capacity = null;
    }
	
	if (!empty($_POST["current_enrollment"])) {
        $start_day = "\"" . $_POST["current_enrollment"] . "\"";
        if(strcmp($current_enrollment, "\"-\"") == 0){
            $current_enrollment = 'NULL';
        }
    } else {
        $current_enrollment = null;
    }
	
	$stmt = 'INSERT INTO Class (Name, Start_Day, Grade_Level, Room_Number, Instructor_Name, Start_Time, End_Time, Capacity, Current_Enrollment) VALUES (' . $name . ', ' . $start_day . ', ' . $grade_level . ', ' . $room_number . ', ' . $building . ', ' . $instructor . ', ' . $start_time . ', ' . $end_time . ', ' . $capacity . ', ' . $current_enrollment . ');' ; // ON DUPLICATE KEY UPDATE ;
	if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>