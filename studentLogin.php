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
    <h1 id="log">
        Student Login
    </h1>


    <form>
        <label for="fname">Username:</label><br>
        <input type="text" id="username" required> <br>
        <label for="fname">Password:</label><br>
        <input type="password" required><br><br>
        <input type="submit" onclick="validation()">
    </form>

</body>

</html>



<?php
session_start();
$user = "";

if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"web");
    $runo = "SELECT * FROM studentinfo WHERE username = '$_POST[username]'";
    $run = mysqli_query($connection , $runo);
while($check = mysqli_fetch_assoc($run)){
    
    if($check['username'] == $_POST['username']){
       if($check['password'] == $_POST['password']){
        $_SESSION['username'] = $check ['username'];
         header("Location: index.php");
        }
        else{
            echo "INVALID PASSWORD";
        }
    }
}
}
?>