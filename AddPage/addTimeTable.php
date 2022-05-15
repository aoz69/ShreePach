<!DOCTYPE html>
<html lang="en">
<head>

<style>
      .bonochi{
        color: black;
        font-weight: bold;
      }

      #curr{
      color : red;
      font-weight:bold;
    }
    </style>
    <meta charset="UTF-8">
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
      <a class="nav-item nav-link active" href="../Global/index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="../Global/message.php">Message</a>
      <a class="nav-item nav-link" href="../Global/course.php">Course</a>
      <a class="nav-item nav-link" href="../Global/grades.php">Grades</a>
      <a class="nav-item nav-link" href="../Global/diary.php">Diary</a>
      <a class="nav-item nav-link" href="../Global/timeTable.php" id = "curr">Time Table</a>
      <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
    </div>
  </div>
</nav>
<center>
    <h1>Add Time Table</h1>
</center>
<br>
<br>

<form action = "addTimeTableCode.php" method = "post"  >
<div class="row">
    <div class="col">
        <label>Time
      <input type="text"  name= "Time" class="form-control" placeholder="Time">
    </div>
    <div class="col">
    <label>Monday
      <input type="text" name= "MON" class="form-control" placeholder="MON">
    </div>
    <div class="col">
    <label>Tuesday
      <input type="text" name= "TUE" class="form-control" placeholder="TUE">
    </div>
    <div class="col">
    <label>Wednesday
      <input type="text" name= "WED" class="form-control" placeholder="WED">
    </div>
    <div class="col">
    <label>Thursday
      <input type="text" name= "THU" class="form-control" placeholder="THU">
    </div>
    <div class="col">
    <label>Friday
      <input type="text" name= "FRI" class="form-control" placeholder="FRI">
    </div>
  </div>
  <br><br>
  <center>
  <input  class="btn btn-light" type= "submit" name= "submit"  value = "submit"></input>
  </center>
</form>



</body>
</html>