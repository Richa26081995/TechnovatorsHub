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
  <link rel="stylesheet" type="text/css" href="css/books.css">
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/tech.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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

<div class="container book_section">

  <div class="row ">
    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/cbook.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>LET US C</h3>
              <div>Yashavant Kanetkar

                <br />EDITION 8<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/dsbook.jpeg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>DATA STRUCTURE</h3>
              <div>SCHAUM'S SERIES
                <br /> LATEST EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/javabook.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>JAVA </h3>
              <div> REFRENCE
                <br /> SEVENTH EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/dbbook.jpeg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>DATABASE</h3>
              <div>KORTH
                <br /> SEVENTH EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/OSBOOK.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>OPERATING SYSTEM</h3>
              <div>GALVIN
                <br /> LATEST EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/dabook.jpeg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>ALGORITHM</h3>
              <div>COREMEN
                <br />THIRD EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/cnbook.gif" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>COMPUTER NETWORKS</h3>
              <div>FOROUZAN
                <br /> FOURTH EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/automata.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>AUTOMATA</h3>
              <div>K.L.P MISHRA
                <br /> LATEST EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/aptibook.jpeg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>QUANTATIVE APTI</h3>
              <div>R.S AGARWAL
                <br /> LATEST EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/reasoning.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>REASONING (43)</h3>
              <div>R.S AGARWAL
                <br /> LATEST EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="images/apti1.jpg" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3>APTITUDE </h3>
              <div>ARUN SHARMA
                <br />6 EDITION<br><br>
                <a id="fourth-btn" href="#">DOWNLOAD <i class="fa fa-download"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-sm-3 book_col">
      <div class="do-item do-item-circle do-circle">
        <img src="" class="do-item do-circle">
        <div class="do-info-wrap do-circle">
          <div class="do-info">
            <div class="do-info-front do-circle"></div>
            <div class="do-info-back do-circle">
              <h3></h3>
              <div>
                <br /></div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>  <!--container close-->    
</body>
</html>
