<!DOCTYPE html>
<html lang="en">

<head>
<style>
    body {
        background-color: rgb(51, 62, 219);
        /* background-color: aliceblue; */
    }
    
    form {
        text-align: center;
        color: rgb(232, 233, 241);
    }
    
    #log {
        margin-top: 10%;
        text-align: center;
        color: rgb(232, 233, 241);
    }
    
    #down {
        margin-top: 100px;
        font-size: 75px;
    }
    
    #down:hover {
        background-color: brown;
        margin-top: 100px;
        font-size: 75px;
    }
    
    #ji {
        color: red;
    }
    
    .boldBanaune {
        font-weight: bold;
    }

    </style>
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
    header("Location: ./StudentPage/studentLogin.php");
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