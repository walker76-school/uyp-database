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

</head>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <!-- Suffix -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Suffix</h5>
                            </div>
                            <div class="col-md-1">
                                <select class="form-control" id="suffix" required="required" name="suffix">
                                    <option value="" disabled selected></option>
                                    <option value="mr">Mr</option>
                                    <option value="mrs">Mrs</option>
                                    <option value="ms">Ms</option>
                                    <option value="dr">Dr</option>
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
                                <input type="text" id="firstName" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="middleInitial" class="form-control">
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
                                <input type="text" id="preferredName" class="form-control">
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
                                <input type="text" id="lastName" class="form-control" required="required">
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
                                <input type="text" id="addressLine1" class="form-control" required="required">
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
                                <input type="text" id="addressLine2" class="form-control">
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
                                <input type="text" id="city" class="form-control" required="required">
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
                                <select class="form-control" id="state" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Texas">Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="zip" class="form-control" required="required">
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
                                <input type="text" id="month" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="day" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="year" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Gender</h5>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="gender" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                    <option value="prefer">Prefer not to say</option>
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
                            <div class="col-md-2">
                                <select class="form-control" id="race" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="indian">American Indian or Alaska Native</option>
                                    <option value="asian">Asian</option>
                                    <option value="black">Black or African American</option>
                                    <option value="hispanic">Hispanic or Latino</option>
                                    <option value="pacific">Native Hawaiian or Other Pacific Islander</option>
                                    <option value="white">White</option>
                                    <option value="prefer">Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- School Information -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>What kind of school did you go to?</h5>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="schoolType" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                    <option value="home">Home-Schooled</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- School Name -->
                    <div class="form-group" >
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>School Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="schoolName" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- School District -->
                    <div class="form-group" id="schoolDistrictGroup" style="display:none">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>School District</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="schoolDistrict" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Grade Level -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Grade Level in Upcoming Fall</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="gradeInFall" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- Graduation Year -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Graduation Year</h5>
                            </div>
                            <div class="col-md-2">
                                <select class="form-control" id="gradYear" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
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
                                <input type="text" id="highSchool" class="form-control">
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
                                <input type="email" id="email" class="form-control" required="required">
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
                                <input type="text" id="phoneNumber" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!-- Sibling -->
                    <div class="form-group">
                        <h5>Do you have a sibling already in the UPY program?</h5>
                        <input type="radio" id="siblingYes" name="sibling" value="yes" onclick="javascript:siblingForm();" required="required"> Yes<br>
                        <input type="radio" id="siblingNo" name="sibling" value="no" onclick="javascript:siblingForm();" required="required"> No<br>
                    </div>

                    <!-- Sibling Name -->
                    <div id="sibling" class="form-group" style="display:none">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Sibling Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="siblingName" class="form-control">
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
                                <input type="text" id="parent1Name" class="form-control" required="required">
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
                                <input type="text" id="parent1AddressLine1" class="form-control" required="required">
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
                                <input type="text" id="parent1AddressLine2" class="form-control">
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
                                <input type="text" id="parent1City" class="form-control" required="required">
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
                                <select class="form-control" id="parent1State" required="required">
                                    <option value="" disabled selected></option>
                                    <option value="Texas">Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" id="parent1Zip" class="form-control" required="required">
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
                                <input type="email" id="parent1Email" class="form-control" required="required">
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
                                <input type="text" id="parent1PhoneNumber" class="form-control" required="required">
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
                                    <input type="text" id="parent2Name" class="form-control" required="required">
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
                                    <input type="text" id="parent2AddressLine1" class="form-control" required="required">
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
                                    <input type="text" id="parent2AddressLine2" class="form-control">
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
                                    <input type="text" id="parent2City" class="form-control" required="required">
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
                                    <select class="form-control" id="parent2State" required="required">
                                        <option value="" disabled selected></option>
                                    <option value="Texas">Texas</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <input type="text" id="parent2Zip" class="form-control" required="required">
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
                                    <input type="email" id="parent2Email" class="form-control" required="required">
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
                                    <input type="text" id="parent2PhoneNumber" class="form-control" required="required">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input class="btn btn-primary btn-block col-md-3" type="submit" name="submit" value="Submit">  
                    <!--<a class="btn btn-primary btn-block col-md-3" href="confirm.php">Update</a>-->
                </form>

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
