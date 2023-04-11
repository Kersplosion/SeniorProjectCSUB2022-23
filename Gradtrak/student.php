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
<br>
<br>
<!--Accordion that displays student course history -->
<!-- Source: https://www.w3schools.com/bootstrap/bootstrap_collapse.asp -->
<!-- General Education Requirements -->
<div class="container">
    <div class="panel-group" id="genEdAccordion">
      <!-- General Education Requirements -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#generalEducation">General Education Requirements
              <span class="arrow glyphicon glyphicon-chevron-down"></span>
            </a>
          </h4>
        </div>
        <div id="generalEducation" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="panel-group" id="generalEducationAccordion">
              <!-- Foundational Skills -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#foundationalSkills">Foundational Skills
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="foundationalSkills" class="panel-collapse collapse">
                  <div class="panel-body">
                    <!-- Add table for foundational skills courses here -->
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>COMM 1088</td>
                            <td>Communication</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>ENGL 1109</td>
                            <td>Writing and Research</td>
                            <td>3</td>
                            <td>B+</td>
                            <td style="color: red;">&#x2718;</td>
                          </tr>
                          <tr>
                            <td>PHIL 1019</td>
                            <td>Critical Thinking</td>
                            <td>3</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>Math 1050</td>
                            <td>Precalc 1</td>
                            <td>4</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                    </table>
                   </div>
                </div>
                </div>
              <!-- Natural Sciences -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#naturalSciences">Natural Sciences
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="naturalSciences" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>PHYS 2210</td>
                            <td>Calc-Based Physics</td>
                            <td>4</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- American Institutions -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#americanInstitutions">American Institutions
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="americanInstitutions" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>PLSI 1018</td>
                            <td>American Governement & Politics</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>HIST 1228</td>
                            <td>Survey of US History</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- Arts and Humanitites -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#artsAndHumanities">Arts and Humanities
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="artsAndHumanities" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>MATH2010</td>
                            <td>Calculus I</td>
                            <td>4</td>
                            <td>B+</td>
                            <td style="color: red;">&#x2718;</td>
                          </tr>
                          <tr>
                            <td>ENGL 1208</td>
                            <td>Introduction to Literature</td>
                            <td>3</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- Student Enrichment and Lifelong Fullfillment (SELF) -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#self">Student Enrichment and Lifelong Fullfillment (SELF)
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="self" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>KINE 1018</td>
                            <td>Lifetime Fitness</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- Junior Year Diversity Reflection (JYDR) -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#jydr">Junior Year Diversity Reflection (JYDR)
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="jydr" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>PHIL 3548</td>
                            <td>Race, Class, Gender, Sexuality</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- Graduation Writing Assessment Requirement (GWAR) -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#gwar">Graduation Writing Assessment Requirement (GWAR)
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="gwar" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>ENGL 3109</td>
                            <td>Modes of Writing</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
              <!-- Capstone -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#generalEducationAccordion" href="#capstone">Capstone
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="capstone" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead>
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>CMPS 4928</td>
                            <td>Senior Project II</td>
                            <td>2</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Major Requirements -->
