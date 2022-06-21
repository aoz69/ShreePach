<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
    #curr{
      color : red;
      font-weight:bold;
    }
    </style>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WUC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php" id = "curr">Home</span></a>
      <a class="nav-item nav-link" href="message.php">Message</a>
      <a class="nav-item nav-link" href="../Global/course.php">Course</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="timeTable.php">Time Table</a>
      <?php 
      session_start();
      if($_SESSION['role'] == "admin"){?>
        <a class="nav-item nav-link" href="Academic.php">Academic</a>
      <?php } ?>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php //php code start

if($_SESSION['check'] != true){ // checks if check is true or not, if it is true then login and show index page, if its false then head back to login page

  header('Location: ../Global/login.php');
}

 $connection = mysqli_connect("localhost","root",""); //connect database
 $db = mysqli_select_db($connection,"web"); //select database
 $uid = (int) $_SESSION['id']; //put uid value same as the id value passwed from login with session
 $sel = "select u_id, role, u_name from user WHERE u_id =  $uid" ; //select table
 $query = mysqli_query($connection, $sel); // run query from connected db
 $data = mysqli_num_rows($query);// get number of rows
 $res = mysqli_fetch_array($query);// get arrys from db
 $_SESSION['role'] = $res["role"] ; // store session role as res role
 $_SESSION['u_name'] = $res["u_name"] ;// store uname as res uname
?>



<div class="text-center">

 <h1 id = "ji"> Hello <?php  echo $_SESSION['u_name'];?><h1>  <!--//displays name of logged in user with the help of session -->
                     
     <br> <br>
    <h1> Message</h1>
    <h4> The message panel is working fine. It is operating at efficient response time.</h3>

    <h1> Course</h1>
    <h4>The course panel is working fine. Students can see their modules and Teachers can add or remove assignments.
    </h3>

    <h1> Grades</h1>
    <h4> The Grades panel is working fine. Students can see their realesed grades and teacher can release or edit grades.</h3>

    <h1> Diary</h1>
    <h4> The dairy panel is working fine. Students and Teachers can access their respective log.</h3>
</div>
</body>
</html>



