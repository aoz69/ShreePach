<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    session_start();
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    

    if(isset($_POST['submit'])){ //checks if the button is pressed
        $did = $_SESSION['id']; //gets id from previous page from session
        $date = $_POST['Date']; //gets date from form
        $log = $_POST['Log']; //gets log from form
        $query = "insert into logs(Log, Date, uid) values( '$log' , '$date' , '$did')"; //sql quert to add data to database
        $query_run = mysqli_query($connection,$query); 

    if($query_run){ //checks if code has been executed
    }
     header('Location: ../Global/diary.php'); //head back to diary page
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ADDING DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 