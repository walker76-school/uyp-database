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
        $sql = "SELECT suffix, first_name, last_name, initial, preferred_name, sei.address_line_1 as s_add1, sei.address_line_2 as s_add2,".
               "sei.city as s_city, sei.state as s_state, sei.zip as s_zip, birthday, gender, race, school_name, school_district," .
               "grade_in_fall, gt_status, grad_year, high_school, sei.email as s_email, sei.phone_number as s_phone, sibling_name," .
               "p.email as p_email, p.phone_number as p_phone, p.phone_type as p_phoneType, p.name as p_name, p.address_line_1 as p_add1, p.address_line_2 as p_add2, p.city as p_city, p.state as p_state, p.zip as p_zip " .
			   "FROM SECONDARY_USER_INFO sei,parent_to_student,parent p WHERE sei.id=$user AND sei.ID =".
               "parent_to_student.id AND parent_to_student.email = p.email";
        //echo $sql;

        $result = $conn->query($sql);
        //var_dump($result);
        $row  = $result->fetch_assoc();
		$row2 = $result->fetch_assoc();

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
					
					$parent1Name = "-";
					$parent1Zip = "-";
					$parent1PhoneType = "-";
					$parent1PhoneNumber = "-";
					$parent1AddressLine1 = "-";
					$parent1AddressLine2 = "-";
					$parent1Email = "-";
					$parent1City = "-";
					$parent1State = "-";
							
					$parent2Name = "-";
					$parent2Zip = "-";
					$parent2PhoneType = "-";
					$parent2PhoneNumber = "-";
					$parent2AddressLine1 = "-";
					$parent2AddressLine2 = "-";
					$parent2Email = "-";
					$parent2City = "-";
					$parent2State = "-";

                    if (!empty($row["suffix"])) {
                        $suffix = $row["suffix"];
                    } else {
                        $suffix = "-";
                    }

                    if (!empty($row["first_name"])) {
                        $firstName = $row["first_name"];
                    } else {
                        $firstName = "-";
                    }

                    if (!empty($row["initial"])) {
                        $middleInitial = $row["initial"];
                    } else {
                        $middleInitial = "-";
                    }

                    if (!empty($row["last_name"])) {
                        $lastName = $row["last_name"];
                    } else {
                        $lastName = "-";
                    }

                    if (!empty($row["preferred_name"])) {
                        $preferredName = $row["preferred_name"];
                    } else {
                        $preferredName = "-";
                    }

                    if (!empty($row["s_add1"])) {
                        $addressLine1 = $row["s_add1"];
                    } else {
                        $addressLine1 = "-";
                    }

                    if (!empty($row["s_add2"])) {
                        $addressLine2 = $row["s_add2"];
                    } else {
                        $addressLine2 = "-";
                    }

                    if (!empty($row["s_city"])) {
                        $city = $row["s_city"];
                    } else {
                        $city = "-";
                    }

                    if (!empty($row["s_state"])) {
                        $state = $row["s_state"];
                    } else {
                        $state = "-";
                    }

                    if (!empty($row["s_zip"])) {
                        $zip = $row["s_zip"];
                    } else {
                        $zip = "-";
                    }

                    if (!empty($row["birthday"])) {
                        $birthday = $row["birthday"];
                    } else {
                        $birthday = "-";
                    }

                    if (!empty($row["gender"])) {
                        $gender = $row["gender"];
                    } else {
                        $gender = "-";
                    }

                    if (!empty($row["race"])) {
                        $race = $row["race"];
                    } else {
                        $race = "-";
                    }

                    if (!empty($row["school_name"])) {
                        $schoolName = $row["school_name"];
                    } else {
                        $schoolName = "-";
                    }

                    if (!empty($row["school_district"])) {
                        $schoolDistrict = $row["school_district"];
                    } else {
                        $schoolDistrict = "-";
                    }

                    if (!empty($row["grade_in_fall"])) {
                        $gradeInFall = $row["grade_in_fall"];
                    } else {
                        $gradeInFall = "-";
                    }

                    if (!empty($row["gt_status"])) {
                        $gtStatus = $row["gt_status"];
                    } else {
                        $gtStatus = "-";
                    }

                    if (!empty($row["grad_year"])) {
                        $gradYear = $row["grad_year"];
                    } else {
                        $gradYear = "-";
                    }

                    if (!empty($row["high_school"])) {
                        $highSchool = $row["high_school"];
                    } else {
                        $highSchool = "-";
                    }

                    if (!empty($row["s_email"])) {
                        $email = $row["s_email"];
                    } else {
                        $email = "-";
                    }

                    if (!empty($row["s_phone"])) {
                        $phoneNumber = $row["s_phone"];
                    } else {
                        $phoneNumber = "-";
                    }

                    if (!empty($row["Sibling_Name"])) {
                        $siblingName = $row["Sibling_Name"];
                    } else {
                        $siblingName = "-";
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
                    <h5> Parent 2 Name</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1Name</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Phone Number</h5>
                </div>
				
				<div class="col-md-4">
                    <?php echo "<label>$parent1PhoneNumber</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Phone Type</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1PhoneType</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Address Line 1</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1AddressLine1</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Address Line 2</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1AddressLine2</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Email</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1Email</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>City</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1City</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>State</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent1State</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5> Parent 1 Name</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2Name</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Phone Number</h5>
                </div>
				
				<div class="col-md-4">
                    <?php echo "<label>$parent2PhoneNumber</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Phone Type</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2PhoneType</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Address Line 1</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2AddressLine1</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Address Line 2</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2AddressLine2</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>Email</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2Email</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>City</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2City</label>" ?>
                </div>
				
				<div class="col-md-4">
                    <h5>State</h5>
                </div>
				<div class="col-md-4">
                    <?php echo "<label>$parent2State</label>" ?>
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
