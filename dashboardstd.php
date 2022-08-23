<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/tech.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body class="clrbg">
<!--sidebar-->
<div class="sidebar">
  <div class="Welcome_msg"><?php echo "Welcome"."<br> ".$_SESSION['name1_ses']." ".$_SESSION['name2_ses'];?></div><br>
  <a href="index.php"><i class="fa fa-user-circle-o"></i>  Dashboard</a>
  <a href="courses.php"><i class="fa fa-fw fa-graduation-cap "></i> Courses</a>
  <a href="certify.php"><i class="fa fa-fw fa-certificate"></i> Certify your skill</a>
  <a href="#contact"><i class="fa fa-fw fa-play"></i> Tutorials</a>
  <a href="books.php"><i class="fa fa-fw fa-book"></i> Books</a>
  <a href="resume.php"><i class="fa fa-fw fa-file"></i> Generate Resume</a>
  <a href="placement.php"><i class="fa fa-fw fa-paper-plane "></i> Placement Papers</a>
  <a href="#contact"><i class="fa fa-fw fa-pencil"></i> Aptitude Test</a>
  <a href="interview.php"><i class="fa fa-fw fa-question-circle"></i> Interview Questions</a>
  <a href="#contact"><i class="fa fa-fw fa-search"></i> Search Internship</a>
  <a href="#contact"><i class="fa fa-fw fa-briefcase"></i> Search Jobs</a>
  <a href="#contact"><i class="fa fa-fw fa-comment"></i> Query & Support</a>
  <a href="#contact"><i class="fa fa-fw fa-phone"></i> Contact Us</a>
  <a href="index.php"><button type="button" class="btn btn-danger logout"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</button></a>
  <br>
</div>

<!--design-->

<div id="content">
    
<ul id="eduposters">
      <li>
        <img src="images/pos1.png"  />
        <div class="eduinfo">
          <h3>Online Tutorials</h3>
          <p>The Expet In Anything Was Once A beginner,Take A Step And Choose A better Path For You </p>
          <a href="tutorial.php">TUTORIALS</a>
        </div>
      </li>
      <li>
        <img src="images/pos2.jpg" />
        <div class="eduinfo">
          <h3>Search Jobs</h3>
          <p>Choose A Job You Love,And You Will Never Have To Work In your Life. </p>
          <a href="job.php">Search Job</a>
        </div>
      </li>
      <li>
        <img src="images/pos3.jpg" />
        <div class="eduinfo">
          <h3>Certify Your Skills</h3>
          <p>You May Be Dissapointed If You Fail,But You Will Be Doomed If You Don't Try.</p>
          <a href="certify.php"> Test</a>
        </div>
      </li>
    </ul>
</div>
</body>
</html> 
