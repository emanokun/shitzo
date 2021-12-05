<html>

<head>
    <title>
        LOGIN STATUS
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
    $conn = mysqli_connect("localhost", "azureuser", "123", "asg3ec")
    or die("Cannot connect to server or database not found");
    $username = $_POST["username"];
    $password = $_POST["password"];
        $query = "select * from user where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $query);
        $login = mysqli_num_rows($result);
        if ($login == 0) {
            echo "Username and/or password do not exist";
            ?>
            <br><br>
            <button type=button onclick="window.location.href='index.php';">
                Return to Homepage
            </button>
            <?php
        } else {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: view.php");
        }
    ?>
</center>
</body>
</html>