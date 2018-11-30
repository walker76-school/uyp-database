<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php 

        $sql = "SELECT USERS.ID, SECONDARY_USER_INFO.First_Name, SECONDARY_USER_INFO.Last_Name, Takes.CRN FROM USERS NATURAL JOIN Takes LEFT JOIN SECONDARY_USER_INFO ON Users.ID = secondary_user_info.ID";
        $result = $conn->query($sql);

        $timeStampSql = "SELECT UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = 'uyp' AND TABLE_NAME = 'Takes'";
        $timeStampResult = $conn->query($timeStampSql);
        $timeStampRow = $timeStampResult->fetch_assoc();
        $timeStamp = $timeStampRow['UPDATE_TIME'];
        //var_dump($timeStamp);
    ?>

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

          <div class="container-fluid">
            <form action='insert_takes.php' method='post'>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-2">
                       <input type="text" name="user" class="form-control" placeholder="User ID" required="required">
                    </div>
                    <div class="col-md-2">
                       <input type="text" name="crn" class="form-control" placeholder="CRN" required="required">
                    </div>
                    <div class="col-md-2">
                       <input class='btn btn-primary btn-block' type='submit' name='submit' value='Insert'>
                    </div>
                  </div>
                </div>
            </form>

            <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Student Directory</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>CRN</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>CRN</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                        if($result){
                          while($row = $result->fetch_assoc()){
                            //var_dump($row);
                            echo "<tr>";
                            echo "<td>", !empty($row['ID']) ? $row['ID'] : "-", "</td>";
                            echo "<td>", !empty($row['First_Name']) ? $row['First_Name'] : "-", "</td>";
                            echo "<td>", !empty($row['Last_Name']) ? $row['Last_Name'] : "-", "</td>";
                            echo "<td>", !empty($row['CRN']) ? $row['CRN'] : "-", "</td>";
                            echo "</tr>";
                          }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Last Updated <?php echo $timeStamp ?></div>
            </div>

            <form action='remove_mentor.php' method='post'>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-2">
                       <input type="text" name="user" class="form-control" placeholder="User ID" required="required">
                    </div>
                    <div class="col-md-2">
                       <input type="text" name="crn" class="form-control" placeholder="Mentor Name" required="required">
                    </div>
                    <div class="col-md-2">
                       <input class='btn btn-primary btn-block' type='submit' name='submit' value='Remove'>
                    </div>
                  </div>
                </div>
            </form>

          </div>
          <!-- /.container-fluid -->

          <?php include("components/footer.php"); ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include("components/javascript.php"); ?>

    <!-- Script for the table -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
          $('#dataTable').DataTable();
        });
    </script>

</body>

</html>
