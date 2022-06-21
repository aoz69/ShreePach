<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $id = $_POST['di']; //fetch id
    if(isset($_POST['submit'])){ //checks if the button was pressed
        $name = $_POST['Heading'];  //gets data from form
        $msg = $_POST['Message']; //gets data from form

        $query = "UPDATE `announcement` SET `Heading` = '$name',  `Message` = '$msg' where id = " . $id; //alters and addes updated message to the database
        $query_run = mysqli_query($connection,$query); 

    if($query_run){
    }
     header('Location: ../Global/message.php');//heads back to message page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 

