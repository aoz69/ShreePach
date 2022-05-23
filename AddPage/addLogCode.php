<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    session_start();
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){
        echo $_SESSION['id'];
        $date = $_POST['Date'];
        $log = $_POST['Log'];
        $did = intval( $_SESSION['id']);
        $query = "insert into logs(Log, Date) values( '$log' , '$date')";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/diary.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 