<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    if(isset($_POST['submit'])){//checks if button was pressed
        session_start();
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $iden = $_POST['id']; //gets data from form
        $name = $_POST['name']; //gets data from form
        $cr = $_POST['credithours']; //gets data from form
        $cid  = intval( $_POST['course_id'] ); //gets data from form dropdown menu
        $uid  = intval( $_POST['uid'] ); //gets data from form dropdown menu
        //inserts value in the database, inserts 
        $query = "INSERT INTO `module` (`mid`, `name`, `credit hours`, `course_id`, `staff_id`) VALUES ('$iden', '$name', '$cr', $cid, $uid);";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){ //checks if the code has been executed
    }
     header('Location: ../Global/module.php'); // heads back to module page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 
