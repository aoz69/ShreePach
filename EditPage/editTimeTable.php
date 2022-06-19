<!DOCTYPE html>
<html lang="en">
<head>

<style> 
  #new{
      opacity : 0;
  }

  #curr{
      color : red;
      font-weight:bold;
    }
</style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
      <a class="nav-item nav-link" href="../Global/message.php" >Messages</a>
      <a class="nav-item nav-link" href="../Global/course.php">Course</a>
      <a class="nav-item nav-link" href="../Global/diary.php">Diary</a>
      <a class="nav-item nav-link" href="../Global/timeTable.php" id="curr">Time Table</a>
      <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="text-center">
    <h1>Edit Time Table</h1>
</div>
<br>
<br>
<div class="text-center">
  <form action = "editTimeTableCode.php" method = "post"  >
      <?php
  $id = $_GET['di']; //fetch id

  $connection = mysqli_connect("localhost","root",""); //connect database
  $db = mysqli_select_db($connection,"web"); //select database
  $sel = "select * from timttable where id ='$id'"; //select table
  $query = mysqli_query($connection, $sel); // run query from connected db
  $data = mysqli_num_rows($query);

  $res = mysqli_fetch_array($query)


  ?>
  <span id="new"> <?php  echo $id; ?></span>

  <input type = " text" id = "new" name = "di" value = "<?php  echo $id; ?>"> </input>
  <label>Time
  <input type="text"  name= "Time" class="form-control" placeholder="Time"   value = <?php echo $res['Time']?> >
  <div class="col">
  <label>Monday
    <input type="text" name= "MON" class="form-control" placeholder="MON"   value = <?php echo $res['MON']?>>
  </div>
  <div class="col">
  <label>Tuesday
    <input type="text" name= "TUE" class="form-control" placeholder="TUE"  value = <?php echo $res['TUE']?>>
  </div>
  <div class="col">
  <label>Wednesday
    <input type="text" name= "WED" class="form-control" placeholder="WED"  value = <?php echo $res['WED']?>>
  </div>
  <div class="col">
  <label>Thursday
    <input type="text" name= "THU" class="form-control" placeholder="THU"  value = <?php echo $res['THU']?>>
  </div>
  <div class="col">
  <label>Friday
    <input type="text" name= "FRI" class="form-control" placeholder="FRI"  value = <?php echo $res['FRI']?>>
  </div>
  <input  type= "submit" name= "submit"  value = "submit"></input>


  </form>
</div>

</body>
</html>

