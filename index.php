
<?php
  include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Keen Web App">
    <meta name="author" content="Stefanee Chua">

    <title>Keen</title>

    <!-- Bootstrap -->
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <script src="https://use.fontawesome.com/48437d1460.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/keen_favicon.png">
  </head>

  <body>

    <div class="wrapperHome">
      <?php
        include ('navbar.php');
      // check to see if user is visiting a page other than home
      if (!isset($_GET['page'])) {
        include ('home.php');
      } else {
        $page = $_GET['page'];
			  include ('$page.php');
      }

        ?>

      <?php
        include ('home.php'); ?>

    <?php
      include ('footer.php'); ?>

  </body>
</html>
