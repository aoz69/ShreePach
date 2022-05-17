<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    if(isset($_POST['submit'])){
        session_start();
        echo $_SESSION['getid'];
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $iden = $_POST['id'];
        $name = $_POST['name'];
        $cr = $_POST['credithours'];
        $cid  = intval( $_POST['course_id'] );
        $uid  = intval( $_POST['uid'] );
         $query = "INSERT INTO `module` (`mid`, `name`, `credit hours`, `course_id`, `staff_id`) VALUES ('$iden', '$name', '$cr', $cid, $uid);";
        $query_run = mysqli_query($connection,$query); 
    if($query_run){
    }
     header('Location: ../Global/module.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 
