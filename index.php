<!DOCTYPE html>

<?php  ?>


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
      <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color:white;">keen.</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#">Central</a></li>
            <li><a href="#">East</a></li>
            <li><a href="#">West</a></li>
            <li><a href="#">South</a></li>
            <li><a href="#">North</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
          </ul>
        </div>
      </nav>

      <div class="wrapperBG container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="display-1 keenHeader">
              Ready to<br>gain some<br>experience?<br>
              </h1>
              <h2 class="display-1 keenHeader2">keen.</h2>
            </div>
            <div class="col-lg-6 keenImg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapperContact container-fluid">
      <div class="container">
        <div class="row">
          <!-- Map -->
          <div class="col-md-6">
            <div class="map">
              <iframe     src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d461.0510800857183!2d174.76501101033392!3d-36.855586170248294!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfc25d1a9573b373d!2sEDENZ+Colleges!5e0!3m2!1sen!2snz!4v1515709834311" width="500" height="470" frameborder="0" style="border:0" allowfullscreen>
              </iframe>
            </div>
          </div>
          <!-- Contact Form -->
          <div class="col-md-6 text-center contact">
            <form id="contactForm" action="index.php" method="post">
              <h3>Get in touch</h3>
              <fieldset>
                <input placeholder="Full Name" type="text" tabindex="1" required>
              </fieldset>
              <fieldset>
                <input placeholder="Email Address" type="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Contact Number" type="tel" tabindex="3" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Message" tabindex="4" required></textarea>
              </fieldset>
              <fieldset>
                <button name="submit" type="submit" id="contact-submit">Send</button>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Stefanee Chua &nbsp; | &nbsp; &copy; 2018</p>
            <p class="keenFooter">keen.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  		  		<div class="social">
  		  			<ul class="list-inline social-icons text-center">
  		  				<li><a href="https://www.behance.net/stefaneechua">
  		  					<i class="fa fa-behance fa-lg"></i>
  		  				</a></li>
  		  				<li><a href="https://www.instagram.com/stefaneeux">
  		  					<i class="fa fa-instagram fa-lg"></i>
  		  				</a></li>
  		  				<li><a href="http://bit.ly/2xDn5Ok">
  		  					<i class="fa fa-youtube-play fa-lg"></i>
  		  				</a></li>
  		  				<li><a href="https://linkedin.com/in/stefaneechua">
  		  					<i class="fa fa-linkedin fa-lg"></i>
  		  				</a></li>
  		  			</ul>
  		  		</div>
  		  	</div>
        </div>
      </div>
    </footer>

  </body>
</html>
