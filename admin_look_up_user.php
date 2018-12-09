<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Look up User</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">
                <h3>Look up student</h3>
                <p>Please enter a user's id, which can be found in the student directory, to look up complete information on that student.</p>

                <form action='admin_view_student_info.php' method='post'>

                    <!-- User -->
                    <div class="form-group">
                      <div class="form-label-group">
                         <input type="text" id="inputID" name="user" class="form-control" placeholder="User ID" required="required">
                        <label for="inputID">User ID</label>
                      </div>
                    </div>
                    <input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Search User'>
                       
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
