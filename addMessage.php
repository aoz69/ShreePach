<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web");
    $head = $_POST['Heading'];
    $msg = $_POST['Message'];

    if(isset($_POST['submit'])){
      $head = $_POST['Heading'];
        $msg = $_POST['Message'];
    $query = "insert into announcement(Heading, Message) values('$head' , '$msg')";
    $query_run = mysqli_query($connection,$query) or die(mysqli_error()); 

    if($query_run){
    }
     header('Location: editMessage.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 