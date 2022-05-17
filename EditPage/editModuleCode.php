<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['getid'];
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $name = $_POST['name'];
        $cr = $_POST['credithours'];
        $cid  = intval( $_POST['course_id'] );
        $uid = $_POST['staff_id'];
        $query = "UPDATE `module` SET `name` = '$name',  `credit hours` = '$cr' , `course_id` = $cid where mid = " . $_SESSION['getid'];
        $query_run = mysqli_query($connection,$query); 
    }
    if($query_run){
    // } `course_id` = '$cid' ,  `staff_id` = '$uid'
     header('Location: ../Global/module.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 