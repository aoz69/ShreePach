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
            <a class="nav-item nav-link active" href="../Global/index.php" >Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="../Global/message.php">Messages</a>
            <a class="nav-item nav-link" href="../Global/course.php" id="curr">Course</a>
            <a class="nav-item nav-link" href="../Global/grades.php">Grades</a>
            <a class="nav-item nav-link" href="../Global/diary.php">Diary</a>
            <a class="nav-item nav-link" href="../Global/timeTable.php">Time Table</a>
            <a class="nav-item nav-link" href="../Global/logout.php">Logout</a>
            </div>
        </div>
        </nav>
<div class="text-center">
        <h1>Edit Module</h1>
</div>
<input type = " text" id = "new" name = "di" value = "<?php  echo $id; ?>"> </input>
        <br>
        <br>
<?php
    session_start();
    $id = $_GET['di'];
    $_SESSION['getid'] = $id; //fetch id
    $connection = mysqli_connect("localhost","root",""); //connect database
    $db = mysqli_select_db($connection,"web"); //select database
    $sel = "select * from module where mid ='$id'"; //select table
    $fel = 'select * from course';
    $gel = 'select * from user WHERE role = "teacher"';
    $query2 = mysqli_query($connection, $fel); // run query from connected db
    $query3 = mysqli_query($connection, $gel); // run query from connected db
    $query = mysqli_query($connection, $sel); // run query from connected db
    $res = mysqli_fetch_array($query);
?>
<div class="text-center">
    <form action = "editModuleCode.php" method = "post">
        <div class="flex-column">
                <div class="col">
                    <label>Module Name
                    <input type="text" name= "name" class="form-control"  value = "<?php echo $res['name'];?>"></input>
                </div>
                <div class="col">
                    <label>Module credit hours
                    <input type="text" name= "credithours" class="form-control"  value = "<?php echo $res['credit hours'];?>"></input>
                </div><br>
                <div>
                    <label>Course
                        <select name="course_id">
                            <?php       
                            while ($ges = mysqli_fetch_array($query2)){
                                $red = $ges['cid'];
                                echo '<option value ="'. $red.'">' . $ges['name'] . '</option>';
                            }
                            ?>
                        </select>
                </div><br>
                <div>
                    <label>Tutor
                        <select name="staff_id"><?php       
                            while ($tes = mysqli_fetch_array($query3)){
                                $red = $tes['u_id'];
                                echo '<option value ="'. $red.'">' . $tes['u_name'] . '</option>';
                            }
                            ?>
                        </select>
                </div>
                <?php
                ?>
                <br>
                <br>
            <input  type= "submit" name= "submit"  value = "Update"></input>
        </div>
    </form>
</div>
</body>
</html>
