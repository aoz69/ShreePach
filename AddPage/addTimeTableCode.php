<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){
        $code = $_POST['Time'];
        $name = $_POST['MON'];
        $name1 = $_POST['TUE'];
        $name2 = $_POST['WED'];
        $name3 = $_POST['THU'];
        $name4 = $_POST['FRI'];
        $query = "INSERT INTO `timttable` (`Time`, `MON`, `TUE`, `WED`, `THU`, `FRI`) VALUES ('$code', '$name','$name1','$name2','$name3','$name4')";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/timeTable.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 