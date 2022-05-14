<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){
        $name = $_POST['Heading'];
        $msg = $_POST['Message'];

        $query = "UPDATE `announcement` SET `Heading` = '$name',  `Message` = '$msg' where id = " . $id;
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: message.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 

