<?php
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
    if(isset($_POST['submit'])){
        session_start();
        echo $_SESSION['getid'];
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $iden = $_POST['id'];
        $name = $_POST['name'];
        $cr = $_POST['credithours'];
        $cid = $_POST['course_id'];
        $uid = $_POST['uid'];
        
        $fel = 'select * from module INNER JOIN 
        course course_id ON module.course_id=cid
        INNER JOIN  
        user staff_id ON module.staff_id = u_id'; //select table
        $query = "INSERT INTO module INNER JOIN 
        course ON module.course_id=cid(`mid`, `name`, `credit hours`, `course_id`, `staff_id`) VALUES (\'$iden\', \'$name\', \'$cr\', \'$cid\', \'$uid\');";
        $query_run = mysqli_query($connection,$query); 
    if($query_run){
    }
     header('Location: ../Global/module.php');
    }
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Update DATA xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
?> 
