<?php
    
    include('database.php');
    include("admin_validation.php");

    $user;
    $mentorName;
    $year;

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    } else {
        $user = 'NULL';
    }

    if (!empty($_POST["year"])) {
        $year = $_POST["year"];
    } else {
        $year = 'NULL';
    }

    if (!empty($_POST["mentorName"])) {
        $mentorName = "\"" . $_POST["mentorName"] . "\"";
    } else {
        $mentorName = 'NULL';
    }

    $stmt = 'INSERT INTO MENTOR (ID, Year, Name) VALUES (' . $user . ', ' . $year . ', ' . $mentorName . ');' ; // ON DUPLICATE KEY UPDATE ;

    if ($conn->query($stmt) === TRUE) {
        header('Location: admin_mentors.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>