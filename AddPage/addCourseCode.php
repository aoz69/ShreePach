<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){
        $code = $_POST['cid'];
        $name = $_POST['name'];
        $crh = $_POST['hours'];
        $query = "INSERT INTO `course` (`cid`, `name`, `Duration`) VALUES ('$code', '$name', '$crh');";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location:../Global/course.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 