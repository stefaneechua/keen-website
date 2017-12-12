<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Keen - Register Profile</title>
  </head>

  <body>

    <h2>Volunteer Registration</h2>
    <form class="" action="regdb.php" method="post">
      <div class="container">

        <label for="firstname">First Name</label>
        <input type="text" name="firstname" autofocus>

        <label for="lastname">Last Name</label>
        <input type="text" name="lastname">

        <label for="contactnum">Contact Number</label>
        <input type="number" name="contactnum">

        <label for="email">Email Address</label>
        <input type="email" name="email">

        <label for="pw">Password</label>
        <input type="password" name="pw">

        <label for="confirmpw">Confirm Password</label>
        <input type="password" name="confirmpw">

        <input type="submit" name="submit" value="Register">
      </div>
    </form>

  </body>
</html>
