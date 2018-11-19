<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Update</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>

</head>

<body id="page-top">

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
                    $schoolType;
                    $schoolName;
                    $schoolDistrict;
                    $gradeInFall;
                    $gradYear;
                    $highSchool;
                    $email;
                    $phoneNumber;
                    $siblingName;

                    if (!empty($_POST["suffix"])) {
                        $suffix = $_POST["suffix"];
                    } else {
                        $suffix = "-";
                    }

                    if (!empty($_POST["firstName"])) {
                        $firstName = $_POST["firstName"];
                    } else {
                        $firstName = "-";
                    }

                    if (!empty($_POST["middleInitial"])) {
                        $middleInitial = $_POST["middleInitial"];
                    } else {
                        $middleInitial = "-";
                    }

                    if (!empty($_POST["lastName"])) {
                        $lastName = $_POST["lastName"];
                    } else {
                        $lastName = "-";
                    }

                    if (!empty($_POST["preferredName"])) {
                        $preferredName = $_POST["preferredName"];
                    } else {
                        $preferredName = "-";
                    }

                    if (!empty($_POST["addressLine1"])) {
                        $addressLine1 = $_POST["addressLine1"];
                    } else {
                        $addressLine1 = "-";
                    }

                    if (!empty($_POST["addressLine2"])) {
                        $addressLine2 = $_POST["addressLine2"];
                    } else {
                        $addressLine2 = "-";
                    }

                    if (!empty($_POST["city"])) {
                        $city = $_POST["city"];
                    } else {
                        $city = "-";
                    }

                    if (!empty($_POST["state"])) {
                        $state = $_POST["state"];
                    } else {
                        $state = "-";
                    }

                    if (!empty($_POST["zip"])) {
                        $zip = $_POST["zip"];
                    } else {
                        $zip = "-";
                    }

                    if (!empty($_POST["month"])) {
                        $month = $_POST["month"];
                    } else {
                        $month = "-";
                    }

                    if (!empty($_POST["day"])) {
                        $day = $_POST["day"];
                    } else {
                        $day = "-";
                    }

                    if (!empty($_POST["year"])) {
                        $year = $_POST["year"];
                    } else {
                        $year = "-";
                    }

                    if (!empty($_POST["gender"])) {
                        $gender = $_POST["gender"];
                    } else {
                        $gender = "-";
                    }

                    if (!empty($_POST["race"])) {
                        $race = $_POST["race"];
                    } else {
                        $race = "-";
                    }

                    if (!empty($_POST["schoolType"])) {
                        $schoolType = $_POST["schoolType"];
                    } else {
                        $schoolType = "-";
                    }

                    if (!empty($_POST["schoolName"])) {
                        $schoolName = $_POST["schoolName"];
                    } else {
                        $schoolName = "-";
                    }

                    if (!empty($_POST["schoolDistrict"])) {
                        $schoolDistrict = $_POST["schoolDistrict"];
                    } else {
                        $schoolDistrict = "-";
                    }

                    if (!empty($_POST["gtStatus"])) {
                        $gtStatus = $_POST["gtStatus"];
                    } else {
                        $gtStatus = "-";
                    }

                    if (!empty($_POST["gradeInFall"])) {
                        $gradeInFall = $_POST["gradeInFall"];
                    } else {
                        $gradeInFall = "-";
                    }

                    if (!empty($_POST["gradYear"])) {
                        $gradYear = $_POST["gradYear"];
                    } else {
                        $gradYear = "-";
                    }

                    if (!empty($_POST["highSchool"])) {
                        $highSchool = $_POST["highSchool"];
                    } else {
                        $highSchool = "-";
                    }

                    if (!empty($_POST["email"])) {
                        $email = $_POST["email"];
                    } else {
                        $email = "-";
                    }

                    if (!empty($_POST["phoneNumber"])) {
                        $phoneNumber = $_POST["phoneNumber"];
                    } else {
                        $phoneNumber = "-";
                    }

                    if (!empty($_POST["siblingName"])) {
                        $siblingName = $_POST["siblingName"];
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
                    <?php echo "<label>$month / $day / $year</label>" ?>
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
                    <h5>What kind of school did you go to?</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$schoolType</label>" ?>
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
                    <h5>Grade Level in Upcoming Fall</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gradeInFall</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Have you ever been in a GT Program before?</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$gtStatus</label>" ?>
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

                <form method="post" action="primary_insert.php">
                    
                    <input type="hidden" name="suffix" value=<?php echo $suffix ?> >
                    <input type="hidden" name="firstName" value=<?php echo $firstName ?> >
                    <input type="hidden" name="middleInitial" value=<?php echo $middleInitial ?> >
                    <input type="hidden" name="lastName" value=<?php echo $lastName ?> >
                    <input type="hidden" name="preferredName" value=<?php echo $preferredName ?> >
                    <input type="hidden" name="addressLine1" value=<?php echo $addressLine1 ?> >
                    <input type="hidden" name="addressLine2" value=<?php echo $addressLine2 ?> >
                    <input type="hidden" name="city" value=<?php echo $city ?> >
                    <input type="hidden" name="state" value=<?php echo $state ?> >
                    <input type="hidden" name="zip" value=<?php echo $zip ?> >
                    <input type="hidden" name="month" value=<?php echo $month ?> >
                    <input type="hidden" name="day" value=<?php echo $day ?> >
                    <input type="hidden" name="year" value=<?php echo $year ?> >
                    <input type="hidden" name="gender" value=<?php echo $gender ?> >
                    <input type="hidden" name="race" value=<?php echo $race ?> >
                    <input type="hidden" name="schoolType" value=<?php echo $schoolType ?> >
                    <input type="hidden" name="schoolName" value=<?php echo $schoolName ?> >
                    <input type="hidden" name="schoolDistrict" value=<?php echo $schoolDistrict ?> >
                    <input type="hidden" name="gradeInFall" value=<?php echo $gradeInFall ?> >
                    <input type="hidden" name="gtStatus" value=<?php echo $gtStatus ?> >
                    <input type="hidden" name="gradYear" value=<?php echo $gradYear ?> >
                    <input type="hidden" name="highSchool" value=<?php echo $highSchool ?> >
                    <input type="hidden" name="email" value=<?php echo $email ?> >
                    <input type="hidden" name="phoneNumber" value=<?php echo $phoneNumber ?> >
                    <input type="hidden" name="siblingName" value=<?php echo $siblingName ?> >

                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Submit'>

                </form>

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
