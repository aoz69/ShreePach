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

<br>
<br>

<form action = "editMessageCode.php" method = "post"  >
    <?php
 $id = $_GET['di']; //fetch id

 $connection = mysqli_connect("localhost","root",""); //connect database
 $db = mysqli_select_db($connection,"web"); //select database
 $sel = "select * from announcement where id ='$id'"; //select table
 $query = mysqli_query($connection, $sel); // run query from connected db

 $res = mysqli_fetch_array($query)
?>

 <input type = " text" id = "new" name = "di" value = "<?php  echo $id; ?>"> </input>

<div class="row">
    <div class="col">
    <label>Heading
      <input type="text" name= "Heading" class="form-control"  value = <?php echo $res['Heading']?>
    </div>
    <div class="col">
    <label> Message
      <input type="text" name= "Message" class="form-control"  value = <?php echo $res['Message']?>
    </div>
    <br>
  <input  type= "submit" name= "submit"  value = "Update"></input>


</form>
</center>

</body>
</html>

