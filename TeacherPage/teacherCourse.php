<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<style>
 /* #tabble {
   text-align: center;
   font-size: xx-large;
   border-collapse:separate; 
   border-spacing: 2px 2px; 
 }*/

 #tabble tr:nth-child(even) {
    background-color: grey;
    color: white;
  }*/

/* 
  tr, td {
  border: 2px solid black;
  font-weight: bold;
  } */

  #del{
    background-color: white;
    color: brown;
    text-decoration: none;
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
      <a class="nav-item nav-link" href="../AdminPage/course.php" id = "curr">Course</a>
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>


<br><br>


<?php 
  session_start();
  echo $_SESSION['username'];
  if($_SESSION['username'] == $check['username']){?>
  <a href="addCourse.php">
  <input  name="submit" value = "Add Course" type="submit" id="mes"/> 
  <!-- submit button -->
  </a>

  <?php
}
?>


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
      Course name
    </th>
    <th>
      Duration
    </th>

  </tr>
</thead>

<tbody>

</tbody>

<?php //php code start

 $connection = mysqli_connect("localhost","root",""); //connect database 
 $db = mysqli_select_db($connection,"web"); //select database 
 $sel = "select * from course"; //select table 
 $query = mysqli_query($connection, $sel); // run query from connected db
 $data = mysqli_num_rows($query);

  while($res = mysqli_fetch_array($query)){  //loop to print all data
    echo "<tr><td>" . $res["cid"] . "</td><td>". $res["name"] . "</td><td>" . $res["credit hours"]. "<td></td>". "</td></tr>" ;
}
?>
</table>
</center>
</body>
</html>