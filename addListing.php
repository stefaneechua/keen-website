<div class="container wrapperAddListings">

<?php
  session_start();

  // checks to see if user / admin is logged in. If not, redirect to login page.
  if(!isset($_SESSION['admin'])) {
    header("Location:index.php");
  }
  if(!isset($_SESSION['addListing'])) {
    $_SESSION['addListing']['name'] = "";
    $_SESSION['addListing']['categoryID'] = "1";
    $_SESSION['addListing']['description'] = "";
  }

 ?>

 <div class="maincontent">
  <p><a href="index.php?page=admin">Back to admin panel</a></p>
  <h1>Enter details for new listing:</h1>
  <form method="post" action="index.php?page=addListingConfirm" enctype="multipart/form-data">
    <p>Listing Name: <input type="text" name="name" value="<?php echo $_SESSION['addListing']['name']; ?>" /></p>
    <p>Category: <select name="categoryID">
			<?php $catlist_sql="SELECT * FROM category";
				$catlist_query=mysqli_query($dbconnect, $catlist_sql);
				$catlist_rs=mysqli_fetch_assoc($catlist_query);

        // displays the category names as options from dropdown list
				do { ?>
					<option value="<?php echo $catlist_rs['categoryID']; ?>"
					<?php
            if($catlist_rs['categoryID']==$_SESSION['addListing']['categoryID']) {
              echo "selected=selected";
            }
					?>
					><?php echo $catlist_rs['name']; ?></option>
				<?php }	while ($catlist_rs=mysqli_fetch_assoc($catlist_query));
		    ?></select>

      <p>Description: <textarea name="description" cols=60 rows=5><?php echo $_SESSION['addListing']['description']; ?></textarea></p>

    <input type="submit" name="submit" value="Submit" />
  </form>

 </div>

</div>
