<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/placement.css">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/tech.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



</head>
<body class="clrbg placement">

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


<div class="container placecontainer">
  <h1 class="placepaper">Placement Papers</h1>

  <div class="row flip-boxes">

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/amazonlogo.png');">
      </div>

      <div class="back">
        <div class="content">
          Amazon Placement Paper
        </div>
        <div><button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button></div>
      </div>

    </div>
    <!--col1-->

<div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/Adobelogo.png');">
        
      </div>

      <div class="back">
        <div class="content">
          Adobe Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-2-->

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/tcslogo.png');">
        
      </div>

      <div class="back">
        <div class="content">
          TCS Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-3-->

   
<!--col-4-->

</div><!--row-->


<div class="row flip-boxes">

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/googlelogo.gif');">
        
      </div>

      <div class="back">
        <div class="content">
         Google Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col1-->

<div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/microsoftlogo.jpg');">
        
      </div>

      <div class="back">
        <div class="content">
          Microsoft Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-2-->

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/oraclelogo.png');">
        
      </div>

      <div class="back">
        <div class="content">
          Oracle Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-3-->

    
<!--col-4-->

</div><!--row-->



<div class="row flip-boxes">

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/paytmlogo.jpg');">
        
      </div>

      <div class="back">
        <div class="content">
          Paytm Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col1-->

<div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/Wiprologo.png');">
        
      </div>

      <div class="back">
        <div class="content">
          Wipro Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-2-->

    <div class="col-md-3 col-sm-4 col-8 flip-box">
      <div class="front" style="background-image: url('images/ibmlogo.png');">
        
      </div>

      <div class="back">
        <div class="content">
          IBM Placement Paper
        </div>
        <button class="btnplace btn-success"><i class="fa fa-download"></i> Download</button>
      </div>

    </div>
    <!--col-3-->

    
    </div>
<!--col-4-->

</div><!--row-->




</div>


</body>
</html>