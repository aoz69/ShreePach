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
    <h1 id="log">
        Admin Login
    </h1>


    <form method = "post">
        <label for="fname">Username:</label><br>
        <input name = "username" type="text" id="username" required> <br>
        <label for="fname">Password:</label><br>
        <input name = "password" type="password" required><br><br>
        <input name = "submit" type="submit" onclick="validation()">
    </form>

<?php


session_start();
$user = "$_POST[username]";

    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"web");
        $runo = "SELECT * FROM AdminInfo WHERE username = '$_POST[username]'";
        $run = mysqli_query($connection , $runo);
while($check = mysqli_fetch_assoc($run)){
    if($check['username'] == $_POST['username']){
       if($check['password'] == $_POST['password']){
        $_SESSION['username'] = $check ['username'];
        header("Location: ../Global/index.php");
        }
        else{
            echo "INVALID PASSWORD";
        }
}
}
}
?>

</body>

</html>

