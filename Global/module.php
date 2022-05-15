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
      <a class="nav-item nav-link" href="../Global/course.php" id = "curr">Course</a>
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="timeTable.php" >Time Table</a>
      <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<center>
<h1>Modules</h1>
</center>


<?php 
  session_start();
if($_SESSION['role'] == "admin") { ?>
    <a href="../AddPage/addModule.php">
    <input   class="btn btn-light" name="submit" value = "Add Module" type="submit" id="mes"/> 
    </a>
  <?php
  }?>

<br><br>
<center>

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
    echo "<tr><td>" . $res["mid"] . "</td><td>". $res["name"] .  "</td><td>" . $res["credit hours"] .  "</td><td>" . $reso["name"] ."</td><td>" . $reso["u_name"] .  "</td></tr>" ;
  }
}

else{
  while($res = mysqli_fetch_array($query)){  //loop to print all data
    $reso = mysqli_fetch_array($query2);
    echo "<tr><td>" . $res["mid"] . "</td><td>". $res["name"] .  "</td><td>" . $res["credit hours"] .  "</td><td>" . $reso["name"] ."</td><td>" . $reso["u_name"] .  "</td></tr>" ;
  }
}



?>
<!-- php code end-->
</tbody>
</table>
</center>

</body>
</html>