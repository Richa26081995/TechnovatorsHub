<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="css/dashboardadmin.css">
<link rel="stylesheet" type="text/css" href="css/dash_admin.css">l

</head>
<body class="admin">

<div class="sidebar">
	<div class="Welcome_msg"><?php echo "Welcome"."<br>".$_SESSION['nameadmin_ses']; ?></div>
	<br>
  <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="courses.php"><i class="fa fa-fw fa-graduation-cap "></i>Add Courses</a>
  
  <a href="#contact"><i class="fa fa-fw fa-play"></i>Add Tutorials</a>
  <a href="addbookadmin.php"><i class="fa fa-fw fa-book"></i>Add Books</a>
  <a href="#contact"><i class="fa fa-fw fa-paper-plane "></i>Add Papers</a>
  <a href="#contact"><i class="fa fa-fw fa-pencil"></i>Add Test</a>
 
</div>

<!--design-->


<div id="container">
	<div id="shape">
		<div class="one"><a href="http://www.crossfitadvanced.com" target="_blank" ><img src="images/admin1.png"  class="admin_dash"></a></div>
		<div class="two"><a href="http://www.refinedmobile.com" target="_blank"><img src="images/admin2.jpg" class="admin_dash"></a></div>
		<div class="three"><a href="http://www.havis.com" target="_blank"><img src="images/admin3.png" class="admin_dash"></a></div>
		<div class="four"><a href="https://www..usc.edu" target="_blank"><img src="images/admin4.jpg" class="admin_dash"></a></div>
		<div class="five"><a href="http://www.cortac.com" target="_blank"><img src="images/admin5.jpg" class="admin_dash"></a></div>
		<div class="six"><a href="http://www.mikemai.net" target="_blank"><img src="images/admin6.jpg" class="admin_dash"></a></div>
	</div>
</div>
</body>
</html>