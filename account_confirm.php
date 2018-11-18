<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Account Confirmation</title>

    <?php include("components/header.php"); ?>

</head>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php
                    $suffix = "Testing";
                    $firstName = "Testing";
                    $middleInitial = "Testing";
                    $lastName = "";
                    $preferredName = "";
                    $addressLine1 = "";
                    $addressLine2 = "";
                    $city = "";
                    $state = "";
                    $zip = "";
                    $birthday = "";
                    $gender = "";
                    $race = "";
                    $schoolType = "";
                    $schoolName = "";
                    $schoolDistrict = "";
                    $gradeInFall = "";
                    $gradYear = "";
                    $highSchool = "";
                    $email = "";
                    $phoneNumber = "";
                    $sibling = "";
                    $siblingName = "";
                    $parent1Name = "";
                    $parent1AddressLine1 = "";
                    $parent1AddressLine2 = "";
                    $parent1City = "";
                    $parent1Zip = "";
                    $parent1State = "";
                    $parent1Email = "";
                    $parent1PhoneNumber = "";
                    $parent2 = "";
                    $parent2Name = "";
                    $parent2AddressLine1 = "";
                    $parent2AddressLine2 = "";
                    $parent2City = "";
                    $parent2Zip = "";
                    $parent2State = "";
                    $parent2Email = "";
                    $parent2PhoneNumber = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (!empty($_POST["suffix"])) {
                            $suffix = test_input($_POST["suffix"]);
                        }
                        if (!empty($_POST["firstName"])) {
                            $firstName = test_input($_POST["firstName"]);
                        }
                        if (!empty($_POST["middleInitial"])) {
                            $middleInitial = test_input($_POST["middleInitial"]);
                        }
                        if (!empty($_POST["lastName"])) {
                            $lastName = test_input($_POST["lastName"]);
                        }
                        if (!empty($_POST["preferredName"])) {
                            $preferredName = test_input($_POST["preferredName"]);
                        }
                        if (!empty($_POST["addressLine1"])) {
                            $addressLine1 = test_input($_POST["addressLine1"]);
                        }
                        if (!empty($_POST["addressLine2"])) {
                            $addressLine2 = test_input($_POST["addressLine2"]);
                        }
                        if (!empty($_POST["city"])) {
                            $city = test_input($_POST["city"]);
                        }
                        if (!empty($_POST["state"])) {
                            $state = test_input($_POST["state"]);
                        }
                    }
                ?>

                <div class="col-md-4">
                    <h5>Suffix</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$suffix</label>" ?>
                </div>
                
                <div class="col-md-4">
                    <h5>First Name and Middle Initial</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$firstName</label>" ?>
                    <?php echo "<label>$middleInitial</label>" ?>
                </div>
           

                <div class="col-md-4">
                    <h5>Preferred Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$preferredName</label>" ?>
                </div>

                <div class="col-md-4">
                    <h5>Last Name</h5>
                </div>
                <div class="col-md-4">
                    <?php echo "<label>$lastName</label>" ?>
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

                </div>

                <div class="col-md-4">
                    <h5>Race</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>What kind of school did you go to?</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>School Name</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>School District</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Grade Level in Upcoming Fall</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Graduation Year</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Expected High School</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Email Address</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Phone Number</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Do you have a sibling already in the UPY program?</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Sibling Name</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Name</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Address Line 1</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Address Line 2</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 City</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 State & Zip</h5>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Email Address</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 1 Phone Number</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Name</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Address Line 1</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Address Line 2</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 City</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 State & Zip</h5>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Email Address</h5>
                </div>
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                    <h5>Parent/Guardian 2 Phone Number</h5>
                </div>
                <div class="col-md-4">

                </div>

                <input class="btn btn-primary btn-block col-md-4" type="submit" name="submit" value="Submit">  

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
                document.getElementById('parent2AddressLine2').required = 'required';
                document.getElementById('parent2AddressLine1').required = 'required';
                document.getElementById('parent2City').required = 'required';
                document.getElementById('parent2State').required = 'required';
                document.getElementById('parent2Zip').required = 'required';
                document.getElementById('parent2Email').required = 'required';
                document.getElementById('parent2PhoneNumber').required = 'required';
    
            }
            else {
                document.getElementById('parent').style.display = 'none';
                document.getElementById('parent2Name').required = '';
                document.getElementById('parent2AddressLine2').required = '';
                document.getElementById('parent2AddressLine1').required = '';
                document.getElementById('parent2City').required = '';
                document.getElementById('parent2State').required = '';
                document.getElementById('parent2Zip').required = '';
                document.getElementById('parent2Email').required = '';
                document.getElementById('parent2PhoneNumber').required = '';
    
            }
        }

        document.getElementById('schoolType').onchange = function() {
            if(this.value === 'public'){
                document.getElementById('schoolDistrictGroup').style.display = 'block';
                document.getElementById('schoolDistrict').required = 'required';
            }
            else {
                document.getElementById('schoolDistrictGroup').style.display = 'none';
                document.getElementById('schoolDistrict').required = '';
            }
        };
    </script>

</body>

</html>
