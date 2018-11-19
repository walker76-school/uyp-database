<?php
    
    include('database.php');

    $suffix;
    $firstName;
    $middleInitial;
    $lastName;
    $preferredName;
    $addressLine1;
    $addressLine2;
    $city;
    $state;
    $zip;
    $birthday;
    $gender;
    $race;
    $schoolType;
    $schoolName;
    $schoolDistrict;
    $gradeInFall;
    $gtStatus;
    $gradYear;
    $highSchool;
    $email;
    $phoneNumber;
    $siblingName;

    if (!empty($_POST["suffix"])) {
        $suffix = "\"" . $_POST["suffix"] . "\"";
        if(strcmp($suffix, "\"-\"") == 0){
            $suffix = 'NULL';
        }
    } else {
        $suffix = null;
    }

    if (!empty($_POST["firstName"])) {
        $firstName = "\"" . $_POST["firstName"] . "\"";
        if(strcmp($firstName, "\"-\"") == 0){
            $firstName = 'NULL';
        }
    } else {
        $firstName = null;
    }

    if (!empty($_POST["middleInitial"])) {
        $middleInitial = "\"" . $_POST["middleInitial"] . "\"";
        if(strcmp($middleInitial, "\"-\"") == 0){
            $middleInitial = 'NULL';
        }
    } else {
        $middleInitial = null;
    }

    if (!empty($_POST["lastName"])) {
        $lastName = "\"" . $_POST["lastName"] . "\"";
        if(strcmp($lastName, "\"-\"") == 0){
            $lastName = 'NULL';
        }
    } else {
        $lastName = null;
    }

    if (!empty($_POST["preferredName"])) {
        $preferredName = "\"" . $_POST["preferredName"] . "\"";
        if(strcmp($preferredName, "\"-\"") == 0){
            $preferredName = 'NULL';
        }
    } else {
        $preferredName = null;
    }

    if (!empty($_POST["addressLine1"])) {
        $addressLine1 = "\"" . $_POST["addressLine1"] . "\"";
        if(strcmp($addressLine1, "\"-\"") == 0){
            $addressLine1 = 'NULL';
        }
    } else {
        $addressLine1 = null;
    }

    if (!empty($_POST["addressLine2"])) {
        $addressLine2 = "\"" . $_POST["addressLine2"] . "\"";
        if(strcmp($addressLine2, "\"-\"") == 0){
            $addressLine2 = 'NULL';
        }
    } else {
        $addressLine2 = null;
    }

    if (!empty($_POST["city"])) {
        $city = "\"" . $_POST["city"] . "\"";
        if(strcmp($city, "\"-\"") == 0){
            $city = 'NULL';
        }
    } else {
        $city = null;
    }

    if (!empty($_POST["state"])) {
        $state = "\"" . $_POST["state"] . "\"";
        if(strcmp($state, "\"-\"") == 0){
            $state = 'NULL';
        }
    } else {
        $state = null;
    }

    if (!empty($_POST["zip"])) {
        $zip = "\"" . $_POST["zip"] . "\"";
        if(strcmp($zip, "\"-\"") == 0){
            $zip = 'NULL';
        }
    } else {
        $zip = null;
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

    if (!empty($_POST["gender"])) {
        $gender = "\"" . $_POST["gender"] . "\"";
        if(strcmp($gender, "\"-\"") == 0){
            $gender = 'NULL';
        }
    } else {
        $gender = null;
    }

    if (!empty($_POST["race"])) {
        $race = "\"" . $_POST["race"] . "\"";
        if(strcmp($race, "\"-\"") == 0){
            $race = 'NULL';
        }
    } else {
        $race = null;
    }

    if (!empty($_POST["schoolType"])) {
        $schoolType = "\"" . $_POST["schoolType"] . "\"";
        if(strcmp($schoolType, "\"-\"") == 0){
            $schoolType = 'NULL';
        }
    } else {
        $schoolType = 'NULL';
    }

    if (!empty($_POST["schoolName"])) {
        $schoolName = "\"" . $_POST["schoolName"] . "\"";
        if(strcmp($schoolName, "\"-\"") == 0){
            $schoolName = 'NULL';
        }
    } else {
        $schoolName = null;
    }

    if (!empty($_POST["schoolDistrict"])) {
        $schoolDistrict = "\"" . $_POST["schoolDistrict"] . "\"";
        if(strcmp($schoolDistrict, "\"-\"") == 0){
            $schoolDistrict = 'NULL';
        }
    } else {
        $schoolDistrict = null;
    }

     if (!empty($_POST["gtStatus"])) {
        $gtStatus = "\"" . strtolower($_POST["gtStatus"]) . "\"";
        if(strcmp($gtStatus, "\"-\"") == 0){
            $gtStatus = 'NULL';
        }
    } else {
        $gtStatus = null;
    }

    if (!empty($_POST["gradeInFall"])) {
        $gradeInFall = $_POST["gradeInFall"];
        if(strcmp($gradeInFall, "-") == 0){
            $gradeInFall = 'NULL';
        }
    } else {
        $gradeInFall = null;
    }

    if (!empty($_POST["gradYear"])) {
        $gradYear = $_POST["gradYear"];
        if(strcmp($gradYear, "\"-\"") == 0){
            $gradYear = 'NULL';
        }
    } else {
        $gradYear = null;
    }

    if (!empty($_POST["highSchool"])) {
        $highSchool = "\"" . $_POST["highSchool"] . "\"";
        if(strcmp($highSchool, "\"-\"") == 0){
            $highSchool = 'NULL';
        }
    } else {
        $highSchool = null;
    }

    if (!empty($_POST["email"])) {
        $email = "\"" . $_POST["email"] . "\"";
        if(strcmp($email, "\"-\"") == 0){
            $email = 'NULL';
        }
    } else {
        $email = null;
    }

    if (!empty($_POST["phoneNumber"])) {
        $phoneNumber = "\"" . $_POST["phoneNumber"] . "\"";
        if(strcmp($phoneNumber, "\"-\"") == 0){
            $phoneNumber = 'NULL';
        }
    } else {
        $phoneNumber = null;
    }

    if (!empty($_POST["siblingName"])) {
        $siblingName = "\"" . $_POST["siblingName"] . "\"";
        if(strcmp($siblingName, "\"-\"") == 0){
            $siblingName = 'NULL';
        }
    } else {
        $siblingName = null;
    }

    $id = '0';
    $birthday = "\"" . $month . "-" . $day . "-" . $year . "\"";

    $stmt = 'INSERT INTO SECONDARY_USER_INFO (ID, Suffix, First_Name, Last_Name, Initial, Preferred_Name, Address_Line_1, Address_Line_2, City, State, Zip, Birthday, Gender, Race, School_Name, School_District, Grade_In_Fall, GT_Status, Grad_Year, High_School, Email, Phone_Number, Sibling_Name) VALUES (' . $id . ', ' . $suffix . ', ' . $firstName . ', ' . $lastName . ', ' . $middleInitial . ', ' . $preferredName . ', ' . $addressLine1 . ', ' . $addressLine2 . ', ' . $city . ', ' . $state . ', ' . $zip . ', ' . $birthday . ', ' . $gender . ', ' . $race . ', ' . $schoolName . ', ' . $schoolDistrict . ', ' . $gradeInFall . ', ' . $gtStatus . ', ' . $gradYear . ', ' . $highSchool . ', ' . $email . ', ' . $phoneNumber . ', ' . $siblingName . ');' ; // ON DUPLICATE KEY UPDATE ;

    //echo $stmt . "\n";

    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>