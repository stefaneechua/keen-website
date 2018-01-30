<?php

  include("dbconnect.php");
  session_start();

  // checks to see if user / admin is logged in. If not, redirect to login page.
  if(!isset($_SESSION['admin'])) {
    header("Location:index.php?page=admin");
  }

  // checks to see if the user / admin has submitted the add listing form
  if(!isset($_POST['submit'])) {
    header("Location:index.php?page=admin");
  }

  // Add new listing to database
  $newlisting_sql = "INSERT INTO listings (name) VALUES ('".mysqli_real_escape_string($dbconnect, $_POST['name'])."')";
  $newlisting_query = mysqli_query ($dbconnect, $newlisting_sql);
 ?>

 <p>New listing has been added</p>
 <p><a href="index.php?page=admin">Admin Panel</a></p>
