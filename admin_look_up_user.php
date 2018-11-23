<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Look up User</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php 
        $id = "";
        $suffix = "-";
        $firstName = "-";
        $middleInitial = "-";
        $lastName = "-";
        $preferredName = "-";
        $addressLine1 = "-";
        $addressLine2 = "-";
        $city = "-";
        $state = "-";
        $zip = "-";
        $birthday = "-";
        $gender = "-";
        $race = "-";
        $schoolName = "-";
        $schoolDistrict = "-";
        $gtStatus = "-";
        $gradeInFall = "-";
        $gradYear = "-";
        $highSchool = "-";
        $email = "-";
        $phoneNumber = "-";
        $siblingName = "-";
        $yearAccepted = "-";
        $gradeAccepted = "-";
        $enrollmentStatus = "-";
        $grantStatus = "-";
        $disability = "-";
        $health = "-";
        $ell = "-";
        $additional = "-";
        $error;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['user'];
        }

        $checkUserSql = "SELECT * FROM USERS WHERE id=" . $id ;
        $checkUserResult = $conn->query($checkUserSql);
        //var_dump($checkUserResult);

        $sql = "SELECT * FROM SECONDARY_USER_INFO LEFT JOIN ADMIN_USER_INFO ON SECONDARY_USER_INFO.ID = ADMIN_USER_INFO.ID WHERE SECONDARY_USER_INFO.ID=" . $id ;
        //echo $sql;

        $result = $conn->query($sql);
        //var_dump($result);

        if($result && mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
            //var_dump($row);

            if (!empty($row["Suffix"])) {
                $suffix = $row["Suffix"];
            }

            if (!empty($row["First_Name"])) {
                $firstName = $row["First_Name"];
            }

            if (!empty($row["Initial"])) {
                $middleInitial = $row["Initial"];
            }

            if (!empty($row["Last_Name"])) {
                $lastName = $row["Last_Name"];
            }

            if (!empty($row["Preferred_Name"])) {
                $preferredName = $row["Preferred_Name"];
            }

            if (!empty($row["Address_Line_1"])) {
                $addressLine1 = $row["Address_Line_1"];
            }

            if (!empty($row["Address_Line_2"])) {
                $addressLine2 = $row["Address_Line_2"];
            }

            if (!empty($row["City"])) {
                $city = $row["City"];
            }

            if (!empty($row["State"])) {
                $state = $row["State"];
            }

            if (!empty($row["Zip"])) {
                $zip = $row["Zip"];
            }

            if (!empty($row["Birthday"])) {
                $birthday = $row["Birthday"];
            }

            if (!empty($row["Gender"])) {
                $gender = $row["Gender"];
            }

            if (!empty($row["Race"])) {
                $race = $row["Race"];
            }

            if (!empty($row["School_Name"])) {
                $schoolName = $row["School_Name"];
            }

            if (!empty($row["School_District"])) {
                $schoolDistrict = $row["School_District"];
            }

            if (!empty($row["Grade_In_Fall"])) {
                $gradeInFall = $row["Grade_In_Fall"];
            }

            if (!empty($row["GT_Status"])) {
                $gtStatus = $row["GT_Status"];
            }

            if (!empty($row["Grad_Year"])) {
                $gradYear = $row["Grad_Year"];
            }

            if (!empty($row["High_School"])) {
                $highSchool = $row["High_School"];
            }

            if (!empty($row["Email"])) {
                $email = $row["Email"];
            }

            if (!empty($row["Phone_Number"])) {
                $phoneNumber = $row["Phone_Number"];
            } 

            if (!empty($row["Sibling_Name"])) {
                $siblingName = $row["Sibling_Name"];
            }

            if (!empty($row["Year_Accepted"])) {
                $yearAccepted = $row["Year_Accepted"];
            }

            if (!empty($row["Grade_Accepted"])) {
                $gradeAccepted = $row["Grade_Accepted"];
            }

            if (!empty($row["Enrollment_Status"])) {
                $enrollmentStatus = $row["Enrollment_Status"];
            }

            if (!empty($row["Grant_Status"])) {
                $grantStatus = $row["Grant_Status"];
            }

            if (!empty($row["Disability"])) {
                $disability = $row["Disability"];
            }

            if (!empty($row["Health"])) {
                $health = $row["Health"];
            }

            if ($row["ELL"]) {
                $ell = 'Yes';
            } else {
                $ell = 'No';
            }

            if (!empty($row["Additional_Info"])) {
                $additional = $row["Additional_Info"];
            }

            $error = "";
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(!$checkUserResult || mysqli_num_rows($checkUserResult) <= 0){
                $error = "User not found";
            }
        }
    ?>

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <h3>Look up student</h3>
                <p>Please enter a user's id, which can be found in the student directory, to look up information on that student.</p>

                <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method='post'>

                    <!-- User -->
                    <div class="form-group">
                      <div class="form-label-group">
                         <input type="text" id="inputID" name="user" class="form-control" placeholder="User ID" required="required">
                        <label for="inputID">User ID</label>
                      </div>
                    </div>
                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Search User'>
                       
                </form>

                <?php
                    if(!empty($error)){
                        echo "<label style='color: red;'>$error</label>";
                    }
                ?>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)) {
                        echo "<div>";
                    } else {
                        echo "<div style='display: none;'>";
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

                    <div class="col-md-4">
                        <h5>Year Accepted</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$yearAccepted</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Grade Accepted</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$gradeAccepted</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Enrollment Status</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$enrollmentStatus</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Grant Funded?</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo strcmp($grantStatus, "-") ? "<label>Yes</label>" : "<label>No</label>"?>
                    </div>

                    <div class="col-md-4">
                        <h5>Grant Name</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$grantStatus</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Disability</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$disability</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Health</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$health</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>English Language Learner?</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$ell</label>" ?>
                    </div>

                    <div class="col-md-4">
                        <h5>Additional Information</h5>
                    </div>
                    <div class="col-md-4">
                        <?php echo "<label>$additional</label>" ?>
                    </div>

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
