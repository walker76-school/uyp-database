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
        $user;
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
        $schoolType = "undef";
        $gtStatus = "";
        $gradeInFall = "";
        $gradYear = "";
        $highSchool = "";
        $email = "";
        $phoneNumber = "";
        $hasSibling = "undef";
        $siblingName = "";

        $parent1Name = "";
		$parent1Zip = "";
		$parent1PhoneType = "";
		$parent1PhoneNumber = "";
		$parent1AddressLine1 = "";
		$parent1AddressLine2 = "";
		$parent1Email = "";
		$parent1City = "";
		$parent1State = "";
				
        $hasParent2 = "undef";
		$parent2Name = "";
		$parent2Zip = "";
		$parent2PhoneType = "";
		$parent2PhoneNumber = "";
		$parent2AddressLine1 = "";
		$parent2AddressLine2 = "";
		$parent2Email = "";
		$parent2City = "";
		$parent2State = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['user'];
        }

        $user = $_COOKIE['validated'];
        $sql = "SELECT suffix, first_name, last_name, initial, preferred_name, sei.address_line_1 as s_add1, sei.address_line_2 as s_add2,".
               "sei.city as s_city, sei.state as s_state, sei.zip as s_zip, birthday, gender, race, school_name, school_district," .
               "grade_in_fall, gt_status, grad_year, high_school, sei.email as s_email, sei.phone_number as s_phone, sibling_name," .
               "p.email as p_email, p.phone_number as p_phone, p.phone_type as p_phoneType, p.name as p_name, p.address_line_1 as p_add1, p.address_line_2 as p_add2, p.city as p_city, p.state as p_state, p.zip as p_zip " .
			   "FROM SECONDARY_USER_INFO sei,parent_to_student,parent p WHERE sei.id=$user AND sei.ID =".
               "parent_to_student.id AND parent_to_student.email = p.email";
        //echo $sql;

        $result = $conn->query($sql);
        //var_dump($result);

        if($result && mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
			$row2 = $result->fetch_assoc();

            //var_dump($row);

            $schoolType = "";
            $hasSibling = "";
            $hasParent2 = "";

            if (!empty($row["suffix"])) {
                $suffix = $row["suffix"];
            }

            if (!empty($row["first_name"])) {
                $firstName = $row["first_name"];
            }

            if (!empty($row["initial"])) {
                $middleInitial = $row["initial"];
            }

            if (!empty($row["last_name"])) {
                $lastName = $row["last_name"];
            }

            if (!empty($row["preferred_name"])) {
                $preferredName = $row["preferred_name"];
            }

            if (!empty($row["s_add1"])) {
                $addressLine1 = $row["s_add1"];
            }

            if (!empty($row["s_add2"])) {
                $addressLine2 = $row["s_add2"];
            }

            if (!empty($row["s_city"])) {
                $city = $row["s_city"];
            }

            if (!empty($row["s_state"])) {
                $state = $row["s_state"];
            }

            if (!empty($row["s_zip"])) {
                $zip = $row["s_zip"];
            }

            if (!empty($row["birthday"])) {
                $birthday = $row["birthday"];
                $day = substr($birthday, 8);
                $month = substr($birthday, 5, 2);
                $year = substr($birthday, 0, 4);
            }

            if (!empty($row["gender"])) {
                $gender = $row["gender"];
            }

            if (!empty($row["race"])) {
                $race = $row["race"];
            }

            if (!empty($row["school_name"])) {
                $schoolName = $row["school_name"];
            }

            if (!empty($row["school_district"])) {
                $schoolDistrict = $row["school_district"];
            }

            if (!empty($row["grade_in_fall"])) {
                $gradeInFall = $row["grade_in_fall"];
            }

            if (!empty($row["gt_status"])) {
                $gtStatus = $row["gt_status"];
            }

            if (!empty($row["grad_year"])) {
                $gradYear = $row["grad_year"];
            }

            if (!empty($row["high_school"])) {
                $highSchool = $row["high_school"];
            }

            if (!empty($row["s_email"])) {
                $email = $row["s_email"];
            }

            if (!empty($row["s_phone"])) {
                $phoneNumber = $row["s_phone"];
            }

            if (!empty($row["sibling_name"])) {
                $siblingName = $row["sibling_name"];
            }
			if (!empty($row["p_name"])) {
                $parent1Name = $row["p_name"];
            }

            if (!empty($row["p_add1"])) {
                $parent1AddressLine1 = $row["p_add1"];
            }

            if (!empty($row["p_add2"])) {
                $parent1AddressLine2 = $row["p_add2"];
            }

            if (!empty($row["p_city"])) {
                $parent1City = $row["p_city"];
            }
			
			if (!empty($row["p_state"])) {
                $parent1State = $row["p_state"];
            }

            if (!empty($row["p_zip"])) {
                $parent1Zip = $row["p_zip"];
            }
			if (!empty($row["p_email"])) {
                $parent1Email = $row["p_email"];
            }
			if (!empty($row["p_phone"])) {
                $parent1PhoneNumber = $row["p_phone"];
            }
			if (!empty($row["p_phoneType"])) {
                $parent1PhoneType = $row["p_phoneType"];
            }

            //var_dump($row2);
			
			//PARENT NUMBER TWO
			if (!empty($row2["p_name"])) {
                $parent2Name = $row2["p_name"];
            }

            if (!empty($row2["p_add1"])) {
                $parent2AddressLine1 = $row2["p_add1"];
            }

            if (!empty($row2["p_add2"])) {
                $parent2AddressLine2 = $row2["p_add2"];
            }

            if (!empty($row2["p_city"])) {
                $parent2City = $row2["p_city"];
            }
			
			if (!empty($row2["p_state"])) {
                $parent2State = $row2["p_state"];
            }

            if (!empty($row2["p_zip"])) {
                $parent2Zip = $row2["p_zip"];
            }
			if (!empty($row2["p_email"])) {
                $parent2Email = $row2["p_email"];
            }
			if (!empty($row2["p_phone"])) {
                $parent2PhoneNumber = $row2["p_phone"];
            }
			if (!empty($row2["p_phoneType"])) {
                $parent2PhoneType = $row2["p_phoneType"];
            }
        }
    ?>

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <form action='insert_secondary.php' method='post'>

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
                            <!--
                            <select class="form-control" required="required" name="capacity">
                                    <option value="" disabled selected></option>
                                    <option value="1" <?php echo $month == 1 ? 'selected' : '' ?> >1</option>
                                    <option value="2" <?php echo $month == 2 ? 'selected' : '' ?> >2</option>
                                    <option value="3" <?php echo $month == 3 ? 'selected' : '' ?> >3</option>
                                    <option value="4" <?php echo $month == 4 ? 'selected' : '' ?> >4</option>
                                    <option value="5" <?php echo $month == 5 ? 'selected' : '' ?> >5</option>
                                    <option value="6" <?php echo $month == 6 ? 'selected' : '' ?> >6</option>
                                    <option value="7" <?php echo $month == 7 ? 'selected' : '' ?> >7</option>
                                    <option value="8" <?php echo $month == 8 ? 'selected' : '' ?> >8</option>
                                    <option value="9" <?php echo $month == 9 ? 'selected' : '' ?> >9</option>
                                    <option value="10" <?php echo $month == 10 ? 'selected' : '' ?> >10</option>
                                    <option value="11" <?php echo $month == 11 ? 'selected' : '' ?> >11</option>
                                    <option value="12" <?php echo $month == 12 ? 'selected' : '' ?> >12</option>
                                </select> -->
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
                        if(strcmp($schoolType, "undef") != 0){
                            if($schoolName == null && $schoolDistrict == null){
                                $schoolType = 'Home-Schooled';
                            } else if ($schoolName != null && $schoolDistrict == null){
                                $schoolType = 'Private';
                            } else {
                                $schoolType = 'Public';
                            }
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
                    <div class="form-group" id="schoolNameGroup" <?php if($schoolType == 'Home-Schooled' || $schoolType == 'undef') echo "style='display:none'" ?> >
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
                    <div class="form-group" id="schoolDistrictGroup" <?php if($schoolType == 'Home-Schooled' || $schoolType == 'Private' || $schoolType == 'undef') echo "style='display:none'" ?> >
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
                                <input type="text" name="phoneNumber" class="form-control" length=12 value=<?php echo $phoneNumber ?> >
                            </div>
                        </div>
                    </div>

                    <?php 
                        $yesChecked = false;
                        $noChecked = false;

                        if(strcmp($hasSibling, "undef") != 0){
                            if($siblingName != null){
                                $yesChecked = true;
                                $noChecked = false;
                            } else {
                                $yesChecked = false;
                                $noChecked = true;
                            }
                        }
                    ?>

                    <!-- Sibling -->
                    <div class="form-group">
                        <h5>Do you have a sibling already in the UYP program?</h5>
                        <input type="radio" id="siblingYes" name="sibling" value="yes" onclick="javascript:siblingForm();" required="required" <?php echo $yesChecked ?'checked':'' ?>> Yes<br>
                        <input type="radio" id="siblingNo" name="sibling" value="no" onclick="javascript:siblingForm();" required="required" <?php echo $noChecked ?'checked':'' ?>> No<br>
                    </div>

                    <!-- Sibling Name -->
                    <div id="sibling" class="form-group" <?php echo $yesChecked ? '':'style="display:none"'?> >
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Sibling Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="siblingName" name="siblingName" class="form-control" value=<?php echo $siblingName ?>  <?php echo $yesChecked ? 'required':'' ?> >
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
                                <input type="text" name="parent1Name" class="form-control"  required="required" value=<?php echo $parent1Name ?>>
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
                                <input type="text" name="parent1AddressLine1" class="form-control" required="required" value=<?php echo $parent1AddressLine1 ?>>
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
                                <input type="text" name="parent1AddressLine2" class="form-control" value=<?php echo $parent1AddressLine2 ?>>
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
                                <input type="text" name="parent1City" class="form-control" required="required" value=<?php echo $parent1City ?>>
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
                                    <option value="Texas" <?php if($parent1State == 'Texas') echo 'selected'; ?> >Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="parent1Zip" class="form-control" required="required" value=<?php echo $parent1Zip ?>>
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
                                <input type="email" name="parent1Email" class="form-control" required="required" value=<?php echo $parent1Email ?>>
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
                                <input type="text" name="parent1PhoneNumber" class="form-control" length=12 required="required" value=<?php echo $parent1PhoneNumber ?>>
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
                                <select class="form-control" required="required" name="parent1PhoneType" >
                                    <option value="" disabled selected></option>
                                    <option value="Work" <?php if($parent1PhoneType == 'Work') echo 'selected'; ?>> Work</option>
                                    <option value="Cell" <?php if($parent1PhoneType == 'Cell') echo 'selected'; ?>> Cell</option>
                                    <option value="Home" <?php if($parent1PhoneType == 'Home') echo 'selected'; ?>> Home</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php

                        $parentYesChecked = false;
                        $parentNoChecked = false;
                        $parent2 = false;

                        if(strcmp($hasParent2, "undef") != 0){
                            if($siblingName != null){
                                $parentYesChecked = true;
                                $parentNoChecked = false;
                                $parent2 = true;
                            } else {
                                $parentYesChecked = false;
                                $parentNoChecked = true;
                            }
                        }

                    ?>

                    <!-- Parent 2 -->
                    <div class="form-group">
                        <h5>Do you want to add a second parent/guardian?</h5>
                        <input type="radio" id="parentYes" name="parent" value="yes" <?php echo $parentYesChecked ?'checked':'' ?> onclick="javascript:parentForm();" required="required"> Yes<br>
                        <input type="radio" id="parentNo" name="parent" value="no"  <?php echo $parentNoChecked ?'checked':'' ?> onclick="javascript:parentForm();" required="required"> No<br>
                    </div>

                    <!-- Parent 2 -->
                    <div id="parent" <?php echo $parent2 ?'':'style="display:none"' ?> >
                        <!-- Parent 2 Name -->
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>Parent/Guardian 2 Name</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="parent2Name" name="parent2Name" class="form-control" <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2Name ?>>
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
                                    <input type="text" id="parent2AddressLine1" name="parent2AddressLine1" class="form-control" <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2AddressLine1 ?>>
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
                                    <input type="text" id="parent2AddressLine2" name="parent2AddressLine2" class="form-control" value=<?php echo $parent2AddressLine2 ?>>
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
                                    <input type="text" id="parent2City" name="parent2City" class="form-control" <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2City ?>>
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
                                    <select class="form-control" id= "parent2State" name="parent2State" <?php echo $parent2 ?'required':'' ?> >
                                        <option value="" disabled selected></option>
                                    <option value="Texas" <?php if($parent2State == 'Texas') echo 'selected'; ?> >Texas</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" id="parent2Zip" name="parent2Zip" class="form-control" <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2Zip ?>>
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
                                    <input type="email" id="parent2Email" name="parent2Email" class="form-control" <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2Email ?>>
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
                                    <input type="text" id="parent2PhoneNumber" name="parent2PhoneNumber" class="form-control" length=12 <?php echo $parent2 ?'required':'' ?> value=<?php echo $parent2PhoneNumber ?>>
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
                                    <select id='parent2PhoneType' class="form-control" name="parent2PhoneType" <?php echo $parent2 ?'required':'' ?> >
                                        <option value="" disabled selected></option>
                                    <option value="Work" <?php if($parent2PhoneType == 'Work') echo 'selected'; ?>> Work</option>
                                    <option value="Cell" <?php if($parent2PhoneType == 'Cell') echo 'selected'; ?>> Cell</option>
                                    <option value="Home" <?php if($parent2PhoneType == 'Home') echo 'selected'; ?>> Home</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Submit'>
                </form>
                </br>
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
