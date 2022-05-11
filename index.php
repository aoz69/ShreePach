<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS.css">
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
      <a class="nav-item nav-link active" href="index.php" id = "color">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="message.php">Messages</a>
      <a class="nav-item nav-link" href="course.php">Course</a>
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<?php

session_start();
?>


 <center>

 <h1 id = "ji"> Hello <?php echo $_SESSION['username'];?><h1>
     <br> <br>
    <h1> Message</h1>
    <h4> The message panel is working fine. It is operating at efficient response time.</h3>

    <h1> Course</h1>
    <h4>The course panel is working fine. Students can see their modules and Teachers can add or remove assignments.
    </h3>

    <h1> Grades</h1>
    <h4> The Grades panel is working fine. Students can see their realesed grades and teacher can release or edit grades.</h3>

    <h1> Diary</h1>
    <h4> The dairy panel is working fine. Students and Teachers can access the calender.</h3>
</center>
</body>
</html>