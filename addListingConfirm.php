<div class="container wrapperAddListings">

<?php
  session_start();

  // checks to see if user / admin is logged in. If not, redirect to login page.
  if(!isset($_SESSION['admin'])) {
    header("Location:index.php");
  }

  if(isset($_POST['submit'])) {
    $_SESSION['addListing']['name']=$_POST['name'];
    $_SESSION['addListing']['categoryID']=$_POST['categoryID'];
    $_SESSION['addListing']['description']=$_POST['description'];
  } else {
    header("Location:index.php");
  }

 ?>

 <div class="maincontent">
				<p><a href="index.php?page=admin">Back to admin</a></p>
				<h1>Confirm listing details:</h1>
				<p>Name: <?php echo $_SESSION['addListing']['name']; ?></p>
				<p>Category:
				<?php
					$catname_sql="SELECT name FROM category WHERE categoryID=".$_SESSION['addListing']['categoryID'];
					$catname_query=mysqli_query($dbconnect, $catname_sql);
					$catname_rs=mysqli_fetch_assoc($catname_query);
					echo $catname_rs['name'];

				?>
				</p>
				<p>Description: <?php echo $_SESSION['addListing']['description']; ?></p>


		</div>


    <p><a href="index.php?page=addListing">Go back</a> &nbsp; <a href="index.php?page=addListingToDB">Confirm</a></p>

</div>
