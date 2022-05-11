<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1 id="log">
        Teacher Login
    </h1>


    <form method = "post">
        <label for="fname">Username:</label><br>
        <input name = "username" type="text" id="username" required> <br>
        <label for="fname">Password:</label><br>
        <input name = "password" type="password" required><br><br>
        <input name = "submit" type="submit" onclick="validation()">
    </form>

</body>

</html>


<?php

session_start();
$user = "";

if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web");
    $runo = "SELECT * FROM staffinfo WHERE username = '$_POST[username]'"; //selected username from the database table
    $run = mysqli_query($connection , $runo);
while($check = mysqli_fetch_assoc($run)){
//check entered data validity
    if($check['username'] == $_POST['username'] && $check['password'] == $_POST['password']){
        $_SESSION['username'] = $check ['username'];
         header("Location: index.php"); //if data matches login to home page
        }
        else {
            echo "Have a good night!"; //else throws error
          }
    }
}

?>