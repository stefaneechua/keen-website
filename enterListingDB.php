<?php
	session_start();

	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}

	// Add new stock listing to the database
	$enter_sql="INSERT INTO listings (name, categoryID, description) VALUES ('".mysqli_real_escape_string($dbconnect, $_SESSION['addListing']['name'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addListing']['categoryID'])."', '".mysqli_real_escape_string($dbconnect, $_SESSION['addListing']['description'])."')";

	$enter_query=mysqli_query($dbconnect, $enter_sql);

	// Unset the addListing session
	unset($_SESSION['addListing']);
?>
<p>New listing has been entered to the database</p>
<p><a href="index.php?page=admin">Back to admin</a></p>
