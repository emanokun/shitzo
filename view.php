<html>

<?php
session_start();
?>

<head>
    <title>
        SECRET PAGE
    </title>
</head>

<link rel="stylesheet" href="projectstyle.css">
<style>
    body {
        background-image: url('admin.jpg');
    }
</style>
<body>
<p style="text-align:right">
    <button type=button onclick="window.location.href='logout.php';">
        Logout
    </button>
</p>
<center>
    <h1>WELCOME</h1>
    <?php
    echo "<br><br>";
    $conn = mysqli_connect("localhost", "azureuser", "123", "asg3ec")
    or die("Cannot connect to server or database not found");
    $query = "select * from user";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "Error occurred when accessing data to database";
    } else {
        if (mysqli_num_rows($result) == 0) {
            echo "Database has no data";
        } else {
            ?>
            Here are all the user's secret:
            <br><br>
            <table border=1>
            <tr>
                <td style="text-align:center">Username</td>
                <td style="text-align:center">Password</td>
                <td style="text-align:center">Secret</td>
            </tr>
        <?php
        while ($x = mysqli_fetch_array($result, MYSQLI_NUM)) {
                ?>
                <tr>
                <td style="text-align:center"><?php echo $x[0]; ?></td>
                <td style="text-align:center"><?php echo $x[1]; ?></td>
                <td style="text-align:center"><?php echo $x[2]; ?></td>
            </tr>
                <?php
            }
            echo "</table>";
        }
    }
    ?>
</center>
</body>
</html>