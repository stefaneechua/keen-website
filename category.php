<!-- Main CSS -->
<link rel="stylesheet" href="css/styles.css" />
<div class="container wrapperListings">

<?php

  // Checks to see if the categoryID is set. If not, redirect to homepage.
  if(!isset($_GET['categoryID'])) {
    header ("Location:index.php");
  }

  // Select all listings belonging to the selected categoryID
  $listings_sql = "SELECT listings.listingID, listings.name, listings.description, category.name AS catname FROM listings JOIN category ON listings.categoryID=category.categoryID WHERE listings.categoryID=".$_GET['categoryID'];
  if($listings_query=mysqli_query($dbconnect, $listings_sql)) {
    $listings_res=mysqli_fetch_assoc($listings_query);
  }

  if(mysqli_num_rows($listings_query)==0) {
    echo "Sorry, there are no current listings available.";
  } else {
    echo "<h1>".$listings_res["catname"]."</h1>" . "<br>";
    do {
    echo "<div class='item'>".$listings_res['name']."</br>"."* ".$listings_res['description']."</div>"."<br>";
  } while ($listings_res = mysqli_fetch_assoc($listings_query));
  }

?>﻿
</div>
