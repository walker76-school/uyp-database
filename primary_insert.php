<?php
    
    include('database.php');
    include("validation.php");

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
        $gender = "\"" . strtolower($_POST["gender"]) . "\"";
        if(strcmp($gender, "\"-\"") == 0){
            $gender = 'NULL';
        }
    } else {
        $gender = null;
    }

    if (!empty($_POST["race"])) {
        $race = "\"" . strtolower($_POST["race"]) . "\"";
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

    if (!empty($_POST["parent1Name"])) {
        $parent1Name = "\"" . $_POST["parent1Name"] . "\"";
        if(strcmp($parent1Name, "\"-\"") == 0){
            $parent1Name = 'NULL';
        }
    } else {
        $parent1Name = null;
    }

    if (!empty($_POST["parent1AddressLine1"])) {
        $parent1AddressLine1 = "\"" . $_POST["parent1AddressLine1"] . "\"";
        if(strcmp($parent1AddressLine1, "\"-\"") == 0){
            $parent1AddressLine1 = 'NULL';
        }
    } else {
        $parent1AddressLine1 = null;
    }

    if (!empty($_POST["parent1AddressLine2"])) {
        $parent1AddressLine2 = "\"" . $_POST["parent1AddressLine2"] . "\"";
        if(strcmp($parent1AddressLine2, "\"-\"") == 0){
            $parent1AddressLine2 = 'NULL';
        }
    } else {
        $parent1AddressLine2 = null;
    }

    if (!empty($_POST["parent1City"])) {
        $parent1City = "\"" . $_POST["parent1City"] . "\"";
        if(strcmp($parent1City, "\"-\"") == 0){
            $parent1City = 'NULL';
        }
    } else {
        $parent1City = null;
    }

    if (!empty($_POST["parent1State"])) {
        $parent1State = "\"" . $_POST["parent1State"] . "\"";
        if(strcmp($parent1State, "\"-\"") == 0){
            $parent1State = 'NULL';
        }
    } else {
        $parent1State = null;
    }

    if (!empty($_POST["parent1Zip"])) {
        $parent1Zip = "\"" . $_POST["parent1Zip"] . "\"";
        if(strcmp($parent1Zip, "\"-\"") == 0){
            $parent1Zip = 'NULL';
        }
    } else {
        $parent1Zip = null;
    }

    if (!empty($_POST["parent1Email"])) {
        $parent1Email = "\"" . $_POST["parent1Email"] . "\"";
        if(strcmp($parent1Email, "\"-\"") == 0){
            $parent1Email = 'NULL';
        }
    } else {
        $parent1Email = null;
    }

    if (!empty($_POST["parent1PhoneNumber"])) {
        $parent1PhoneNumber = "\"" . $_POST["parent1PhoneNumber"] . "\"";
        if(strcmp($parent1PhoneNumber, "\"-\"") == 0){
            $parent1PhoneNumber = 'NULL';
        }
    } else {
        $parent1PhoneNumber = null;
    }

    if (!empty($_POST["parent1PhoneType"])) {
        $parent1PhoneType = "\"" . $_POST["parent1PhoneType"] . "\"";
        if(strcmp($parent1PhoneType, "\"-\"") == 0){
            $parent1PhoneType = 'NULL';
        }
    } else {
        $parent1PhoneType = null;
    }

    if (!empty($_POST["parent2Name"])) {
        $parent2Name = "\"" . $_POST["parent2Name"] . "\"";
        if(strcmp($parent2Name, "\"-\"") == 0){
            $parent2Name = 'NULL';
        }
    } else {
        $parent2Name = null;
    }

    if (!empty($_POST["parent2AddressLine1"])) {
        $parent2AddressLine1 = "\"" . $_POST["parent2AddressLine1"] . "\"";
        if(strcmp($parent2AddressLine1, "\"-\"") == 0){
            $parent2AddressLine1 = 'NULL';
        }
    } else {
        $parent2AddressLine1 = null;
    }

    if (!empty($_POST["parent2AddressLine2"])) {
        $parent2AddressLine2 = "\"" . $_POST["parent2AddressLine2"] . "\"";
        if(strcmp($parent2AddressLine2, "\"-\"") == 0){
            $parent2AddressLine2 = 'NULL';
        }
    } else {
        $parent2AddressLine2 = null;
    }

    if (!empty($_POST["parent2City"])) {
        $parent2City = "\"" . $_POST["parent2City"] . "\"";
        if(strcmp($parent2City, "\"-\"") == 0){
            $parent2City = 'NULL';
        }
    } else {
        $parent2City = null;
    }

    if (!empty($_POST["parent2State"])) {
        $parent2State = "\"" . $_POST["parent2State"] . "\"";
        if(strcmp($parent2State, "\"-\"") == 0){
            $parent2State = 'NULL';
        }
    } else {
        $parent2State = null;
    }

    if (!empty($_POST["parent2Zip"])) {
        $parent2Zip = "\"" . $_POST["parent2Zip"] . "\"";
        if(strcmp($parent2Zip, "\"-\"") == 0){
            $parent2Zip = 'NULL';
        }
    } else {
        $parent2Zip = null;
    }

    if (!empty($_POST["parent2Email"])) {
        $parent2Email = "\"" . $_POST["parent2Email"] . "\"";
        if(strcmp($parent2Email, "\"-\"") == 0){
            $parent2Email = 'NULL';
        }
    } else {
        $parent2Email = null;
    }

    if (!empty($_POST["parent2PhoneNumber"])) {
        $parent2PhoneNumber = "\"" . $_POST["parent2PhoneNumber"] . "\"";
        if(strcmp($parent2PhoneNumber, "\"-\"") == 0){
            $parent2PhoneNumber = 'NULL';
        }
    } else {
        $parent2PhoneNumber = null;
    }

    if (!empty($_POST["parent2PhoneType"])) {
        $parent2PhoneType = "\"" . $_POST["parent2PhoneType"] . "\"";
        if(strcmp($parent2PhoneType, "\"-\"") == 0){
            $parent2PhoneType = 'NULL';
        }
    } else {
        $parent2PhoneType = null;
    }

    $birthday = "\"" . $year . "-" . $month . "-" . $day . "\"";

    $stmt = 'INSERT INTO SECONDARY_USER_INFO (ID, Suffix, First_Name, Last_Name, Initial, Preferred_Name, Address_Line_1, Address_Line_2, City, State, Zip, Birthday, Gender, Race, School_Name, School_District, Grade_In_Fall, GT_Status, Grad_Year, High_School, Email, Phone_Number, Sibling_Name) VALUES (' . $user . ', ' . $suffix . ', ' . $firstName . ', ' . $lastName . ', ' . $middleInitial . ', ' . $preferredName . ', ' . $addressLine1 . ', ' . $addressLine2 . ', ' . $city . ', ' . $state . ', ' . $zip . ', ' . $birthday . ', ' . $gender . ', ' . $race . ', ' . $schoolName . ', ' . $schoolDistrict . ', ' . $gradeInFall . ', ' . $gtStatus . ', ' . $gradYear . ', ' . $highSchool . ', ' . $email . ', ' . $phoneNumber . ', ' . $siblingName . ');' ; // ON DUPLICATE KEY UPDATE ;

    if ($conn->query($stmt) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

?>