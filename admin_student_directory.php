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
    <?php include("admin_validation.php") ?>
</head>

<body id="page-top">

    <?php 

        $sql = "SELECT USERS.ID, First_name, Last_Name, Grade_In_Fall, Email, Phone_Number FROM USERS LEFT JOIN SECONDARY_USER_INFO ON USERS.ID = SECONDARY_USER_INFO.ID";
        $result = $conn->query($sql);

        $timeStampSql = "SELECT UPDATE_TIME FROM   information_schema.tables WHERE  TABLE_SCHEMA = 'uyp' AND TABLE_NAME = 'SECONDARY_USER_INFO'";
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
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Grade</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Grade</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      while($row = $result->fetch_assoc()){
                        //var_dump($row);
                        echo "<tr>";
                        echo "<td>", !empty($row['ID']) ? $row['ID'] : "-", "</td>";
                        echo "<td>", !empty($row['First_name']) ? $row['First_name'] : "-", "</td>";
                        echo "<td>", !empty($row['Last_Name']) ? $row['Last_Name'] : "-", "</td>";
                        echo "<td>", !empty($row['Email']) ? $row['Email'] : "-", "</td>";
                        echo "<td>", !empty($row['Phone_Number']) ? $row['Phone_Number'] : "-", "</td>";
                        echo "<td>", !empty($row['Grade_In_Fall']) ? $row['Grade_In_Fall'] : "-", "</td>";
                        echo "</tr>";
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Last Updated <?php echo $timeStamp ?></div>
          </div>

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
