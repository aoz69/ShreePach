<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database

    if(isset($_POST['submit'])){ //checks if button was pressed
      $head = $_POST['Heading']; //gets heading from the form
        $msg = $_POST['Message'];  //gets message from the form
    $query = "insert into announcement(Heading, Message) values('$head' , '$msg')"; // adds value to database
    $query_run = mysqli_query($connection,$query); 

    if($query_run){ //checks if the code has been executed
    }
     header('Location: ../Global/message.php'); //head back to message page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 