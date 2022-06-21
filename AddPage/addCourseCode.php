<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){ //checkes if button is clicked
        $code = $_POST['cid']; //gets id from form
        $name = $_POST['name']; //gets name from form
        $crh = $_POST['hours']; //gets hours from form
        $query = "INSERT INTO `course` (`cid`, `name`, `Duration`) VALUES ('$code', '$name', '$crh');"; //sql insert command to add values to database
        $query_run = mysqli_query($connection,$query); 

    if($query_run){ //checks if the code has been executed
    }
     header('Location:../Global/course.php'); //retuens to course page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 