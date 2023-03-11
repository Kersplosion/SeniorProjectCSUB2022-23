<?php

?>
<!--Source: https://www.w3schools.com/bootstrap/bootstrap_navbar.asp -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Student </title>
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout </a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome "Student Name Here"</h3>
  <br>
  <!-- Animated progress bar -->
  <!-- Source: https://www.w3schools.com/bootstrap/bootstrap_progressbars.asp -->
    <h4>Major Requirements Completed: </h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:70%">
        70% Complete
        </div>
    </div>
    <br>
    <p> Add functionality here</p>
</div>
<footer>
  <h3> Copyright Disclaimer </h3>
</footer>
</body>
</html>
