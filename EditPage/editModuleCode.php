<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['getid']; //gets id of the module we want to edit from the previous page
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $name = $_POST['name']; //gets edited data from the form
        $cr = $_POST['credithours']; //gets edited data from the dropdown menu of the form
        $cid  = intval( $_POST['course_id'] ); //gets edited data from the dropdown menu of the form
        $uid = $_POST['staff_id']; //gets edited data from the form
        //updates data of thedatabase
        $query = "UPDATE `module` SET `name` = '$name',  `credit hours` = '$cr' , `course_id` = $cid where mid = " . $_SESSION['getid'];
        $query_run = mysqli_query($connection,$query); 
    }
    if($query_run){
     header('Location: ../Global/module.php'); // heads back to module page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 