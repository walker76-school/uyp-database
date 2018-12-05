<?php
    
    include('database.php');

    $user = "";
    $crn = "";

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    } else {
        $user = $_COOKIE['validated'];
    }

    if (!empty($_POST["crn"])) {
        $crn = "\"" . $_POST["crn"] . "\"";
    }
	$sql = 'SELECT current_enrollment, capacity, grade_level FROM CLASS WHERE CRN = ' . $crn;
	$sql2 = 'UPDATE CLASS SET current_enrollment = current_enrollment + 1 WHERE CRN = ' . $crn;
	$sql3 = 'SELECT Grade_In_Fall FROM USERS NATURAL JOIN SECONDARY_USER_INFO WHERE ID = ' . $user;
	
	$result = $conn->query($sql);
	$correct_grade = false;
	if($result && mysqli_num_rows($result) > 0){
			$row = $result->fetch_assoc();
            var_dump($row);
			$enrollment = (int)$row["current_enrollment"];
			$capacity = (int)$row["capacity"];
			$grade_level_class = $row["grade_level"];
			//see if grade level is correct
			$result2 = $conn->query($sql3);
			$row2 = $result->fetch_assoc();
            var_dump($row2);
			$grade_level_student = $row2["grade_in_fall"];
			
			if(($grade_level_class == '4th - 5th Grade' && $grade_level_student < 6 && $grade_level_student > 3) || 
			    ($grade_level_class == '6th - 8th Grade' && $grade_level_student < 9 && $grade_level_student > 5) ||
			    ($grade_level_class == '9th - 12th Grade' && $grade_level_student < 13 && $grade_level_student > 8)
			){
				$correct_grade = true;
			}
	}
	if($enrollment >= $capacity){
		echo "Error: This class is full";
	}else if($correct_grade == false){
		echo "You are not in the correct grade for this class.\n You are in grade " . $grade_level_student . "while the class is for " . $grade_level_class;
	}
	else{
		$stmt = 'INSERT INTO Takes (ID, CRN) VALUES (' . $user . ', ' . $crn . ');' ; // ON DUPLICATE KEY UPDATE ;
		

		if ($conn->query($stmt) === TRUE) {
			$conn->query($sql2);
			echo "success";
			header('Location: index.php');
		} else {
			echo "Error: " . $stmt . "<br>" . $conn->error;
		}
	}

?>