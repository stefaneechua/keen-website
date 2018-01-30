<?php

  include("dbconnect.php");
  session_start();

  // checks to see if user / admin is logged in. If not, redirect to login page.
  if(!isset($_SESSION['admin'])) {
    header("Location:index.php?page=admin");
  }
 ?>

<h1>Add Listing</h1>
<form action="index.php?page=listingAddSelect" method="post">
  <p><input type="text" name="name" size="40" maxlength="50" /></p>
  <p><input type="submit" name="submit" value="Add Listing" /></p>
</form>
