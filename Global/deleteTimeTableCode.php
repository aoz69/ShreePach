<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_GET['di']; //fetch id
    $query  = "delete from timttable where id = '$id'"; //delete fetched id
    $query_run = mysqli_query($connection,$query); // run query

    if($query_run){ // after the delete function

     header('Location: timeTable.php'); //head to message page
    }
    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?>