<html>

<head>
    <title>
        SUBMIT STATUS
    </title>
</head>

<link rel="stylesheet" href="projectstyle.css">
<style>
    body {
        background-image: url('thanks.jpg');
    }
</style>
<body>

<center>
    <h1>ALERT</h1>

    <?php

    $secret = $_POST["secret"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "azureuser", "123", "asg3ec")
    or die("Cannot connect to server or database not found");
    $query = "select * from user where username = '$username'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "Username already exist";
        ?>
        <br><br>
        <button type=button onclick="window.location.href='register.php';">
            Return to Registration Form
        </button>
        <button type=button onclick="window.location.href='index.php';">
            Return to Homepage
        </button>
        <?php
    } else {
        $query = "insert into user
                  (username, password, secret) 
                  values 
                  ('$username', '$password', '$secret')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "Error occurred when inserting data to database";
            ?>
            <br><br>
            <button type=button onclick="window.location.href='register.php';">
                Return to Registration Form
            </button>
            <button type=button onclick="window.location.href='index.php';">
                Return to Homepage
            </button>
            <?php
        } else {
            echo "Record has been added into database";
            session_start();
            $_SESSION["username"] = $username;
            ?>
            <br><br>
            <button type=button onclick="window.location.href='index.php';">
                Return to Homepage
            </button>
            <button type=button onclick="window.location.href='view.php';">
                See the Secrets
            </button>
            <?php
        }
    }
    ?>
</center>
</body>
</html>