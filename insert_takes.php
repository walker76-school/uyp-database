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

    $stmt = 'INSERT INTO Takes (ID, CRN) VALUES (' . $user . ', ' . $crn . ');' ; // ON DUPLICATE KEY UPDATE ;

    if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>