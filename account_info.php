<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Information</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("user_validation.php") ?>
</head>

<body id="page-top">

    <?php 
        $sql = "SELECT * FROM SECONDARY_USER_INFO WHERE id=" . $user ;
        //echo $sql;

        $result = $conn->query($sql);
        //var_dump($result);
        $row = $result->fetch_assoc();
        //var_dump($row);
    ?>

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

               <?php
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
                    $schoolName;
                    $schoolDistrict;
                    $gtStatus;
                    $gradeInFall;
                    $gradYear;
                    $highSchool;
                    $email;
                    $phoneNumber;
                    $siblingName;

                    if (!empty($row["Suffix"])) {
                        $suffix = $row["Suffix"];
                    } else {
                        $suffix = "-";
                    }

                    if (!empty($row["First_Name"])) {
                        $firstName = $row["First_Name"];
                    } else {
                        $firstName = "-";
                    }

                    if (!empty($row["Initial"])) {
                        $middleInitial = $row["Initial"];
                    } else {
                        $middleInitial = "-";
                    }

                    if (!empty($row["Last_Name"])) {
                        $lastName = $row["Last_Name"];
                    } else {
                        $lastName = "-";
                    }

                    if (!empty($row["Preferred_Name"])) {
                        $preferredName = $row["Preferred_Name"];
                    } else {
                        $preferredName = "-";
                    }

                    if (!empty($row["Address_Line_1"])) {
                        $addressLine1 = $row["Address_Line_1"];
                    } else {
                        $addressLine1 = "-";
                    }

                    if (!empty($row["Address_Line_2"])) {
                        $addressLine2 = $row["Address_Line_2"];
                    } else {
                        $addressLine2 = "-";
                    }

                    if (!empty($row["City"])) {
                        $city = $row["City"];
                    } else {
                        $city = "-";
                    }

                    if (!empty($row["State"])) {
                        $state = $row["State"];
                    } else {
                        $state = "-";
                    }

                    if (!empty($row["Zip"])) {
                        $zip = $row["Zip"];
                    } else {
                        $zip = "-";
                    }

                    if (!empty($row["Birthday"])) {
                        $birthday = $row["Birthday"];
                    } else {
                        $birthday = "-";
                    }

                    if (!empty($row["Gender"])) {
                        $gender = $row["Gender"];
                    } else {
                        $gender = "-";
                    }

                    if (!empty($row["Race"])) {
                        $race = $row["Race"];
                    } else {
                        $race = "-";
                    }

                    if (!empty($row["School_Name"])) {
                        $schoolName = $row["School_Name"];
                    } else {
                        $schoolName = "-";
                    }

                    if (!empty($row["School_District"])) {
                        $schoolDistrict = $row["School_District"];
                    } else {
                        $schoolDistrict = "-";
                    }

                    if (!empty($row["Grade_In_Fall"])) {
                        $gradeInFall = $row["Grade_In_Fall"];
                    } else {
                        $gradeInFall = "-";
                    }

                    if (!empty($row["GT_Status"])) {
                        $gtStatus = $row["GT_Status"];
                    } else {
                        $gtStatus = "-";
                    }

                    if (!empty($row["Grad_Year"])) {
                        $gradYear = $row["Grad_Year"];
                    } else {
                        $gradYear = "-";
                    }

                    if (!empty($row["High_School"])) {
                        $highSchool = $row["High_School"];
                    } else {
                        $highSchool = "-";
                    }

                    if (!empty($row["Email"])) {
                        $email = $row["Email"];
                    } else {
                        $email = "-";
                    }

                    if (!empty($row["Phone_Number"])) {
                        $phoneNumber = $row["Phone_Number"];
                    } else {
                        $phoneNumber = "-";
                    }

                    if (!empty($row["Sibling_Name"])) {
                        $siblingName = $row["Sibling_Name"];
                    } else {
                        $siblingName = "-";
                    }
                ?>

                <div class="col-md-4">
                    <h5>Suffix</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$suffix</label>" ?>
                </div>
                
                <div class="col-md-4">
                    <h5>First Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$firstName</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Middle Initial</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$middleInitial</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Last Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$lastName</label>" ?>
                </div>
                
                <div class="col-md-4">
                    <h5>Preferred Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$preferredName</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Address Line 1</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$addressLine1</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Address Line 2</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$addressLine2</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>City</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$city</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>State</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$state</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Zip</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$zip</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Birthday</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$birthday</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Gender</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gender</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Race</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$race</label>" ?>
                </div>
                
                <div class="col-md-4">
                    <h5>School Type</h5>
                </div>
                <div class="col-md-4">
                    <?php 
                        if(empty($row['School_Name']) && empty($row['School_District'])){
                            echo "<label>Home-Schooled</label>" ;
                        } else if(empty($row['School_Name']) && !empty($row['School_District'])){
                            echo "<label>Private</label>" ;
                        } else {
                            echo "<label>Public</label>";
                        }
                    ?>
                </div>

                <div class="col-md-4">
                    <h5>School Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$schoolName</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>School District</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$schoolDistrict</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>GT Status</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gtStatus</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Grade Level in Upcoming Fall</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gradeInFall</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Graduation Year</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gradYear</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Expected High School</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$highSchool</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Email Address</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$email</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Phone Number</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$phoneNumber</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Sibling Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$siblingName</label>" ?>
                </div>

            </div>
            <!-- /.container-fluid -->

            <?php include("components/footer.php"); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include("components/javascript.php"); ?>

</body>

</html>
