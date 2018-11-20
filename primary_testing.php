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
                    $siblingName = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                        if (!empty($_POST["suffix"])) {
                            $suffix = $_POST["suffix"];
                        }
                        if (!empty($_POST["firstName"])) {
                            $firstName = $_POST["firstName"];
                        }
                        if (!empty($_POST["middleInitial"])) {
                            $middleInitial = $_POST["middleInitial"];
                        }
                        if (!empty($_POST["lastName"])) {
                            $lastName = $_POST["lastName"];
                        }
                        if (!empty($_POST["preferredName"])) {
                            $preferredName = $_POST["preferredName"];
                        }
                        if (!empty($_POST["addressLine1"])) {
                            $addressLine1 = $_POST["addressLine1"];
                        }
                        if (!empty($_POST["addressLine2"])) {
                            $addressLine2 = $_POST["addressLine2"];
                        }
                        if (!empty($_POST["city"])) {
                            $city = $_POST["city"];
                        }
                        if (!empty($_POST["state"])) {
                            $state = $_POST["state"];
                        }
                        if (!empty($_POST["zip"])) {
                            $zip = $_POST["zip"];
                        }
                        if (!empty($_POST["birthday"])) {
                            $birthday = $_POST["birthday"];
                        }
                        if (!empty($_POST["gender"])) {
                            $gender = $_POST["gender"];
                        }
                        if (!empty($_POST["race"])) {
                            $race = $_POST["race"];
                        }
                        if (!empty($_POST["schoolType"])) {
                            $schoolType = $_POST["schoolType"];
                        }
                        if (!empty($_POST["schoolName"])) {
                            $schoolName = $_POST["schoolName"];
                        }
                        if (!empty($_POST["schoolDistrict"])) {
                            $schoolDistrict = $_POST["schoolDistrict"];
                        }
                        if (!empty($_POST["gradeInFall"])) {
                            $gradeInFall = $_POST["gradeInFall"];
                        }
                        if (!empty($_POST["gradYear"])) {
                            $gradYear = $_POST["gradYear"];
                        }
                        if (!empty($_POST["highSchool"])) {
                            $highSchool = $_POST["highSchool"];
                        }
                        if (!empty($_POST["email"])) {
                            $email = $_POST["email"];
                        }
                        if (!empty($_POST["phoneNumber"])) {
                            $phoneNumber = $_POST["phoneNumber"];
                        }
                        if (!empty($_POST["siblingName"])) {
                            $siblingName = $_POST["siblingName"];
                        }
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
                </div>

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        echo "<div style='display: none;'>";
                    } else {
                        echo "<div>";
                    }
                ?>

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

                    <input class="btn btn-primary btn-block col-md-3" type="submit" name="submit" value="Submit">  

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

</body>

</html>
