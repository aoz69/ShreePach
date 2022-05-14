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
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="timeTable.php" id = "curr">Time Table</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>


<br>
<!-- Goes to editNews page -->
<a href="addTimeTable.php">
  <input  name="submit" value = "Add Time Table" type="submit" id="mes"/> 
  <a href="editTimeTable.php">
  <input  name="submited" value = "Edit Time Table" type="submit" id="mes"/>
  <!-- submit button -->
</a>
<br><br>
<center>

<!-- Table to show the database data -->
<table id = "tabble" class="table">
<thead>
  <tr>
    <th>
      Time
    </th>
    <th>
      MON
    </th>
    <th>
      TUE
    </th>
    <th>
      WED
    </th>
    <th>
      THU
    </th>
    <th>
      FRI
    </th>
    <th>
    Action
    </th>
  </tr>
</thead>

<tbody>

</tbody>

<?php //php code start



 $connection = mysqli_connect("localhost","root",""); //connect database
 $db = mysqli_select_db($connection,"web"); //select database
 $sel = "select * from timttable"; //select table
 $query = mysqli_query($connection, $sel); // run query from connected db
 $data = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query)){  //loop to print all data

    echo "<tr><td>" . $res["Time"]  . "</td><td>" . $res["MON"].  "</td><td>". $res["TUE"]. "</td><td>". $res["WED"]. "</td><td>". $res["THU"]. "</td><td>". $res["FRI"]. "<td><a href= 'deleteTimeTableCode.php?di=$res[id]' id='del'>Remove </td>" . "</td><td>". "<td><a href= 'editTimeTable.php?di=$res[id]' id='edit'>Edit</td>" . "</tr>" ;

}
?>
<!-- php code end-->
</table>
</center>
</body>
</html>


