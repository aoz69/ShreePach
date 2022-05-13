<!DOCTYPE html>
<html lang="en">
<head>
<!-- CSS -->
<style>
 #tabble {
   text-align: center;
   font-size: xx-large;
   border-collapse:separate; 
   border-spacing: 2px 2px; 
 }

 #tabble tr:nth-child(even) {
    background-color: #707070;
    color: white;
  }

  tr, td {
  border: 2px solid black;
  font-weight: bold;
  }

  #del{
    background-color: white;
    color: brown;
    text-decoration: none;
  }

  #del:hover{
    background-color: brown;
    color: white;
    font-weight: bold;
  }

  #mes{
    margin-left: 20px
  }

  th {
    color: red;
  
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
    <a class="nav-item nav-link active" href="./indexStudent.php" id = "color">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="messageStudent.php">Messages</a>
      <a class="nav-item nav-link" href="courseStudent.php">Course</a>
      <a class="nav-item nav-link" href="gradesStudent.php">Grades</a>
      <a class="nav-item nav-link" href="diaryStudent.php">Diary</a>
      <a class="nav-item nav-link" href="../logout.php">Logout</a>
    </div>
  </div>
</nav>

<?php
//start session
session_start();
?>

<br>

</a>
<br><br>
<center>

<!-- Table to show the database data -->
<table id = "tabble">
<thead>
  <tr>
    <th>
      ID
    </th>
    <th>
      Course Name
    </th>
    <th>
      Credit Hours
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
    echo "<tr><td>" . $res["cid"] . "</td><td>". $res["name"] . "</td><td>" . $res["credit hours"]. "</td></tr>" ;
}
?>
<!-- php code end-->
</table>
</center>
</body>
</html>