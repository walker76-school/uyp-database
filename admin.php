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

</head>

<?php

    $user = generateRandomUser(5);
    $pass = generateRandomPass();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["back"])) {
            $loc = htmlspecialchars($_SERVER["PHP_SELF"]);
            header('Location:' . $loc);
        } else {

            if (isset($_POST["user"])) {
                $user = $_POST["user"];
            }

            if (isset($_POST["pass"])) {
                $pass = $_POST["pass"];
            }

            // TODO - Hash password

            $query = "INSERT INTO USERS VALUES (" . $user . ", '" . $pass . "');";
            $conn->query($query);
            echo $query;
        }
    }
    
?>

<body id="page-top">

    <?php include("components/navbar.php"); ?>

    <div id="wrapper">

        <?php include("components/sidebar.php"); ?>

        <div id="content-wrapper">

            <div class="container-fluid">
            <h3>Generate New Login</h3>
            <p>Clicking the button below will allow you to create a new username/password pair. These can be used by the students to login and update their information as well as register for classes. Please take caution when using this feature as you will not want to generate unneccesary accounts if possible. Once the account is created you can send this information to the student who can then proceed on their own.</p>

            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method='post'>
            <?php

                if (!($_SERVER["REQUEST_METHOD"] == "POST")) {
                        echo "<div style='display: none;'>";
                            echo "<input type='text' name='user' class='form-control' required='required' value='" . $user . "'>";
                            echo "<input type='text' name='pass' class='form-control' required='required' value='" . $pass . "'>";
                        echo "</div>";
                        echo "<div>";
                            echo "<input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Generate Login'>";
                        echo "</div>";
                
                } else {
                    if (!empty($_POST["user"])) {
                        echo "<label>User ID: " . $_POST["user"] . "</label>";
                    } else {
                        echo "<label>Cannot find user</label>";
                    }

                    echo "<br/>";

                    if (!empty($_POST["pass"])) {
                        echo "<label>Password: " . $_POST["pass"] . "</label>";
                    } else {
                        echo "<label>Cannot find user</label>";
                    }

                    echo "<div style='display: none;'>";
                        echo "<input type='text' name='back' class='form-control' required='required' value='back'>";
                    echo "</div>";

                    echo "<input class='btn btn-primary btn-block col-md-3' type='submit' name='submit' value='Go Back'>"; 
                } 

            ?>
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
