<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<style>
 #tabble tr:nth-child(even) {
    font-weight: bold;
    background-color: #d3d3c4;
  }

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
      <a class="nav-item nav-link active" href="../Global/index.php" >Home </a>
      <a class="nav-item nav-link" href="../Global/Message.php" >Message</span></a>
      <a class="nav-item nav-link" href="../Global/course.php" id = "curr">Course > Module</a>
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="timeTable.php" >Time Table</a>
      <?php 
      session_start();
      if($_SESSION['role'] == "admin"){?>
        <a class="nav-item nav-link" href="Academic.php" id = "curr">Academic</a>
      <?php } ?>
      <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
    </div>
  </div>
</nav>
<div class="text-center">
  <br>
  <h1>Modules</h1>
</div>

  <?php 
    // if($SESSION['id'] = "" || empty($SESSION['id']) ){

    //   header('Location: ../Global/login.php');
    
    // }
  if($_SESSION['role'] == "admin") { ?>
      <a href="../AddPage/addModule.php">
      <input   class="btn btn-light" name="submit" value = "Add Module" type="submit" id="mes"/> 
      </a> <?php
    }

  if($_SESSION['role'] == "student") { ?>
        <a href="../Global/submitAssignment.php">
    <input   class="btn btn-light" name="submit" value = "Submit Assignment" type="submit" id="mes"/> 
    </a>
    <?php
    }?>
    
<div class="text-center">
  <br><br>
  

  <!-- Table to show the database data -->
  <table id = "tabble" class="table">
  <thead>
    <tr>
      <th>
        ID
      </th>
      <th>
          Module name
      </th>
      <th>
        Credit score
      </th>
      <th>
        Course
      </th>
      <th>
        Tutor
      </th>
      <?php if($_SESSION['role'] == "admin") { ?>
      <th>
      Action
      </th>
      <?php
    }?>
      <?php
  ?>
    </tr>
  </thead>
  <tbody>


  <?php //php code start

  $connection = mysqli_connect("localhost","root",""); //connect database
  $db = mysqli_select_db($connection,"web"); //select database
  $sel = "select * from module "; //select table
  $fel = 'select * from module INNER JOIN 
  course course_id ON module.course_id=cid
  INNER JOIN  
  user staff_id ON module.staff_id = u_id'; //select table
  $query = mysqli_query($connection, $sel); // run query from connected db
  $query2 = mysqli_query($connection, $fel);
  $data = mysqli_num_rows($query);


  if($_SESSION['role'] == "admin"){
    while($res = mysqli_fetch_array($query)){  //loop to print all data
      $reso = mysqli_fetch_array($query2);
      echo "<tr><td>" . $res["mid"] . "</td><td>". $res["name"] .  "</td><td>" . $res["credit hours"] .  "</td><td>" . $reso["name"] ."</td><td>" . $reso["u_name"] .  "</td><td><a href= '../DeletePage/deleteModuleCode.php?di=$res[mid]' id='del'>Remove". "<td><a href= '../EditPage/editModule.php?di=$res[mid]' id='edit'>Edit</td>" . "</tr>" ;
    }
  }

  else{
    while($res = mysqli_fetch_array($query)){  //loop to print all data
      $reso = mysqli_fetch_array($query2);
        echo "<tr><td>" . $res["mid"] . "</td><td>". $res["name"] .  "</td><td>" . $res["credit hours"] .  "</td><td>" . $reso["name"] ."</td><td>" . $reso["u_name"] . "</td><tr>";
  }
  }


  ?>
  <!-- php code end-->
  </tbody>
  </table>
<div class="text-center">

</body>
</html>