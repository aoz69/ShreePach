<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){ //checks of the button was pressed
        $name = $_POST['name']; //gets data from table
        $time = $_POST['Duration']; //gets data from table
        $query = "UPDATE `course` SET `name` = '$name',  `Duration` = '$time' where cid = " . $id; //edits and adds new data to the database
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/course.php');//heads back to course page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 