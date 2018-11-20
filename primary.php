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

                <form method="post" action="primary_confirm.php">
                    
                    <!-- Suffix -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Suffix</h5>
                            </div>
                            <div class="col-md-1">
                                <select class="form-control" id="suffix" required="required" name="suffix">
                                    <option value="" disabled selected></option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Dr">Dr</option>
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
                                <input type="text" name="firstName" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="middleInitial" class="form-control">
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
                                <input type="text" name="preferredName" class="form-control">
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
                                <input type="text" name="lastName" class="form-control" required="required">
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
                                <input type="text" name="addressLine1" class="form-control" required="required">
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
                                <input type="text" name="addressLine2" class="form-control">
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
                                <input type="text" name="city" class="form-control" required="required">
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
                                    <option value="Texas">Texas</option>
                                </select>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="zip" class="form-control" required="required">
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
                                <input type="text" name="month" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="day" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="year" class="form-control" required="required">
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
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    <option value="Prefer">Prefer not to say</option>
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
                                    <option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
                                    <option value="Asian">Asian</option>
                                    <option value="Black or African American">Black or African American</option>
                                    <option value="Hispanic or Latino">Hispanic or Latino</option>
                                    <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                                    <option value="White">White</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
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
                            <div class="col-md-3">
                                <select class="form-control" id="schoolType" required="required" name="schoolType">
                                    <option value="" disabled selected></option>
                                    <option value="Public">Public</option>
                                    <option value="Private">Private</option>
                                    <option value="Home-Schooled">Home-Schooled</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- School Name -->
                    <div class="form-group" id="schoolNameGroup" style="display:none">
                        <div class="form-group" >
                            <div class="form-row">
                                <div class="col-md-2">
                                    <h5>School Name</h5>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="schoolName" name="schoolName" class="form-control" required="required">
                                </div>
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
                                <input type="text" id="schoolDistrict" name="schoolDistrict" class="form-control">
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
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
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
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Unsure">Unsure</option>
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
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
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
                                <input type="text" name="highSchool" class="form-control">
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
                                <input type="email" name="email" class="form-control" required="required">
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
                                <input type="text" name="phoneNumber" class="form-control">
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
                                <input type="text" id="siblingName" name="siblingName" class="form-control">
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

                        <!-- Parent 1 Phone Type -->
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
                    
                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='next' value='Next'>

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
