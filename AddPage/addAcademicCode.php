<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){ //checks if the button has been pressed
       $ids =  $_POST['uid']; //gets data grom the form
       $names =  $_POST['name']; //gets data grom the form
       $add =  $_POST['address']; //gets data grom the form
       $call =  $_POST['contact']; //gets data grom the form
       $role =  $_POST['role']; //gets data grom the form
       $pass =  $_POST['password']; //gets data grom the form
       //adds new data to database
        $query = "INSERT INTO `user` (`u_id`, `u_name`, `address` , `contact` , `role`, `password`) VALUES ('$ids',
        '$names',
        '$add',
        '$call',
        '$role',
       '$pass' )";
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location:../Global/Academic.php'); //headsback to Academic page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 