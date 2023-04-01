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
  <!-- Source: https://www.w3schools.com/bootstrap/bootstrap_collapse.asp -->
  <script>
    $(document).ready(function() {
    $('[data-toggle="collapse"]').on('click', function() {
      $(this).find('.arrow').toggleClass('up');
      });
    });
  </script>
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
<br>
<br>
<br>
<br>  
<div class="container major-requirements">
  <h3>Welcome "Student Name Here"</h3>
  <br>
  <!-- Animated progress bar -->
  <!-- Source: https://www.w3schools.com/bootstrap/bootstrap_progressbars.asp -->
    <h4>Major Requirements Completed: </h4>
    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
        70% Complete
        </div>
    </div>
    <br>
    <br>
</div>
<div class="container student-info">
  <h3>Student Information</h3>
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Major</th>
        <th>Graduation Date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123456789</td>
        <td>John Doe</td>
        <td>Computer Science</td>
        <td>May 2022</td>
      </tr>
    </tbody>
  </table>
</div>
<!--Make a collapsible that displays student course history -->
<!-- Source: https://www.w3schools.com/bootstrap/bootstrap_collapse.asp -->

<div class="container">
  <h3>Required Courses</h3>
  <a href="#demo1" class="btn btn-custom-collapsible" data-toggle="collapse">Required Courses
    <span class="arrow glyphicon glyphicon-chevron-down"></span>
  </a>
  <div id="demo1" class="collapse">
    <table class="table table-striped custom-bordered custom-thead">
      <thead>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Grade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CS101</td>
          <td>Introduction to Computer Science</td>
          <td>A</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
        <tr>
          <td>MATH201</td>
          <td>Calculus I</td>
          <td>B+</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
        <tr>
          <td>ENGL101</td>
          <td>Composition and Rhetoric</td>
          <td>B</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
      </tbody>
    </table>
  </div>
  <h3>Completed Courses</h3>
  <a href="#demo2" class="btn btn-custom-collapsible" data-toggle="collapse">Completed Courses
    <span class="arrow glyphicon glyphicon-chevron-down"></span>
  </a>
  <div id="demo2" class="collapse">
    <table class="table table-striped custom-bordered custom-thead">
      <thead>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Grade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CS101</td>
          <td>Introduction to Computer Science</td>
          <td>A</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
        <tr>
          <td>MATH201</td>
          <td>Calculus I</td>
          <td>B+</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
        <tr>
          <td>ENGL101</td>
          <td>Composition and Rhetoric</td>
          <td>B</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
      </tbody>
    </table>
  </div>
  <h3>Remaining Courses</h3>
  <a href="#demo3" class="btn btn-custom-collapsible" data-toggle="collapse">Remaining Courses
    <span class="arrow glyphicon glyphicon-chevron-down"></span>
  </a>
  <div id="demo3" class="collapse">
    <table class="table table-striped custom-bordered custom-thead">
      <thead>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Grade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CS101</td>
          <td>Introduction to Computer Science</td>
          <td>N/A</td>
          <td style="color: red;">&#x2718;</td>
        </tr>
        <tr>
          <td>MATH201</td>
          <td>Calculus I</td>
          <td>N/A</td>
          <td style="color: red;">&#x2718;</td>
        </tr>
        <tr>
          <td>ENGL101</td>
          <td>Composition and Rhetoric</td>
          <td>N/A</td>
          <td style="color: red;">&#x2718;</td>
        </tr>
      </tbody>
    </table>
  </div>
  <h3>Course History</h3>
  <a href="#demo4" class="btn btn-custom-collapsible" data-toggle="collapse">Course History
    <span class="arrow glyphicon glyphicon-chevron-down"></span>
  </a>
  <div id="demo4" class="collapse">
    <table class="table table-striped custom-bordered custom-thead">
      <thead>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Grade</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>CS101</td>
          <td>Introduction to Computer Science</td>
          <td>A</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
        <tr>
          <td>MATH201</td>
          <td>Calculus I</td>
          <td>B+</td>
          <td style="color: red;">&#x2718;</td>
        </tr>
        <tr>
          <td>ENGL101</td>
          <td>Composition and Rhetoric</td>
          <td>B</td>
          <td style="color: green;">&#x2714;</td>
        </tr>
      </tbody>
    </table>
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
