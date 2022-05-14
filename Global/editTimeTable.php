<!DOCTYPE html>
<html lang="en">
<head>

    <style> 
    #new{
        opacity : 0;
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
    <h1>Edit Time Table</h1>
</center>
<br>
<br>

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
 <span> <?php  echo $id; ?></span>

 <input type = " text" id = "new" name = "di" value = "<?php  echo $id; ?>"> </input>

<div class="row">
    <div class="col">
        <label>Time
      <input type="text"  name= "Time" class="form-control" placeholder="Time"   value = <?php echo $res['Time']?> >
    </div>
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
  </div>
  <input  type= "submit" name= "submit"  value = "submit"></input>


</form>


</body>
</html>

