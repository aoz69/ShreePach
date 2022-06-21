<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){//checks if button was pressed
        $code = $_POST['Time']; //gets values from the form 
        $name = $_POST['MON']; //gets values from the form 
        $name1 = $_POST['TUE']; //gets values from the form 
        $name2 = $_POST['WED']; //gets values from the form 
        $name3 = $_POST['THU']; //gets values from the form 
        $name4 = $_POST['FRI']; //gets values from the form 
        $query = "INSERT INTO `timttable` (`Time`, `MON`, `TUE`, `WED`, `THU`, `FRI`) VALUES ('$code', '$name','$name1','$name2','$name3','$name4')"; //adds values to database
        $query_run = mysqli_query($connection,$query); 

    if($query_run){ // checks if code has been executed
    }
     header('Location: ../Global/timeTable.php'); //heads back to time table page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 