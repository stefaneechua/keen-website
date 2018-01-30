
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:white;">keen.</a>
    </div>
    <ul class="nav navbar-nav">
      <?php
        include ('categoryList.php');
      ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php?page=admin"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>
