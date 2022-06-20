<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    session_start();
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    

    if(isset($_POST['submit'])){
        $head = $_POST['Heading'];
        $msg = $_POST['Desc'];
        $file = $_FILES;
        $query = "insert into assignment(Heading, Description, file) values('$head' , '$msg' , '$file')";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/submitAssignment.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 