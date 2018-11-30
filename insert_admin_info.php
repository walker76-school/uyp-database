<?php
    
    include('database.php');

    $user = "";
    $enrollmentStatus = "";
    $gradeAccepted = "";
    $yearAccepted = "";
    $grantStatus = "";
    $health = "";
    $disability = "";
    $ell = "";
    $additionalInfo = "";

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    }

    if (!empty($_POST["enrollmentStatus"])) {
        $enrollmentStatus = "\"" . $_POST["enrollmentStatus"] . "\"";
    }

    if (!empty($_POST["gradeAccepted"])) {
        $gradeAccepted = $_POST["gradeAccepted"];
    }

    if (!empty($_POST["yearAccepted"])) {
        $yearAccepted = $_POST["yearAccepted"];
    }

    if (!empty($_POST["grantStatus"])) {
        $grantStatus = "\"" . $_POST["grantStatus"] . "\"";
    } else {
        $grantStatus = "NULL";
    }

    if (!empty($_POST["health"])) {
        $health = "\"" . $_POST["health"] . "\"";
    }

    if (!empty($_POST["disability"])) {
        $disability = "\"" . $_POST["disability"] . "\"";
    }

    if (!empty($_POST["ell"])) {
        $ell = $_POST["ell"];
    }

    if (!empty($_POST["additionalInfo"])) {
        $additionalInfo = "\"" . $_POST["additionalInfo"] . "\"";
    }

    $stmt = 'INSERT INTO ADMIN_USER_INFO (ID, Year_Accepted, Grade_Accepted, Enrollment_Status, Grant_Status, Disability, Health, ELL, Additional_Info) VALUES (' . $user . ', ' . $yearAccepted  . ', ' . $gradeAccepted . ', ' . $enrollmentStatus . ', ' . $grantStatus . ', ' . $disability . ', ' . $health . ', ' . $ell . ', ' . $additionalInfo . ');' ; // ON DUPLICATE KEY UPDATE ;

    if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>