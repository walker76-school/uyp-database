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
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php 
        $id = "";
        $suffix = "";
        $firstName = "";
        $middleInitial = "";
        $lastName = "";
        $preferredName = "";
        $addressLine1 = "";
        $addressLine2 = "";
        $city = "";
        $state = "";
        $zip = "";
        $birthday = "";
        $day = "";
        $month = "";
        $year = "";
        $gender = "";
        $race = "";
        $schoolName = "";
        $schoolDistrict = "";
        $gtStatus = "";
        $gradeInFall = "";
        $gradYear = "";
        $highSchool = "";
        $email = "";
        $phoneNumber = "";
        $siblingName = "";
        $error;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
        }

        $checkUserSql = "SELECT * FROM USERS WHERE id=" . $id ;
        $checkUserResult = $conn->query($checkUserSql);
        //var_dump($checkUserResult);

        $sql = "SELECT * FROM SECONDARY_USER_INFO WHERE id=" . $id ;
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
                $day = substr($birthday, 8);
                $month = substr($birthday, 5, 2);
                $year = substr($birthday, 0, 4);
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

            $error = "";
        } else if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //var_dump($checkUserResult);
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
                         <input type="text" id="inputID" name="id" class="form-control" placeholder="User ID" required="required">
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

                <form action='insert_secondary.php' method='post'>

                    <!-- ID -->
                    <input type="hidden" name="id" class="form-control" required="required" value="<?php echo $id ?>">

                    <!-- Suffix -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Suffix</h5>
                            </div>
                            <div class="col-md-1">
                                <select class="form-control" id="suffix" required="required" name="suffix">
                                    <option value="" disabled selected></option>
                                    <option value="Mr" <?php if($suffix == 'Mr') echo 'selected'; ?> >Mr</option>
                                    <option value="Mrs" <?php if($suffix == 'Mrs') echo 'selected'; ?> >Mrs</option>
                                    <option value="Ms" <?php if($suffix == 'Ms') echo 'selected'; ?> >Ms</option>
                                    <option value="Dr" <?php if($suffix == 'Dr') echo 'selected'; ?> >Dr</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <div class="form-row row">
                            <div class="col-md-2">
                                <h5>First Name and Middle Initial</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="firstName" class="form-control" required="required" value="<?php echo $firstName ?>">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="middleInitial" class="form-control" length=1 value=<?php echo $middleInitial ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Preferred Name -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Preferred Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="preferredName" class="form-control" value=<?php echo $preferredName ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Last Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="lastName" class="form-control" required="required" value=<?php echo $lastName ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Address Line 1 -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Address Line 1</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="addressLine1" class="form-control" required="required" value=<?php echo $addressLine1 ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Address Line 2 -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Address Line 2</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="addressLine2" class="form-control" value=<?php echo $addressLine2 ?>>
                            </div>
                        </div>
                    </div>

                    <!-- City -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>City</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="city" class="form-control" required="required" value=<?php echo $city ?>>
                            </div>
                        </div>
                    </div>

                    <!-- State & Zip -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>State & Zip</h5>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" name="state" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Texas" <?php if($state == 'Texas') echo 'selected'; ?> >Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="zip" class="form-control" required="required" length=5 value=<?php echo $zip ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Birthday -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Birthday</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="month" class="form-control" length=2 required="required" value=<?php echo $month ?> >
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="day" class="form-control" length=2 required="required" value=<?php echo $day ?> >
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="year" class="form-control" length=4 required="required" value=<?php echo $year ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Gender</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="gender" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Male" <?php if($gender == 'Male') echo 'selected'; ?> >Male</option>
                                    <option value="Female" <?php if($gender == 'Female') echo 'selected'; ?> >Female</option>
                                    <option value="Other" <?php if($gender == 'Other') echo 'selected'; ?> >Other</option>
                                    <option value="Prefer" <?php if($gender == 'Prefer') echo 'selected'; ?> >Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Race -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Race</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="race" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="American Indian or Alaska Native" <?php if($race == 'American Indian or Alaska Native') echo 'selected'; ?> >American Indian or Alaska Native</option>

                                    <option value="Asian" <?php if($race == 'Asian') echo 'selected'; ?> >Asian</option>

                                    <option value="Black or African American" <?php if($race == 'Black or African American') echo 'selected'; ?> >Black or African American</option>

                                    <option value="Hispanic or Latino" <?php if($race == 'Hispanic or Latino') echo 'selected'; ?> >Hispanic or Latino</option>

                                    <option value="Native Hawaiian or Other Pacific Islander" <?php if($race == 'Native Hawaiian or Other Pacific Islander') echo 'selected'; ?> >Native Hawaiian or Other Pacific Islander</option>

                                    <option value="White" <?php if($race == 'White') echo 'selected'; ?> >White</option>

                                    <option value="Prefer not to say" <?php if($race == 'Prefer not to say') echo 'selected'; ?> >Prefer not to say</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <?php
                        $schoolType;
                        if($schoolName == null && $schoolDistrict == null){
                            $schoolType = 'Home-Schooled';
                        } else if ($schoolName != null && $schoolDistrict == null){
                            $schoolType = 'Private';
                        } else {
                            $schoolType = 'Public';
                        }
                    ?>

                    <!-- School Information -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>What kind of school did you go to?</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="schoolType" required="required" name="schoolType">
                                    <option value="" disabled selected></option>
                                    <option value="Public" <?php if($schoolType == 'Public') echo 'selected'; ?> >Public</option>
                                    <option value="Private" <?php if($schoolType == 'Private') echo 'selected'; ?> >Private</option>
                                    <option value="Home-Schooled" <?php if($schoolType == 'Home-Schooled') echo 'selected'; ?> >Home-Schooled</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- School Name -->
                    <div class="form-group" id="schoolNameGroup" <?php if($schoolType == 'Home-Schooled') echo "style='display:none'" ?> >
                        <div class="form-group" >
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>School Name</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="schoolName" name="schoolName" class="form-control" <?php if($schoolType == 'Public' || $schoolType == 'Private') echo "required" ?> value=<?php echo $schoolName ?>>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- School District -->
                    <div class="form-group" id="schoolDistrictGroup" <?php if($schoolType == 'Home-Schooled' || $schoolType == 'Private') echo "style='display:none'" ?> >
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>School District</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="schoolDistrict" name="schoolDistrict" class="form-control" <?php if($schoolType == 'Public') echo "required" ?> value=<?php echo $schoolDistrict ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Grade In Fall -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Grade Level in Upcoming Fall</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="gradeInFall" required="required" name="gradeInFall">
                                    <option value="" disabled selected></option>
                                    <option value="4" <?php if($gradeInFall == '4') echo 'selected'; ?> >4</option>
                                    <option value="5" <?php if($gradeInFall == '5') echo 'selected'; ?> >5</option>
                                    <option value="6" <?php if($gradeInFall == '6') echo 'selected'; ?> >6</option>
                                    <option value="7" <?php if($gradeInFall == '7') echo 'selected'; ?> >7</option>
                                    <option value="8" <?php if($gradeInFall == '8') echo 'selected'; ?> >8</option>
                                    <option value="9" <?php if($gradeInFall == '9') echo 'selected'; ?> >9</option>
                                    <option value="10" <?php if($gradeInFall == '10') echo 'selected'; ?> >10</option>
                                    <option value="11" <?php if($gradeInFall == '11') echo 'selected'; ?> >11</option>
                                    <option value="12" <?php if($gradeInFall == '12') echo 'selected'; ?> >12</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- GT Status -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Have you ever been in a GT Program?</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="gtStatus" required="required" name="gtStatus">
                                    <option value="" disabled selected></option>
                                    <option value="Yes" <?php if($gtStatus == 'Yes') echo 'selected'; ?> >Yes</option>
                                    <option value="No" <?php if($gtStatus == 'No') echo 'selected'; ?> >No</option>
                                    <option value="Unsure" <?php if($gtStatus == 'Unsure') echo 'selected'; ?> >Unsure</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Graduation Year -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Graduation Year</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="gradYear" required="required" name="gradYear">
                                    <option value="" disabled selected></option>
                                    <option value="2019" <?php if($gradYear == '2019') echo 'selected'; ?> >2019</option>
                                    <option value="2020" <?php if($gradYear == '2020') echo 'selected'; ?> >2020</option>
                                    <option value="2021" <?php if($gradYear == '2021') echo 'selected'; ?> >2021</option>
                                    <option value="2022" <?php if($gradYear == '2022') echo 'selected'; ?> >2022</option>
                                    <option value="2023" <?php if($gradYear == '2023') echo 'selected'; ?> >2023</option>
                                    <option value="2024" <?php if($gradYear == '2024') echo 'selected'; ?> >2024</option>
                                    <option value="2025" <?php if($gradYear == '2025') echo 'selected'; ?> >2025</option>
                                    <option value="2026" <?php if($gradYear == '2026') echo 'selected'; ?> >2026</option>
                                    <option value="2027" <?php if($gradYear == '2027') echo 'selected'; ?> >2027</option>
                                    <option value="2028" <?php if($gradYear == '2028') echo 'selected'; ?> >2028</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Expected High School -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Expected High School</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="highSchool" class="form-control" value=<?php echo $highSchool ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Email Address</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="email" name="email" class="form-control" required="required" value=<?php echo $email ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Phone Number</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="phoneNumber" class="form-control" value=<?php echo $phoneNumber ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Sibling -->
                    <div class="form-group">
                        <h5>Do you have a sibling already in the UPY program?</h5>
                        <input type="radio" id="siblingYes" name="sibling" value="yes" onclick="javascript:siblingForm();" required="required" <?php echo ($siblingName != null)?'checked':'' ?>> Yes<br>
                        <input type="radio" id="siblingNo" name="sibling" value="no" onclick="javascript:siblingForm();" required="required" <?php echo ($siblingName != null)?'':'checked' ?>> No<br>
                    </div>

                    <!-- Sibling Name -->
                    <div id="sibling" class="form-group" <?php if($siblingName == null) echo 'style="display:none"'?> >
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Sibling Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="siblingName" name="siblingName" class="form-control" value=<?php echo $siblingName ?>  <?php echo ($siblingName != null)?'required':'' ?>>
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Name -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Parent/Guardian 1 Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="parent1Name" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Address Line 1 -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Address Line 1</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="parent1AddressLine1" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Address Line 2 -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Address Line 2</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="parent1AddressLine2" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 City -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>City</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="parent1City" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 State & Zip -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>State & Zip</h5>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" name="parent1State" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Texas">Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="parent1Zip" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Email -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Parent/Guardian 1 Email Address</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="email" name="parent1Email" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Phone Number -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Parent/Guardian 1 Phone Number</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="parent1PhoneNumber" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Parent 1 Phone Type -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Parent/Guardian 1 Phone Type</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" name="parent1PhoneType" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Work">Work</option>
                                    <option value="Cell">Cell</option>
                                    <option value="Home">Home</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Parent 2 -->
                    <div class="form-group">
                        <h5>Do you want to add a second parent/guardian?</h5>
                        <input type="radio" id="parentYes" name="parent" value="yes" onclick="javascript:parentForm();" required="required"> Yes<br>
                        <input type="radio" id="parentNo" name="parent" value="no" onclick="javascript:parentForm();" required="required"> No<br>
                    </div>

                    <!-- Sibling Name -->
                    <div id="parent" style="display:none">
                        <!-- Parent 2 Name -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Parent/Guardian 2 Name</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2Name" name="parent2Name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 Address Line 1 -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Address Line 1</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2AddressLine1" name="parent2AddressLine1" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 Address Line 2 -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Address Line 2</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2AddressLine2" name="parent2AddressLine2" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 City -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>City</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2City" name="parent2City" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 State & Zip -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>State & Zip</h5>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id= "parent2State" name="parent2State">
                                        <option value="" disabled selected></option>
                                    <option value="Texas">Texas</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" id="parent2Zip" name="parent2Zip" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 Email -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Parent/Guardian 2 Email Address</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="email" id="parent2Email" name="parent2Email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 Phone Number -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Parent/Guardian 2 Phone Number</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2PhoneNumber" name="parent2PhoneNumber" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Parent 2 Phone Type -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Parent/Guardian 2 Phone Type</h5>
                                </div>
                                <div class="col-md-3">
                                    <select id='parent2PhoneType' class="form-control" name="parent2PhoneType">
                                        <option value="" disabled selected></option>
                                        <option value="Work">Work</option>
                                        <option value="Cell">Cell</option>
                                        <option value="Home">Home</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Submit'>
                </form>
                </div>

            </div>
            <!-- /.container-fluid -->

            <?php include("components/footer.php"); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include("components/javascript.php"); ?>
    <script type="text/javascript">
        function siblingForm() {
            if (document.getElementById('siblingYes').checked) {
                document.getElementById('sibling').style.display = 'block';
                document.getElementById('siblingName').required = 'required';
            }
            else {
                document.getElementById('sibling').style.display = 'none';
                document.getElementById('siblingName').required = '';
            }
        }

        function parentForm() {
            if (document.getElementById('parentYes').checked) {
                document.getElementById('parent').style.display = 'block';
                document.getElementById('parent2Name').required = 'required';
                document.getElementById('parent2AddressLine1').required = 'required';
                document.getElementById('parent2City').required = 'required';
                document.getElementById('parent2State').required = 'required';
                document.getElementById('parent2Zip').required = 'required';
                document.getElementById('parent2Email').required = 'required';
                document.getElementById('parent2PhoneNumber').required = 'required';
                document.getElementById('parent2PhoneType').required = 'required';
    
            }
            else {
                document.getElementById('parent').style.display = 'none';
                document.getElementById('parent2Name').required = '';
                document.getElementById('parent2AddressLine1').required = '';
                document.getElementById('parent2City').required = '';
                document.getElementById('parent2State').required = '';
                document.getElementById('parent2Zip').required = '';
                document.getElementById('parent2Email').required = '';
                document.getElementById('parent2PhoneNumber').required = '';
                document.getElementById('parent2PhoneType').required = '';
    
            }
        }

        document.getElementById('schoolType').onchange = function() {
            if(this.value === 'Public'){
                document.getElementById('schoolNameGroup').style.display = 'block';
                document.getElementById('schoolName').required = 'required';
                document.getElementById('schoolDistrictGroup').style.display = 'block';
                document.getElementById('schoolDistrict').required = 'required';
            } else if(this.value === 'Private'){
                document.getElementById('schoolNameGroup').style.display = 'block';
                document.getElementById('schoolName').required = 'required';
                document.getElementById('schoolDistrictGroup').style.display = 'none';
                document.getElementById('schoolDistrict').required = '';
            } else {
                document.getElementById('schoolNameGroup').style.display = 'none';
                document.getElementById('schoolName').required = '';
                document.getElementById('schoolDistrictGroup').style.display = 'none';
                document.getElementById('schoolDistrict').required = '';
            }
        };
    </script>


</body>

</html>
