<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS.css">
    <script type="text/javascript" src="JS.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <centre>
    <form action = ""  method = "post" class="btns" >
        <input type="submit" value="Student Login" name="StudentLogin" id="down"><br>
        <input type="submit" value="Staff Login" name="StaffLogin" id="down"><br>
        <input type="submit" value="Admin Login" name="AdminLogin" id="down"><br>
</form>
</centre>

<?php

if(isset($_POST['StudentLogin'])){
    header("Location: studentLogin.php");
}

if(isset($_POST['StaffLogin'])){
    header("Location: teacherLogin.php");
}

if(isset($_POST['AdminLogin'])){
    header("Location: adminLogin.php");
}
?>


</body>



</body>

</html>