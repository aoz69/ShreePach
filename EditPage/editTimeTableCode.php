<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){ //checks of the putton was pressed
        $Time = $_POST['Time']; //gets data from the form
        $name = $_POST['MON']; //gets data from the form
        $name1 = $_POST['TUE']; //gets data from the form
        $name2 = $_POST['WED']; //gets data from the form
        $name3 = $_POST['THU']; //gets data from the form
        $name4 = $_POST['FRI']; //gets data from the form
        //updates the database with new datas
        $query = "UPDATE `timttable` SET  `Time` = '$Time',  `MON` = '$name',  `TUE` = '$name1',  `WED` = '$name2', `THU` = '$name3', `FRI` = '$name4' where id = " . $id;
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/timeTable.php'); //heads back to time table page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 

