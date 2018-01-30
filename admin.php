<?php

  include("dbconnect.php");
  session_start();

  // check to see if user clicks Logout
  if(isset($_GET['logout'])) {
    unset($_SESSION['admin']);
  }

  // if login form has been submitted, check if username and password is correct
  if(isset($_POST['login'])) {
    $login_sql="SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
    $login_query=mysqli_query($dbconnect, $login_sql);
    if(mysqli_num_rows($login_query)>0) {
      $login_res=mysqli_fetch_assoc($login_query);
      $_SESSION['admin'] = $login_res['username'];
    }
  }
?>

<?php
  if(isset($_SESSION['admin'])) {
    include("adminpanel.php");
  } else {
    include ("adminlogin.php");
  }
 ?>
