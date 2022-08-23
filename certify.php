<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Certificate</title>
	<link rel="stylesheet" type="text/css" href="css/certify.css">
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/tech.css">
	
</head>
<body>

<div class="wrapper clrbg">
  <h1>Certify Your Skills</h1>
  <div class="cols">
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/cphp.png')">
						<div class="inner">
							<p>PHP</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						  <p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						  <a href="phptest.php" style="color: white;"><button class="cbtn">Start Test</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/cjava.png');">
						<div class="inner">
							<p>JAVA</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						 <a href="javatest.php"><button class="cbtn">Start Test</button></a> 
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/cangular.png')">
						<div class="inner">
							<p>ANGULAR</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						<a href="angulartest.php"><button class="cbtn">Start Test</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/jsc.jpg')">
						<div class="inner">
							<p>JAVA SCRIPT</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						<a href="javascripttest.php"><button class="cbtn">Start Test</button></a>  
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
				<div class="front" style="background-image: url('././images/cc.jpg')">
						<div class="inner">
							<p>C Programming</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						 <a href="ctest.php"><button class="cbtn">Start Test</button></a> 
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/cds.png')">
						<div class="inner">
							<p>Data Structure</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						  <a href="dstest.php"><button class="cbtn">Start Test</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/cpython.jpg')">
						<div class="inner">
							<p>PYTHON</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
						  <a href="pythontest.php"><button class="cbtn">Start Test</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="container">
					<div class="front" style="background-image: url('././images/mlc.jpeg')">
						<div class="inner">
							<p>MACHINE LEARNING</p>
              <span>GET CERTIFY</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						<p>Start Test, Score 80%+ and Get Certify By Our Technovators Team</p>
					 <a href="mltest.php"><button class="cbtn">Start Test</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
 </div>

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
<a href="index.php"><button type="button" class= "logout"><i class="fa fa-sign-out" aria-hidden="true"></i>LogOut</button></a>
  <br>

</div>

</body>
</html>