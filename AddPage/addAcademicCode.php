<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){
       $ids =  $_POST['uid'];
       $names =  $_POST['name'];
       $add =  $_POST['address'];
       $call =  $_POST['contact'];
       $role =  $_POST['role'];
       $pass =  $_POST['password'];
        $query = "INSERT INTO `user` (`u_id`, `u_name`, `address` , `contact` , `role`, `password`) VALUES ('$ids',
        '$names',
        '$add',
        '$call',
        '$role',
       '$pass' )";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location:../Global/Academic.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 