<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    
    <h1 class="text-center">
        User Login
    </h1>

<div class="text-center">
    <form method = "post">
        <label for="fname">Userid:</label><br>
        <input name = "id" type="text" id="username" required> <br>
        <label for="fname">Password:</label><br>
        <input name = "password" type="password" required><br><br>
        <input name = "submit" type="submit" onclick="validation()">
    </form>

    <?php
    session_start();
    $_SESSION['check'] = false;
    $user = "";
    if(isset($_POST['submit'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"web");
        $query = "SELECT * FROM user WHERE u_id = '$_POST[id]'";
        $run = mysqli_query($connection , $query);
        
        while($check = mysqli_fetch_assoc($run)){

            if($check['u_id'] == $_POST['id']){
                if($check['password'] == $_POST['password']){
                    $_SESSION['id'] = $check['u_id'];
                    $_SESSION['check'] = true;
                    check = "true";
                    $_SESSION['role'] == $check['role']
                    header("Location:index.php");
                }
            }
            else{
                echo '<script>alert("INVALID DATA")</script>';
                
            }
        }
    }
    ?>
</div>
</body>

</html>

