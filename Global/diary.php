<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<style>
 #tabble tr:nth-child(even) {
    font-weight: bold;
    background-color: #d3d3c4;
  }

/* 
  tr, td {
  border: 2px solid black;
  font-weight: bold;
  } */

  #del{
    text-decoration: none;
    color: red;
  }

  #del:hover{
    background-color: brown;
    color: white;
    text-decoration: none;
    
  }

  #mes{
    margin-left: 20px
  }

  th {
    color: red;
  
  }

  #curr{
    color : red;
    font-weight:bold;
  }
</style>
<!-- CSS -->
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<body>
    <!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">WUC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php" >Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="message.php" >Message</a>
      <a class="nav-item nav-link" href="course.php">Course</a>
      <a class="nav-item nav-link" href="diary.php"id = "curr">Diary</a>
      <a class="nav-item nav-link" href="timeTable.php">Time Table</a>
      <?php session_start();
      if($_SESSION['role'] == "admin"){?>
        <a class="nav-item nav-link" href="Academic.php" id = "curr">Academic</a>
      <?php } ?>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<?php 

    // if($SESSION['id'] = "" || empty($SESSION['id']) ){

    //   header('Location: ../Global/login.php');
    
    // }
?>
<div class="text-center">

  <h1>Diary</h1>
  <br>
</div>
<a href="../AddPage/addLog.php">
  <input  class="btn btn-light" name="submit" value = "Add new data" type="submit" id="mes"/> 
  <!-- submit button -->
</a>
  <!-- Goes to editNews page -->

<br><br>
<div class="text-center">

  <!-- Table to show the database data -->
  <table id = "tabble" class="table">
    <thead>
      <tr>
        <th>
          S.N
        </th>
        <th>
          Log
        </th>
        <th>
          Date(YYYY-MM-DD)
        </th>
        <th>
        Action
        </th>
      </tr>
    </thead>

    <tbody>

    <?php //php code start
      $connection = mysqli_connect("localhost","root",""); //connect database
      $db = mysqli_select_db($connection,"web"); //select database
      $sel = "select * from Logs where uid = " . $_SESSION['id']; //select table
      $query = mysqli_query($connection, $sel); // run query from connected db
      $data = mysqli_num_rows($query);
      $i = 1;
      while($res = mysqli_fetch_array($query)){  //loop to print all data
        echo "<tr><td>" . $i . "</td><td>". $res['Log'] . "</td><td>" . $res['Date']. "<td><a href= '../DeletePage/deletelogCode.php?di=$res[did]' did='del'>Remove </td>" . "</tr>" ;
        $i++;
      }
    ?>
      <!-- php code end-->
    </tbody>
  </table>
</div>
</body>
</html>