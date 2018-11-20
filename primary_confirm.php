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
    <?php include("user_validation.php") ?>

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

                    $parent1Name;
                    $parent1AddressLine1;
                    $parent1AddressLine2;
                    $parent1City;
                    $parent1State;
                    $parent1Zip;
                    $parent1Email;
                    $parent1PhoneNumber;
                    $parent1PhoneType;

                    $parent2Name;
                    $parent2AddressLine1;
                    $parent2AddressLine2;
                    $parent2City;
                    $parent2State;
                    $parent2Zip;
                    $parent2Email;
                    $parent2PhoneNumber;
                    $parent2PhoneType;

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

                    if (!empty($_POST["parent1Name"])) {
                        $parent1Name = $_POST["parent1Name"];
                    } else {
                        $parent1Name = "-";
                    }

                    if (!empty($_POST["parent1AddressLine1"])) {
                        $parent1AddressLine1 = $_POST["parent1AddressLine1"];
                    } else {
                        $parent1AddressLine1 = "-";
                    }

                    if (!empty($_POST["parent1AddressLine2"])) {
                        $parent1AddressLine2 = $_POST["parent1AddressLine2"];
                    } else {
                        $parent1AddressLine2 = "-";
                    }

                    if (!empty($_POST["parent1City"])) {
                        $parent1City = $_POST["parent1City"];
                    } else {
                        $parent1City = "-";
                    }

                    if (!empty($_POST["parent1State"])) {
                        $parent1State = $_POST["parent1State"];
                    } else {
                        $parent1State = "-";
                    }

                    if (!empty($_POST["parent1Zip"])) {
                        $parent1Zip = $_POST["parent1Zip"];
                    } else {
                        $parent1Zip = "-";
                    }

                    if (!empty($_POST["parent1Email"])) {
                        $parent1Email = $_POST["parent1Email"];
                    } else {
                        $parent1Email = "-";
                    }

                    if (!empty($_POST["parent1PhoneNumber"])) {
                        $parent1PhoneNumber = $_POST["parent1PhoneNumber"];
                    } else {
                        $parent1PhoneNumber = "-";
                    }

                    if (!empty($_POST["parent1PhoneType"])) {
                        $parent1PhoneType = $_POST["parent1PhoneType"];
                    } else {
                        $parent1PhoneType = "-";
                    }

                    if (!empty($_POST["parent2Name"])) {
                        $parent2Name = $_POST["parent2Name"];
                    } else {
                        $parent2Name = "-";
                    }

                    if (!empty($_POST["parent2AddressLine1"])) {
                        $parent2AddressLine1 = $_POST["parent2AddressLine1"];
                    } else {
                        $parent2AddressLine1 = "-";
                    }

                    if (!empty($_POST["parent2AddressLine2"])) {
                        $parent2AddressLine2 = $_POST["parent2AddressLine2"];
                    } else {
                        $parent2AddressLine2 = "-";
                    }

                    if (!empty($_POST["parent2City"])) {
                        $parent2City = $_POST["parent2City"];
                    } else {
                        $parent2City = "-";
                    }

                    if (!empty($_POST["parent2State"])) {
                        $parent2State = $_POST["parent2State"];
                    } else {
                        $parent2State = "-";
                    }

                    if (!empty($_POST["parent2Zip"])) {
                        $parent2Zip = $_POST["parent2Zip"];
                    } else {
                        $parent2Zip = "-";
                    }

                    if (!empty($_POST["parent2Email"])) {
                        $parent2Email = $_POST["parent2Email"];
                    } else {
                        $parent2Email = "-";
                    }

                    if (!empty($_POST["parent2PhoneNumber"])) {
                        $parent2PhoneNumber = $_POST["parent2PhoneNumber"];
                    } else {
                        $parent2PhoneNumber = "-";
                    }

                    if (!empty($_POST["parent2PhoneType"])) {
                        $parent2PhoneType = $_POST["parent2PhoneType"];
                    } else {
                        $parent2PhoneType = "-";
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
<!-- TODO - Check if home and hide these fields as autofill may still fill them with values on submit -->
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

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1Name</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Address Line 1</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1AddressLine1</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Address Line 2</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1AddressLine2</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 City</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1City</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 State</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1State</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Zip</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1Zip</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Email</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1Email</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Phone Number</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1PhoneNumber</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Phone Type</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent1PhoneType</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2Name</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Address Line 1</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2AddressLine1</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Address Line 2</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2AddressLine2</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 City</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2City</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 State</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2State</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Zip</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2Zip</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Email</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2Email</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Phone Number</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2PhoneNumber</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Phone Type</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$parent2PhoneType</label>" ?>
                </div>

                <a class='btn btn-primary btn-block col-md-3' href="primary.php">Go Back</a>


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
                    <input type="hidden" name="parent1Name" value=<?php echo $parent1Name ?> >
                    <input type="hidden" name="parent1AddressLine1" value=<?php echo $parent1AddressLine1 ?> >
                    <input type="hidden" name="parent1AddressLine2" value=<?php echo $parent1AddressLine2 ?> >
                    <input type="hidden" name="parent1City" value=<?php echo $parent1City ?> >
                    <input type="hidden" name="parent1State" value=<?php echo $parent1State ?> >
                    <input type="hidden" name="parent1Zip" value=<?php echo $parent1Zip ?> >
                    <input type="hidden" name="parent1Email" value=<?php echo $parent1Email ?> >
                    <input type="hidden" name="parent1PhoneNumber" value=<?php echo $parent1PhoneNumber ?> >
                    <input type="hidden" name="parent1PhoneType" value=<?php echo $parent1PhoneType ?> >
                    <input type="hidden" name="parent2Name" value=<?php echo $parent2Name ?> >
                    <input type="hidden" name="parent2AddressLine1" value=<?php echo $parent2AddressLine1 ?> >
                    <input type="hidden" name="parent2AddressLine2" value=<?php echo $parent2AddressLine2 ?> >
                    <input type="hidden" name="parent2City" value=<?php echo $parent2City ?> >
                    <input type="hidden" name="parent2State" value=<?php echo $parent2State ?> >
                    <input type="hidden" name="parent2Zip" value=<?php echo $parent2Zip ?> >
                    <input type="hidden" name="parent2Email" value=<?php echo $parent2Email ?> >
                    <input type="hidden" name="parent2PhoneNumber" value=<?php echo $parent2PhoneNumber ?> >
                    <input type="hidden" name="parent2PhoneType" value=<?php echo $parent2PhoneType ?> >

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
