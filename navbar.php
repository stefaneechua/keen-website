
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;">keen.</a>
    </div>
    <div class="navigation">
      <?php
        $cat_sql = "SELECT * FROM category";
        $cat_query = mysqli_query ($dbconnect, $cat_sql);
        $cat_res = mysqli_fetch_assoc ($cat_query);
       ?>

       <ul class="nav navbar-nav">
       <?php
        do  { ?>
          <a href="category.php?categoryID=<?php echo $cat_res['categoryID']; ?>"><?php echo $cat_res['name']; ?></a>

          <?php
          } while ($cat_res = mysqli_fetch_assoc ($cat_query))
        ?>
      </ul>

    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
    </ul>
  </div>
</nav>
