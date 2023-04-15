<?php

?> 
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_navbar.asp -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> About </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="student.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">GradTrak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="student.php">Home</a></li>
        <li><a href="https://www.csub.edu/contact" target="_blank">Contact</a></li>
        <li class="active"><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp -->
<div class="jumbotron">
  <h1>About Us</h1>  
  <br>    
  <p> GradTrak is a web application that allows students to view their academic progress towards graduation. 
    The application will allow students to view their course history, GPA standing, number of units obtained
    so far, and provides a progress bar that gives a visual representation of how close students are to obtaining their 
    degree. 
  </p>
  <p> This application was created by: Shadi Abdul Razzak, Haylee Allen, Justin Ulloa, Tristan Bock</p>
</div>  
<br>
<br>

<!--Source: https://www.w3schools.com/bootstrap/bootstrap_images.asp -->
<!--Source: https://www.w3schools.com/bootstrap/ -->
<div class="container-fluid2 text-center">
  <h2><strong>Developer Team</strong></h2>
  <h4>About Us</h4>
  <br>
  <div class="row">
    <div class="col-xs-6 col-sm-3">
      <div class="carousel-item">
        <img src="user.jpg" alt="Justin">
        <br>
        <h5><strong> Justin Ulloa </strong></h5>
        <p class ="title"> Front-End Developer </p>
        <p> My name is Justin, senior here at CSUB, and I developed the front-end of the application using
          HTML, CSS, Javascript and Bootstrap 3 as the framework to develop the web application. </p>
        <p>Email: julloa6@csub.edu</p>
        <div class = "contact"> 
          <a href="mailto:julloa6@csub.edu">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-3">
      <div class="carousel-item">
        <img src="user.jpg" alt="Tristan">
        <br>
        <h5><strong>Tristan Bock </strong></h5>
        <p class ="title"> jhabxjhsbdj </p>
        <p>kjdcnkdj cnkdsjcnd sklcndlsn clsdkncdskc ndksncdlkjnck jdnckjdnckd jncdkjc ndkjcn jdsbcjdb jsbcjdb
          kjfnkfjnv kjfnvkjfnv kjfnvkjf kjfnvkjfnv kjfnvkjf kfjnvkjf kjfnv
        </p>
        <p>Email: tbock@csub.edu</p>
        <div class = "contact"> 
          <a href="mailto:tbock@csub.edu">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3">
      <div class="carousel-item">
        <img src="user.jpg" alt="Shadi">
        <br>
        <h5><strong>Shadi Abdul Razzak </strong></h5>
        <p class ="title"> jhabxjhsbdj </p>
        <p>vjdcnkdj cnkdsjcnd sklcndlsn clsdkncdskc ndksncdlkjnck jdnckjdnckd jncdkjc ndkjcn jdsbcjdb jsbcjdb
          kjfnkfjnv kjfnvkjfnv kjfnvkjf kjfnvkjfnv kjfnvkjf kfjnvkjf kjfnv</p>
        <p>Email: sabdul-razzak@csub.edu</p>
        <div class = "contact"> 
          <a href="mailto:sabdul-razzak@csub.edu">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-3">
      <div class="carousel-item">
        <img src="user.jpg" alt="Haylee">
        <br>
        <h5><strong>Haylee Allen</strong></h5>
        <p class ="title"> jhabxjhsbdj </p>
        <p>jdcnkdj cnkdsjcnd sklcndlsn clsdkncdskc ndksncdlkjnck jdnckjdnckd jncdkjc ndkjcn jdsbcjdb jsbcjdb
          kjfnkfjnv kjfnvkjfnv kjfnvkjf kjfnvkjfnv kjfnvkjf kfjnvkjf kjfnv</p>
        <p>Email: hallen5@csub.edu</p>
        <div class = "contact"> 
          <a href="mailto:hallen5@csub.edu">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
</div>
<br>
<!-- FEATURETTES -->
<!-- Featurette 1 -->
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_theme_company.asp -->
<div class="container featurette">
  <div class="row">
    <div class="col-md-7">
      <h2 class="featurette-heading">Responsive. <span class="text-muted">Adjusts to all screens!</span></h2>
      <br>
      <p class="lead">GradTrak is a responsive web application that uses Bootstrap 3 to adjust the layout
        of all its content no matter what device a student decides to use! E.g (Mobile device, laptop, desktop, tablet). </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="responsive.jpg" alt="Responsive">
    </div>
  </div>
</div>
<hr class="featurette-divider">
<!-- Featurette 2 -->
<div class="container featurette">
  <div class="row">
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="progress.jpg" alt="Progress">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Academic Tracking. <span class="text-muted">Easily track your progress!</span></h2>
      <br>
      <p class="lead">Our unique academic tracking application allows students to monitor their academic progress by providing a dynamic 
        progress bar, current GPA, total # of units, and displays completed & remaining courses. GradTrak makes it easy for students to stay on track 
        towards graduation by providing student's information all in one place.  </p>
    </div>
  </div>
</div>
<hr class="featurette-divider">
<!-- Featurette 3 -->
<div class="container featurette">
  <div class="row">
    <div class="col-md-7">
      <h2 class="featurette-heading">Career Resources. <span class="text-muted">Discover tools to help you succeed!</span></h2>
      <br>
      <p class="lead">GradTrak provides job & internship resources to help find the right place for you, as well as resume builders/templates
        sources to help you create a professional resume. We also provide resources that can polish your interview skills to help you land your 
        dream job! 
      </p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive center-block" src="career.jpg" alt="Career Resources">
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<footer class="footer-bottom">
  <p1>GradTrak © 2023 </p1>
</footer>
</body>
</html>
