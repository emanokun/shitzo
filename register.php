<html>

<head>
    <title>
        SUBMIT SECRET
    </title>
</head>

<link rel="stylesheet" href="projectstyle.css">
<style>
    body {
        background-image: url('oceanfloor.jpg');
    }
</style>
<body>

<script>
    function show1() {
        var x = document.getElementById("myInput1");
        if (x.type == "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

<center>
    <br><br>
        <h1>ENTER YOUR CONFESSION</h1>
        <form name=registerform method="post" action="registerprocess.php">
            <br><br>
            <br><br>
            <br><br>
            The Secret: <input name=secret type=text maxlength=60 size=100 required>
            <br><br>
            Username: <input name=username placeholder="ex: myname123" type=text maxlength=20 size=50 required>
            <br><br>
            Password: <input name=password placeholder="xxxxxxx" type=password maxlength=20 size=50 id=myInput1 required>
            <br><input type=checkbox onclick="show1()">Show Password
            <br><br>
            <br><br>
            <button type="submit" id="btn">Submit</button>
            <button type="reset">Reset</button>
        </form>
    <button type=button onclick="window.location.href='index.php';">
        Return to Homepage
    </button>
</center>

</body>

</html>