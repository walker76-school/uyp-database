<?php
    
    include('database.php');

    $user;
    $crn;

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
		echo "Not registered for this class";
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
				header('Location: index.php');
			}else {
				echo "Error: " . $stmt . "<br>" . $conn->error;
			}
		}catch(Exception $e){
			$conn->rollBack();
			echo "Error: " . $stmt . "<br>" . $conn->error;
		}
		
	}

?>