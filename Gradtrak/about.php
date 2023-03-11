<?php

?> 
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_navbar.asp -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Contact </title>
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
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp -->
<div class="container">
  <div class="jumbotron">
    <h1>About Us</h1>      
    <p> This application will be used by students to track their progress towards graduation. 
      The application will also be used by advisors to help students plan their courses and 
      to help students understand their degree requirements here at CSUB. </p>
    <P> This application was created by: Shadi Abdul Razzak, Haylee Allen, Justin Ulloa, Tristan Bock</P>

  </div>  
</div>
<br>
<br>
<div class="container-fluid2 text-center">
  <h2>Team Members</h2>
  <h4>About Us</h4>
  <div class="row text-center">
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="user.jpg" alt="Justin">
        <p><strong>Justin Ulloa</strong></p>
        <p> My name is Justin, senior here at CSUB, and I developed the front-end of the application </p>
        <br>
        <div class = "contact"> 
          <a href="mailto:julloa6@csub.edu">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="user.jpg" alt="Tristan">
        <p><strong>Tristan Bock </strong></p>
        <p>kjdcnkdj cnkdsjcndsklcndlsn clsdkncdskc ndksncdlkjnck jdnckjdnckd jncdkjc ndkjcn</p>
        <br>
        <div class = "contact"> 
          <a href="mailto:">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="user.jpg" alt="Shadi">
        <p><strong>Shadi Abdul Razzak </strong></p>
        <p>jkabcjhd bcjhdabcajc bkacbj akbc ajdcbjacbajccbk bcjkacbjdscbjd scjjksnckjc</p>
        <br>
        <div class = "contact"> 
          <a href="mailto:">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="user.jpg" alt="Haylee">
        <p><strong>Haylee Allen</strong></p>
        <p>kjdnckdj ncdkcndk jcndklcn ldkanckdn knckdjncdjk ncdkjncjdkc ndkjcndkjcn kdjncdjnk</p>
        <br>
        <div class = "contact"> 
          <a href="mailto:">Contact</a>
            <span class="glyphicon glyphicon-envelope"></span>
          </a>
        </div>
      </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<footer>
  <h3> Copyright Disclaimer </h3>
</footer>
</body>
</html>
