<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/courses.css">
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.map"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>

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

<!-- 3D Slideshow Section --> 
<section id="slideshow">
      <div class="entire-content">
        <div class="content-carrousel">
          <a href="#"><figure class="shadow"><img src="././images/ang.png"></figure></a>
          <figure class="shadow"><img src="././images/iot.png"></figure>
          <figure class="shadow"><img src="././images/java.png"/></figure>
          <figure class="shadow"><img src="././images/js.jpg"/></figure>
          <figure class="shadow"><img src="././images/ml.png"/></figure>
          <figure class="shadow"><img src="././images/p.png"/></figure>
          <figure class="shadow"><img src="././images/php.png"/></figure>
          <figure class="shadow"><img src="././images/react.png"/></figure>
          <figure class="shadow"><img src="././images/c.jpg"/></figure>
    </div>
  </div>

  <div class="course">Select Your Course & Develop Skills</div>
</section>





</body>
</html> 