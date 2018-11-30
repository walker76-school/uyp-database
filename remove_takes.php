<?php
    
    include('database.php');

    $user;
    $crn;

    if (!empty($_POST["user"])) {
        $user = $_POST["user"];
    } else {
        $user = 'NULL';
    }

    if (!empty($_POST["crn"])) {
        $crn = $_POST["crn"];
    } else {
        $crn = 'crn';
    }

    $stmt = 'DELETE FROM Takes WHERE ID=' . $user . ' AND CRN= ' . $crn ; // ON DUPLICATE KEY UPDATE ;

    if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>