<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
      .bonochi{
        color: black;
      }

      #curr{
      color : red;
      font-weight:bold;
    }
    </style>




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
      <a class="nav-item nav-link active" href="../Global/index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="../Global/message.php" >Message</a>
      <a class="nav-item nav-link" href="../Global/course.php" id = "curr">Course</a>
      <a class="nav-item nav-link" href="../Global/grades.php">Grades</a>
      <a class="nav-item nav-link" href="../Global/diary.php">Diary</a>
      <a class="nav-item nav-link" href="../Global/timeTable.php">Time Table</a>
      <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
    </div>
  </div>
</nav>
<center>
<h1>ADD Course</h1>

<br>
<br>

<form action = "addCourseCode.php" method = "post"  >
  <div class="form-group">
  <h3><label for="exampleFormControlInput1" class="bonochi">Course ID</label></h3>
    <input  type="number"  name = "cid" class="form-control" id="exampleFormControlInput1"  placeholder="Course ID here"   required> 
  </div>
  <div class="form-group">
  <h3><label for="exampleFormControlInput1" class="bonochi">Course Name</label></h3>
    <input name = "name" class="form-control" id="exampleFormControlInput1"  placeholder="Course name here"   required> 
  </div>
  <div class="form-group">
  <h3><label for="exampleFormControlInput1" class="bonochi">Credit Hours</label></h3>
    <input type="number" name = "hours" class="form-control" id="exampleFormControlInput1"  placeholder="Credit hours here (in hours)"   required> 
  </div>
  <div class="form-group">
  </div>
  <input  type= "submit" name= "submit"  value = "submit"></input>
</form>
<center>

</body>
</html>