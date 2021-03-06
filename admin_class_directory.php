<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class Directory</title>

    <?php include("components/header.php"); ?>
    <?php include("database.php"); ?>
    <?php include("admin_validation.php"); ?>

</head>

<body id="page-top">

    <?php 

        $sql = "SELECT * FROM Class";
        $result = $conn->query($sql);

        $timeStampSql = "SELECT UPDATE_TIME FROM information_schema.tables WHERE TABLE_SCHEMA = 'uyp' AND TABLE_NAME = 'Class'";
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
              Class Directory</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>CRN</th>
                      <th>Name</th>
                      <th>Grade Level</th>
                      <th>Building</th>
                      <th>Room Number</th>
                      <th>Instructor</th>
                      <th>Session</th>
                      <th>Year</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Current Enrollment</th>
                      <th>Capacity</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>CRN</th>
                      <th>Name</th>
                      <th>Grade Level</th>
                      <th>Building</th>
                      <th>Room Number</th>
                      <th>Instructor</th>
                      <th>Session</th>
                      <th>Year</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th>Current Enrollment</th>
                      <th>Capacity</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      while($row = $result->fetch_assoc()){
                        //var_dump($row);
                        echo "<tr>";
                        echo "<td>", !empty($row['CRN']) ? $row['CRN'] : "-", "</td>";
                        echo "<td>", !empty($row['Name']) ? $row['Name'] : "-", "</td>";
                        echo "<td>", !empty($row['Grade_Level']) ? $row['Grade_Level'] : "-", "</td>";
                        echo "<td>", !empty($row['Building']) ? $row['Building'] : "-", "</td>";
                        echo "<td>", !empty($row['Room_Number']) ? $row['Room_Number'] : "-", "</td>";
                        echo "<td>", !empty($row['Instructor_Name']) ? $row['Instructor_Name'] : "-", "</td>";
                        echo "<td>", !empty($row['Session']) ? $row['Session'] : "-", "</td>";
                        echo "<td>", !empty($row['Year']) ? $row['Year'] : "-", "</td>";
                        echo "<td>", !empty($row['Start_Time']) ? $row['Start_Time'] : "-", "</td>";
                        echo "<td>", !empty($row['End_Time']) ? $row['End_Time'] : "-", "</td>";
                        echo "<td>", !empty($row['Current_Enrollment']) ? $row['Current_Enrollment'] : "-", "</td>";
                        echo "<td>", !empty($row['Capacity']) ? $row['Capacity'] : "-", "</td>";
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
