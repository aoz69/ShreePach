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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<div class="text-center">
  <h1>ADD Module</h1>
  <br>
  <br>
  <form action = "addModuleCode.php" method = "post"  >
  <div class="form-group">
    <h3><label for="exampleFormControlInput1" class="bonochi">Module id</label></h3>
      <input  type="text"  name = "id" class="form-control" id="exampleFormControlInput1"  placeholder="Module id here"   required> 
    </div>
    <div class="form-group">
    <h3><label for="exampleFormControlInput1" class="bonochi">Module name</label></h3>
      <input  type="text"  name = "name" class="form-control" id="exampleFormControlInput1"  placeholder="Module name here"   required> 
    </div>
    <div class="form-group">
    <h3><label for="exampleFormControlInput1" class="bonochi">Credit score</label></h3>
      <input name = "credithours" class="form-control" id="exampleFormControlInput1"  placeholder="Credit score here"   required> 
    </div>

    <?php
        $connection = mysqli_connect("localhost","root",""); //connect database
        $db = mysqli_select_db($connection,"web"); //select database
        $sel = "select * from module"; //select table
        $fel = 'select * from course';
        $gel = 'select * from user WHERE role = "teacher"';
        $query2 = mysqli_query($connection, $fel); // run query from connected db
        $query3 = mysqli_query($connection, $gel); // run query from connected db
        $query = mysqli_query($connection, $sel); // run query from connected db
        $res = mysqli_fetch_array($query);
    ?>

    <div>
        <label>Course</label>
        <select name="course_id"><?php       
            while ($ges = mysqli_fetch_array($query2)){
                echo '<option>' . $ges['name']; '</option>';
            }
            ?>
        </select>
    </div>
    <br>
    <div>
    <label>Tutor</label>
        <select name="uid"><?php       
            while ($tes = mysqli_fetch_array($query3)){
                echo '<option>' . $tes['u_name']; '</option>';
            }
            ?>
        </select>
    </div><br>
        <input  type= "submit" name= "submit"  value = "submit"></input>
    </form>
</div>

</body>
</html>