<div class="container">
    <div class="panel-group" id="majorRequirementsAccordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#majorRequirementsAccordion" href="#majorRequirements">Major Requirements <span class="arrow glyphicon glyphicon-chevron-down"></span></a>
          </h4>
        </div>
        <div id="majorRequirements" class="panel-collapse collapse">
          <div class="panel-body">
            <div class="panel-group" id="majorRequirementsInnerAccordion">
              <!-- Lower Division Courses -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#majorRequirementsInnerAccordion" href="#lowerDivision">Lower Division Core 
                        <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="lowerDivision" class="panel-collapse collapse">
                  <div class="panel-body">
                    <!-- Add table for lower division courses here -->
                    <table class="table table-striped custom-bordered custom-thead">
                      <thead class="custom-thead">
                        <tr>
                          <th>Course ID</th>
                          <th>Course Name</th>
                          <th>Units</th>
                          <th>Grade</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>CMPS 2010</td>
                          <td>Programming Fundamentals</td>
                          <td>4</td>
                          <td>A</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>CMPS 2020</td>
                          <td>Data Structures and Algorithms</td>
                          <td>4</td>
                          <td>B+</td>
                          <td style="color: red;">&#x2718;</td>
                        </tr>
                        <tr>
                          <td>CMPS 2120</td>
                          <td>Discrete Structures</td>
                          <td>4</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>CMPS 2240</td>
                          <td>Computer Architecture 1</td>
                          <td>4</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Upper Division Courses -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#majorRequirementsInnerAccordion" href="#upperDivision">Upper Division Core 
                      <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="upperDivision" class="panel-collapse collapse">
                  <div class="panel-body">
                    <!-- Add table for upper division courses here -->
                    <table class="table table-striped custom-bordered custom-thead">
                        <thead class="custom-thead">
                          <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                            <th>Units</th>
                            <th>Grade</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>CMPS 3120</td>
                            <td>Algorithm Analysis</td>
                            <td>3</td>
                            <td>A</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3140</td>
                            <td>Theory of Computation</td>
                            <td>3</td>
                            <td>B+</td>
                            <td style="color: red;">&#x2718;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3240</td>
                            <td>Computer Architecture II</td>
                            <td>4</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3350</td>
                            <td>Software Engineering</td>
                            <td>4</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3420</td>
                            <td>Database Systems</td>
                            <td>4</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3500</td>
                            <td>Programming Languages</td>
                            <td>3</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3560</td>
                            <td>Artificial Intelligence</td>
                            <td>3</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3600</td>
                            <td>Operating Systems</td>
                            <td>4</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3620</td>
                            <td>Computer Networks</td>
                            <td>4</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 3640</td>
                            <td>Distributed and Parallel Computation</td>
                            <td>3</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 4910 </td>
                            <td>Senior Project I</td>
                            <td>2</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                          <tr>
                            <td>CMPS 4920</td>
                            <td>Senior Project II</td>
                            <td>2</td>
                            <td>B</td>
                            <td style="color: green;">&#x2714;</td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Upper Division Electives -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#majorRequirementsInnerAccordion" href="#upperElectives">Upper Division Electives 
                        <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="upperElectives" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                      <thead class="custom-thead">
                        <tr>
                          <th>Course ID</th>
                          <th>Course Name</th>
                          <th>Units</th>
                          <th>Grade</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>CMPS 4480</td>
                          <td>Computer Animation</td>
                          <td>4</td>
                          <td>A</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>CMPS 4490</td>
                          <td>Game Devolopment</td>
                          <td>4</td>
                          <td>B+</td>
                          <td style="color: red;">&#x2718;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Cognative Requirements -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#majorRequirementsInnerAccordion" href="#cogRequirements">Cognative Requirements 
                        <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="cogRequirements" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                      <thead class="custom-thead">
                        <tr>
                          <th>Course ID</th>
                          <th>Course Name</th>
                          <th>Units</th>
                          <th>Grade</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>MATH 2510</td>
                          <td>Calculus I</td>
                          <td>4</td>
                          <td>A</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>Math 2520</td>
                          <td>Calculus II</td>
                          <td>4</td>
                          <td>B+</td>
                          <td style="color: red;">&#x2718;</td>
                        </tr>
                        <tr>
                          <td>MATH 3200</td>
                          <td>Probability Theory</td>
                          <td>3</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>PHYS 2210</td>
                          <td>Physics I</td>
                          <td>4</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>PHYS 2220</td>
                          <td>Physics II</td>
                          <td>4</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>Math/Science Elective</td>
                          <td>Physics III</td>
                          <td>4</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>PHIL 3310</td>
                          <td>Professional Ethics</td>
                          <td>3</td>
                          <td>B</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Additional Units -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#majorRequirementsInnerAccordion" href="#addUnits">Additional Units 
                        <span class="arrow glyphicon glyphicon-chevron-down"></span>
                    </a>
                  </h4>
                </div>
                <div id="addUnits" class="panel-collapse collapse">
                  <div class="panel-body">
                    <table class="table table-striped custom-bordered custom-thead">
                      <thead class="custom-thead">
                        <tr>
                          <th>Course ID</th>
                          <th>Course Name</th>
                          <th>Units</th>
                          <th>Grade</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Math 1500</td>
                          <td>PreCalc I</td>
                          <td>4</td>
                          <td>A</td>
                          <td style="color: green;">&#x2714;</td>
                        </tr>
                        <tr>
                          <td>MATH 1600</td>
                          <td>PreCalc II</td>
                          <td>4</td>
                          <td>B+</td>
                          <td style="color: red;">&#x2718;</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<!-- Career Section -->
<section id="career-section">
  <div class="container">
    <h3 class="career-title">Career Resources</h3>
    <div class="row">
      <div class="col-md-4 career-box">
        <h3>Job Sites</h3>
        <p> Looking for a job? Try out these job sites to find your next opportunity: </p>
        <ul>
          <li><a href="https://www.indeed.com" target = "_blank"> Indeed </a> - Search for jobs & internships </li>
          <li><a href="https://www.linkedin.com" target = "_blank"> Linkedin </a> - Search for jobs, internships & build connections </li>
          <li><a href="https://www.glassdoor.com" target = "_blank"> Glassdoor </a> - Search for jobs & competitive salaries </li>
          <li><a href="https://www.dice.com" target = "_blank"> Dice </a> - Search for jobs in tech </li>
          <li><a href="https://www.usajobs.gov." target = "_blank"> USAJobs </a> - Search for jobs in the U.S. government </li>
        </ul>
      </div>
      <div class="col-md-4 career-box">
        <h3>Internship Opportunities</h3>
        <p> Need an internship? Try out these internship sites to start gaining some work experience:  </p>
        <ul>
        <li><a href="https://www.joinhandshake.com" target = "_blank">Handshake </a> - Students with no work experience and various job listings </li>
          <li><a href="https://www.wayup.com" target = "_blank">WayUp </a> - Entry-level and Fortune 500 companies</li>
          <li><a href="https://www.internships.com" target = "_blank"> Chegg Internships </a> - Internships in tech, finance, accounting & marketing</li>
          <li><a href="https://www.internmatch.com" target = "_blank"> InternMatch </a> - Meet specific internship requirements of both undergraduate and graduate students  </li>
        </ul>
      </div>
      <div class="col-md-4 career-box">
        <h3>Interview & Resume Resources </h3>
        <p> Need help with your resume or interview skills? Try out these resources to help you prepare: </p>
        <ul>
          <li><a href="https://www.leetcode.com" target = "_blank">Leetcode</a> - Enhance your skills and practice common technical interview questions </li>
          <li><a href="https://www.biginterview.com" target = "_blank">Big Interview</a> - Step-by-step interview preparation, coaching & practice interviews</li>
          <li><a href="https://www.csub.edu/cece/Student%20and%20Alumni/index.html" target = "_blank">CSUB CECE </a> - Interview skillbuilding, resume guide/templates, career events </li>
          <li><a href="https://www.resume.com" target = "_blank">Free Resume Builder </a> - Professional resume builder/templates with a step-by-step creator </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<br>
<br>
<footer class="footer-bottom">
  <p1>GradTrak © 2023 </p1>
</footer>
</body>
</html>
