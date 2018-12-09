<?php
    
    include('database.php');

    $user = "";
    $crn = "";
	$success = true;

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    } else {
        $user = $_COOKIE['validated'];
    }

    if (!empty($_POST["crn"])) {
        $crn = "\"" . $_POST["crn"] . "\"";
    }
	$sql = 'SELECT current_enrollment, capacity, grade_level FROM CLASS WHERE CRN = ' . $crn;
	$sql3 = 'SELECT SECONDARY_USER_INFO.Grade_In_Fall as gif FROM USERS NATURAL JOIN SECONDARY_USER_INFO WHERE USERS.ID = ' . $user;
	
	$result = $conn->query($sql);
	$correct_grade = false;
	$capacity = -1;
	$enrollment = 0;
	if($result && mysqli_num_rows($result) > 0){
			$row = $result->fetch_assoc();
            var_dump($row);
			$enrollment = (int)$row["current_enrollment"];
			$capacity = (int)$row["capacity"];
			$grade_level_class = $row["grade_level"];
			$result2 = $conn->query($sql3);
			//echo $conn->error;
			//echo $sql3;

			$row2 = $result2->fetch_assoc();
            var_dump($row2);
			$grade_level_student = (int)$row2["gif"];
			
			//see if grade level is correct
			if(($grade_level_class == '4th - 5th Grade' && $grade_level_student < 6 && $grade_level_student > 3) || 
			    ($grade_level_class == '6th - 8th Grade' && $grade_level_student < 9 && $grade_level_student > 5) ||
			    ($grade_level_class == '9th - 12th Grade' && $grade_level_student < 13 && $grade_level_student > 8)
			){
				$correct_grade = true;
			}
	}
	if($capacity > 0 && $enrollment >= $capacity){
		echo "Error: This class is full";
	}else if($correct_grade == false){
		echo "You are not in the correct grade for this class.";
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
			echo "success";
			header('Location: index.php');
		} else {
			echo "Error: " . $stmt . "<br>" . $conn->error;
		}
	}

?>