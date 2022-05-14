<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){
        $Time = $_POST['Time'];
        $name = $_POST['MON'];
        $name1 = $_POST['TUE'];
        $name2 = $_POST['WED'];
        $name3 = $_POST['THU'];
        $name4 = $_POST['FRI'];
        $query = "UPDATE `timttable` SET  `Time` = '$Time',  `MON` = '$name',  `TUE` = '$name1',  `WED` = '$name2', `THU` = '$name3', `FRI` = '$name4' where id = " . $id;
        // $query = "UPDATE timttable SET `Time` = '$Time' where id = '$id'";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: timeTable.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 

