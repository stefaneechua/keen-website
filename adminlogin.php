<div class="col-md-6 text-center contact">
<form id="contactForm" action="index.php?page=admin" method="post">
  <h3>Admin Login</h3>
  <fieldset>
    <p>Username:<input name="username" type="text" maxlength="20" required /></p>
  </fieldset>
  <fieldset>
    <p>Password:<input name="password" type="password" maxlength="20" required /></p>
  </fieldset>

  <?php
    if(isset($_POST['login']) && !isset($_SESSION['admin'])) {
      echo "Incorrect username or password";
    }
   ?>

  <fieldset>
    <button name="login" type="submit" id="contact-submit">Login</button>
  </fieldset>
</form>
