<html>

<head>
    <title>
        HOMEPAGE
    </title>
</head>

<link rel="stylesheet" href="projectstyle.css">
<style>
#section1 {
background-image: url('oceanfloor.jpg');
}

#section2 {
background-image: url('beach.jpg');
}
</style>
<body>

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<center>
    <div id="section1">
        <br><br><br>
        <h1>WELCOME TO CONFESSIONS</h1>
        <h2>LOGIN</h2>
        <br><br>
        <form name=loginform method="post" action="loginprocess.php">
            <br><br>
            USERNAME: <input name=username type=text maxlength=20 size=50>
            <br><br>
            PASSWORD: <input name=password type=password maxlength=20 size=50 id=myInput>
            <br><br>
            <input type=checkbox onclick="myFunction()">Show Password
            <br><br>
            <button type="submit">Login</button>
            <button type="reset">Reset</button>
        </form>
        <button type=button onclick="window.location.href='register.php';">
            Click here to tell your secret
        </button>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
    </div>
</center>
</body>
</html>