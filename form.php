<?php  ?>

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
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <script src="https://use.fontawesome.com/48437d1460.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/styles.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/keen_favicon.png">

  </head>

  <body>
    <div class="container-fluid wrapperHome">
      <h2 class="display-3">Register Volunteer</h2>

      <!-- form -->
      <form class="" action="dbserver.php" method="post">

        <div class="container">

          <div class="input-field">
            <label for="username">Username</label>
            <input type="text" name="username" autofocus>
          </div>
          <div class="input-field">
            <label for="contactnum">Contact Number</label>
            <input type="number" name="contactNum">
          </div>
          <div class="input-field">
            <label for="email">Email Address</label>
            <input type="email" name="email">
          </div>
          <div class="input-field">
            <label for="pw">Password</label>
            <input type="password" name="password_1">
          </div>
          <div class="input-field">
            <label for="confirmpw">Confirm Password</label>
            <input type="password" name="password_2">
          </div>
          <div class="input-field">
            <input type="checkbox" name="agreebox" value="termsConditions"> I agree to the terms and conditions.<br />
            <input type="submit" name="submit" value="Register">
          </div>

          <p>Already a volunteer? <a href="login.php">Login Account</a></p>
        </div>
      </form>

    </div>
    <div class="wrapperAbout">

    </div>

  </body>
</html>
