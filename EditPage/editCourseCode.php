<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $time = $_POST['Duration'];
        $query = "UPDATE `course` SET `name` = '$name',  `Duration` = '$time' where cid = " . $id;
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/course.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 