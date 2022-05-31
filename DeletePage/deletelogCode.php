<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_GET['di']; //fetch id
    $query  = "delete from logs where did = '$id'"; //delete fetched id
    $query_run = mysqli_query($connection,$query); // run query

    if($query_run){ // after the delete function works stop increment and load message page
     header('Location: ../Global/diary.php'); //head to message page
    }
    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?>