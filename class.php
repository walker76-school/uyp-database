<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class Update</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>

</head>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <form method="post" action="primary_confirm.php">
                    
                    <!-- Grade Level -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Grade Level</h5>
                            </div>
                            <div class="col-md-1">
                                <select class="form-control" id="grade_level" required="required" name="grade_level">
                                    <option value="" disabled selected></option>
                                    <option value="4th - 5th Grade">4th - 5th Grade</option>
                                    <option value="6th - 8th Grade">6th - 8th Grade</option>
                                    <option value="9th - 12th Grade">9th - 12th Grade</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="form-group">
                        <div class="form-row row">
                            <div class="col-md-2">
                                <h5>Class Name</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="name" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
					
					<!-- Building -->
                    <div class="form-group">
                        <div class="form-row row">
                            <div class="col-md-2">
                                <h5>Building</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="building" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
					
					<!-- Room Number -->
                    <div class="form-group">
                        <div class="form-row row">
                            <div class="col-md-2">
                                <h5>Room Number</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="room_number" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
					
					<!-- Instructor Name -->
                    <div class="form-group">
                        <div class="form-row row">
                            <div class="col-md-2">
                                <h5>Instructor Name</h5>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="instructor" class="form-control" required="required">
                            </div>
                        </div>
                    </div>


                    <!-- Start Day -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Start Day</h5>
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
					
					<!-- Start Time -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Start Time of the Class</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="start_hour" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="start_minute" class="form-control" required="required">
                            </div>
                        </div>
                    </div>
					
					<!-- End Time -->
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-2">
                                <h5>Ending Time of the Class</h5>
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="end_hour" class="form-control" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" name="end_minute" class="form-control" required="required">
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
</body>

</html>
