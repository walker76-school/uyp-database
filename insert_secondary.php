<?php
    
    include('database.php');
    include("user_validation.php");

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
    } else {
        $suffix = 'NULL';
    }

    if (!empty($_POST["firstName"])) {
        $firstName = "\"" . $_POST["firstName"] . "\"";
    } else {
        $firstName = 'NULL';
    }

    if (!empty($_POST["middleInitial"])) {
        $middleInitial = "\"" . $_POST["middleInitial"] . "\"";
    } else {
        $middleInitial = 'NULL';
    }

    if (!empty($_POST["lastName"])) {
        $lastName = "\"" . $_POST["lastName"] . "\"";
    } else {
        $lastName = 'NULL';
    }

    if (!empty($_POST["preferredName"])) {
        $preferredName = "\"" . $_POST["preferredName"] . "\"";
    } else {
        $preferredName = 'NULL';
    }

    if (!empty($_POST["addressLine1"])) {
        $addressLine1 = "\"" . $_POST["addressLine1"] . "\"";
    } else {
        $addressLine1 = 'NULL';
    }

    if (!empty($_POST["addressLine2"])) {
        $addressLine2 = "\"" . $_POST["addressLine2"] . "\"";
    } else {
        $addressLine2 = 'NULL';
    }

    if (!empty($_POST["city"])) {
        $city = "\"" . $_POST["city"] . "\"";
    } else {
        $city = 'NULL';
    }

    if (!empty($_POST["state"])) {
        $state = "\"" . $_POST["state"] . "\"";
    } else {
        $state = 'NULL';
    }

    if (!empty($_POST["zip"])) {
        $zip = "\"" . $_POST["zip"] . "\"";
    } else {
        $zip = 'NULL';
    }

    if (!empty($_POST["month"])) {
        $month = $_POST["month"];
    } else {
        $month = 'NULL';
    }

    if (!empty($_POST["day"])) {
        $day = $_POST["day"];
    } else {
        $day = 'NULL';
    }

    if (!empty($_POST["year"])) {
        $year = $_POST["year"];
    } else {
        $year = 'NULL';
    }

    if (!empty($_POST["gender"])) {
        $gender = "\"" . $_POST["gender"] . "\"";
    } else {
        $gender = 'NULL';
    }

    if (!empty($_POST["race"])) {
        $race = "\"" . $_POST["race"] . "\"";
    } else {
        $race = 'NULL';
    }

    if (!empty($_POST["schoolType"])) {
        $schoolType = "\"" . $_POST["schoolType"] . "\"";
    } else {
        $schoolType = 'NULL';
    }

    if (!empty($_POST["schoolName"])) {
        $schoolName = "\"" . $_POST["schoolName"] . "\"";
    } else {
        $schoolName = 'NULL';
    }

    if (!empty($_POST["schoolDistrict"])) {
        $schoolDistrict = "\"" . $_POST["schoolDistrict"] . "\"";
    } else {
        $schoolDistrict = 'NULL';
    }

     if (!empty($_POST["gtStatus"])) {
        $gtStatus = "\"" . $_POST["gtStatus"] . "\"";
    } else {
        $gtStatus = 'NULL';
    }

    if (!empty($_POST["gradeInFall"])) {
        $gradeInFall = $_POST["gradeInFall"];
    } else {
        $gradeInFall = 'NULL';
    }

    if (!empty($_POST["gradYear"])) {
        $gradYear = $_POST["gradYear"];
    } else {
        $gradYear = 'NULL';
    }

    if (!empty($_POST["highSchool"])) {
        $highSchool = "\"" . $_POST["highSchool"] . "\"";
    } else {
        $highSchool = 'NULL';
    }

    if (!empty($_POST["email"])) {
        $email = "\"" . $_POST["email"] . "\"";
    } else {
        $email = 'NULL';
    }

    if (!empty($_POST["phoneNumber"])) {
        $phoneNumber = "\"" . $_POST["phoneNumber"] . "\"";
    } else {
        $phoneNumber = 'NULL';
    }

    if (!empty($_POST["siblingName"])) {
        $siblingName = "\"" . $_POST["siblingName"] . "\"";
    } else {
        $siblingName = 'NULL';
    }

    if (!empty($_POST["parent1Name"])) {
        $parent1Name = "\"" . $_POST["parent1Name"] . "\"";
    } else {
        $parent1Name = 'NULL';
    }

    if (!empty($_POST["parent1AddressLine1"])) {
        $parent1AddressLine1 = "\"" . $_POST["parent1AddressLine1"] . "\"";
    } else {
        $parent1AddressLine1 = 'NULL';
    }

    if (!empty($_POST["parent1AddressLine2"])) {
        $parent1AddressLine2 = "\"" . $_POST["parent1AddressLine2"] . "\"";
    } else {
        $parent1AddressLine2 = 'NULL';
    }

    if (!empty($_POST["parent1City"])) {
        $parent1City = "\"" . $_POST["parent1City"] . "\"";
    } else {
        $parent1City = 'NULL';
    }

    if (!empty($_POST["parent1State"])) {
        $parent1State = "\"" . $_POST["parent1State"] . "\"";
    } else {
        $parent1State = 'NULL';
    }

    if (!empty($_POST["parent1Zip"])) {
        $parent1Zip = "\"" . $_POST["parent1Zip"] . "\"";
    } else {
        $parent1Zip = 'NULL';
    }

    if (!empty($_POST["parent1Email"])) {
        $parent1Email = "\"" . $_POST["parent1Email"] . "\"";
    } else {
        $parent1Email = 'NULL';
    }

    if (!empty($_POST["parent1PhoneNumber"])) {
        $parent1PhoneNumber = "\"" . $_POST["parent1PhoneNumber"] . "\"";
    } else {
        $parent1PhoneNumber = 'NULL';
    }

    if (!empty($_POST["parent1PhoneType"])) {
        $parent1PhoneType = "\"" . $_POST["parent1PhoneType"] . "\"";
    } else {
        $parent1PhoneType = 'NULL';
    }

    if (!empty($_POST["parent2Name"])) {
        $parent2Name = "\"" . $_POST["parent2Name"] . "\"";
    } else {
        $parent2Name = 'NULL';
    }

    if (!empty($_POST["parent2AddressLine1"])) {
        $parent2AddressLine1 = "\"" . $_POST["parent2AddressLine1"] . "\"";
    } else {
        $parent2AddressLine1 = 'NULL';
    }

    if (!empty($_POST["parent2AddressLine2"])) {
        $parent2AddressLine2 = "\"" . $_POST["parent2AddressLine2"] . "\"";
    } else {
        $parent2AddressLine2 = 'NULL';
    }

    if (!empty($_POST["parent2City"])) {
        $parent2City = "\"" . $_POST["parent2City"] . "\"";
    } else {
        $parent2City = 'NULL';
    }

    if (!empty($_POST["parent2State"])) {
        $parent2State = "\"" . $_POST["parent2State"] . "\"";
    } else {
        $parent2State = 'NULL';
    }

    if (!empty($_POST["parent2Zip"])) {
        $parent2Zip = "\"" . $_POST["parent2Zip"] . "\"";
    } else {
        $parent2Zip = 'NULL';
    }

    if (!empty($_POST["parent2Email"])) {
        $parent2Email = "\"" . $_POST["parent2Email"] . "\"";
    } else {
        $parent2Email = 'NULL';
    }

    if (!empty($_POST["parent2PhoneNumber"])) {
        $parent2PhoneNumber = "\"" . $_POST["parent2PhoneNumber"] . "\"";
    } else {
        $parent2PhoneNumber = 'NULL';
    }

    if (!empty($_POST["parent2PhoneType"])) {
        $parent2PhoneType = "\"" . $_POST["parent2PhoneType"] . "\"";
    } else {
        $parent2PhoneType = 'NULL';
    }

    $birthday = "\"" . $year . "-" . $month . "-" . $day . "\"";

    $stmt = 'INSERT INTO SECONDARY_USER_INFO (ID, Suffix, First_Name, Last_Name, Initial, Preferred_Name, Address_Line_1, Address_Line_2, City, State, Zip, Birthday, Gender, Race, School_Name, School_District, Grade_In_Fall, GT_Status, Grad_Year, High_School, Email, Phone_Number, Sibling_Name) VALUES (' . $user . ', ' . $suffix . ', ' . $firstName . ', ' . $lastName . ', ' . $middleInitial . ', ' . $preferredName . ', ' . $addressLine1 . ', ' . $addressLine2 . ', ' . $city . ', ' . $state . ', ' . $zip . ', ' . $birthday . ', ' . $gender . ', ' . $race . ', ' . $schoolName . ', ' . $schoolDistrict . ', ' . $gradeInFall . ', ' . $gtStatus . ', ' . $gradYear . ', ' . $highSchool . ', ' . $email . ', ' . $phoneNumber . ', ' . $siblingName . ');' ; // ON DUPLICATE KEY UPDATE ;
    echo $stmt;

    if ($conn->query($stmt) === TRUE) {
        //header('Location: index.php');
        echo "Success";
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>