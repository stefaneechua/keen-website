<?php
$servername = "localhost";
$username = "stefanee";
$password = "panda";
$db = "keendb";

// Create connection
$dbconnect = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$dbconnect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
