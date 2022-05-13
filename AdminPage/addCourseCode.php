<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){
        $code = $_POST['cid'];
        $name = $_POST['name'];
        $crh = $_POST['hours'];
        $query = "INSERT INTO `course` (`cid`, `name`, `credit hours`) VALUES ('$code', '$name', '$crh');";
        $query_run = mysqli_query($connection,$query) or die(mysqli_error()); 

    if($query_run){
    }
     header('Location:course.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 