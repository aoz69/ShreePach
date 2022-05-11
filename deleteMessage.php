<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web");
    $id = $_GET['di'];
    $query  = "delete from announcement where id = '$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run){ // after the delete function works stop increment and load message page
    $sel = "select * from announcement";
    $query = mysqli_query($connection, $sel);
    $res = mysqli_fetch_array($query);
    if($res==0){    // stop id increment if there in no data
       $come = "TRUNCATE TABLE web.announcement";
       $query_run = mysqli_query($connection,$come);
    }
     header('Location: message.php');
    }

    
    //xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Delete DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?>