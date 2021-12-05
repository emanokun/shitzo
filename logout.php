<html>

<head>
    <title>
        LOGOUT PAGE
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
    <h1>LOGOUT STATUS</h1>
    <?php
    session_start();
    if (isset ($_SESSION["username"])) {
        session_destroy();
        echo "You have successfully logged out.";
    } else {
        echo "No session exists or session is expired. Please log in again";
    }
    ?>

    <br><br>
    <button type=button onclick="window.location.href='index.php';">
        Return to Homepage
    </button>

</center>
</body>
</html>