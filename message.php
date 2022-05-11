<!DOCTYPE html>
<html lang="en">
<head>

<style>
 #tabble {
   text-align: center;
   font-size: xx-large;
   border-collapse:separate; 
  /* border-spacing: 70px 0; */
 }

 #tabble, th, td {
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
      <a class="nav-item nav-link active" href="index.php" id = "color">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="message.php">Messages</a>
      <a class="nav-item nav-link" href="course.php">Course</a>
      <a class="nav-item nav-link" href="grades.php">Grades</a>
      <a class="nav-item nav-link" href="diary.php">Diary</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<?php

session_start();
?>

<br>
<!-- Goes to editNews page -->
<a href="editMessage.php">
  <input  name="submit" value = "Add new messages" type="submit" id="mes"/>
</a>
<br><br>
<center>
<table id = "tabble">
<thead>
  <tr>
    <th>
      S.N
    </th>
    <th>
      Headings
    </th>
    <th>
      Message
    </th>
    <th>
    Action
    </th>
  </tr>
</thead>

<tbody>

</tbody>

<?php

 $connection = mysqli_connect("localhost","root",""); //connect database
 $db = mysqli_select_db($connection,"web");
 $sel = "select * from announcement";
 $query = mysqli_query($connection, $sel);
 $data = mysqli_num_rows($query);

  while($res = mysqli_fetch_array($query)){
    echo "<tr><td>" . $res["id"] . "</td><td>". $res["Heading"] . "</td><td>" . $res["Message"]. "<td><a href= 'deleteMessage.php?di=$res[id]' id='del'>Remove </td>". "</td></tr>" ;
}
?>
</table>


</center>
</body>
</html>