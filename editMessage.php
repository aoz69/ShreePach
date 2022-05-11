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
<center>
<h1>ADD NEWS</h1>

<br>
<br>
<form action = "addMessage.php" method = "post"  >
  <div class="form-group">
    <label for="exampleFormControlInput1"  >Heading</label>
    <input name = "Heading" class="form-control" id="exampleFormControlInput1"  placeholder="News Heading here"   required> 
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">News Description</label>
    <textarea name = "Message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="News Description here"></textarea>
  </div>
  <input  type= "submit" name= "submit"  value = "submit"></input>
</form>



<br>
<br>
<br>

<h1>REMOVE NEWS</h1>



<input  type= "submit" name= "delete"  value = "delete"></input>
<center>

<?php

session_start(); //session start function
?>
</body>
</html>