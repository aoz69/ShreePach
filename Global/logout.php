<?php
session_start(); // session start
session_unset(); //ends session
header("Location:login.php"); //redirects to login page
?>