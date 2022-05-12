<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_GET['di']; //fetch id
    $query  = "delete from announcement where id = '$id'"; //delete fetched id
    $query_run = mysqli_query($connection,$query); // run query

    if($query_run){ // after the delete function works stop increment and load message page
    $sel = "select * from announcement"; //select table
    $query = mysqli_query($connection, $sel); //run query in selected db
    $res = mysqli_fetch_array($query); //get array value
    if($res==0){    // stop id increment if there in no data
       $come = "TRUNCATE TABLE web.announcement"; //start increment from 0
       $query_run = mysqli_query($connection,$come); //run query
    }
     header('Location: message.php'); //head to message page
    }
    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?>