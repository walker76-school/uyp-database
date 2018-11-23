<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit User Admin Information</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php 
        $id = "";
        $enrollmentStatus = "";
        $gradeAccepted = "";
        $yearAccepted = "";
        $grantStatus = "";
        $health = "";
        $disability = "";
        $ell = "";
        $additionalInfo = "";
        $error;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['user'];
        }


        $checkUserSql = "SELECT * FROM USERS WHERE id=" . $id ;
        $checkUserResult = $conn->query($checkUserSql);
        //var_dump($checkUserResult);

        $sql = "SELECT * FROM ADMIN_USER_INFO WHERE id=" . $id ;
        //echo $sql;

        $result = $conn->query($sql);
        //var_dump($result);

        if($result && mysqli_num_rows($result) > 0){
            $row = $result->fetch_assoc();
            var_dump($row);

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

            if (!empty($row["ELL"])) {
                $ell = $row["ELL"];
            }

            if (!empty($row["Additional_Info"])) {
                $additionalInfo = $row["Additional_Info"];
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
                <h3>Edit Admin Info</h3>
                <p>Please enter a user's id, which can be found in the student directory, to edit the admin info for that student.</p>

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

                <form action='insert_admin_info.php' method='post'>

                    <input type="hidden" name="user" class="form-control" required value=<?php echo $id ?>  ]>

                    <!-- Year Accepted -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Year Accepted</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="yearAccepted" required="required" name="yearAccepted">
                                    <option value="" disabled selected></option>
                                    <option value="2019" <?php if($yearAccepted == '2019') echo 'selected'; ?> >2019</option>
                                    <option value="2020" <?php if($yearAccepted == '2020') echo 'selected'; ?> >2020</option>
                                    <option value="2021" <?php if($yearAccepted == '2021') echo 'selected'; ?> >2021</option>
                                    <option value="2022" <?php if($yearAccepted == '2022') echo 'selected'; ?> >2022</option>
                                    <option value="2023" <?php if($yearAccepted == '2023') echo 'selected'; ?> >2023</option>
                                    <option value="2024" <?php if($yearAccepted == '2024') echo 'selected'; ?> >2024</option>
                                    <option value="2025" <?php if($yearAccepted == '2025') echo 'selected'; ?> >2025</option>
                                    <option value="2026" <?php if($yearAccepted == '2026') echo 'selected'; ?> >2026</option>
                                    <option value="2027" <?php if($yearAccepted == '2027') echo 'selected'; ?> >2027</option>
                                    <option value="2028" <?php if($yearAccepted == '2028') echo 'selected'; ?> >2028</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Grade Accepted -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Grade Level in Upcoming Fall</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="gradeAccepted" required="required" name="gradeAccepted">
                                    <option value="" disabled selected></option>
                                    <option value="4" <?php if($gradeAccepted == '4') echo 'selected'; ?> >4</option>
                                    <option value="5" <?php if($gradeAccepted == '5') echo 'selected'; ?> >5</option>
                                    <option value="6" <?php if($gradeAccepted == '6') echo 'selected'; ?> >6</option>
                                    <option value="7" <?php if($gradeAccepted == '7') echo 'selected'; ?> >7</option>
                                    <option value="8" <?php if($gradeAccepted == '8') echo 'selected'; ?> >8</option>
                                    <option value="9" <?php if($gradeAccepted == '9') echo 'selected'; ?> >9</option>
                                    <option value="10" <?php if($gradeAccepted == '10') echo 'selected'; ?> >10</option>
                                    <option value="11" <?php if($gradeAccepted == '11') echo 'selected'; ?> >11</option>
                                    <option value="12" <?php if($gradeAccepted == '12') echo 'selected'; ?> >12</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Enrollment Status -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Enrollment Status</h5>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="enrollmentStatus" required="required" name="enrollmentStatus">
                                    <option value="" disabled selected></option>
                                    <option value="Active" <?php if($enrollmentStatus == 'Active') echo 'selected'; ?> >Active</option>
                                    <option value="Not Interested" <?php if($enrollmentStatus == 'Not Interested') echo 'selected'; ?> >Not Interested</option>
                                    <option value="Moved Away" <?php if($enrollmentStatus == 'Moved Away') echo 'selected'; ?> >Moved Away</option>
                                    <option value="Graduated" <?php if($enrollmentStatus == 'Graduated') echo 'selected'; ?> >Graduated</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Grant Funded -->
                    <div class="form-group">
                        <h5>Is this student grant funded?</h5>
                        <input type="radio" id="grantYes" name="grant" value="true" onclick="javascript:grantForm();" required="required" <?php echo !empty($grantStatus)?'checked':'' ?>> Yes<br>
                        <input type="radio" id="grantNo" name="grant" value="false" onclick="javascript:grantForm();" required="required" <?php echo !empty($grantStatus)?'':'checked' ?>> No<br>
                    </div>

                    <!-- Grant Name -->
                    <div id="grant" class="form-group" <?php if(empty($grantStatus)) echo 'style="display:none"'?> >
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Grant Name</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" id="grantName" name="grantName" class="form-control" <?php echo !empty($grantStatus)?'required':'' ?> value=<?php echo $grantStatus ?>  >
                            </div>
                        </div>
                    </div>

                    <!-- Disability -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Disability Information</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="disability" class="form-control" required="required" value=<?php echo $disability ?> >
                            </div>
                        </div>
                    </div>

                    <!-- Health -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Health Information</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="health" class="form-control" required="required" value=<?php echo $health ?> >
                            </div>
                        </div>
                    </div>

                    <!-- ELL -->
                    <div class="form-group">
                        <h5>Is this student English Language Learner?</h5>
                        <input type="radio" name="ell" value="true" required="required" <?php echo $ell?'checked':'' ?>> Yes<br>
                        <input type="radio" name="ell" value="false" required="required" <?php echo $ell?'':'checked' ?>> No<br>
                    </div>

                    <!-- Additional Information -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Additional Information</h5>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="additionalInfo" class="form-control" required="required" value=<?php echo $additionalInfo ?> >
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
        function grantForm() {
            if (document.getElementById('grantYes').checked) {
                document.getElementById('grant').style.display = 'block';
                document.getElementById('grantName').required = 'required';
            }
            else {
                document.getElementById('grant').style.display = 'none';
                document.getElementById('grantName').required = '';
            }
        }
    </script>


</body>

</html>
