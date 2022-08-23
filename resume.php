<?php
session_start();
require_once('connection.php');

if (isset($_POST['submit']))
{
  header("location:resumedesign.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resume</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">
  <link rel="stylesheet" type="text/css" href="css/tech.css">
  <link rel="stylesheet" type="text/css" href="css/resume.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>






</head>
<body class="clrbg resume">

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

<!-- MultiStep Form -->
<!-- MultiStep Form -->
<h1 class="heading_cv">Build Your Resume</h1>
<div class="row row_cv">
    <div class="col-md-6 col-md-offset-3">
        <form action="resumedesign.php" method="POST" id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"><div class="li_text">Personal Details</div></li>
                <li><div class="li_text">Education Details</div></li>
                <li><div class="li_text">Technical Skills</div></li>
                <li><div class="li_text">Project Details</div></li>
                <li><div class="li_text">Achivement <br>& Interest</div></li>
                <li><div class="li_text">Photo &<br>Signature</div></li>
                
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Personal Details</h2>
                <h3 class="fs-subtitle">Add Information To Your C.V</h3>
                <div class="cv_head"> Name:</div>
                <input type="text" name="name" placeholder=" Name"/>
                <div class="cv_head">Father's Name:</div>
                <input type="text" name="fname" placeholder="Father's Name"/>
                <div class="cv_head">Gender:
                <input type="radio" name="gender" value="male" style="width: 50px !important"> Male
              <input type="radio" name="gender" value="female" style="width: 50px !important"> Female
                </div>

                <div class="cv_head">Language Known:</div>
                <input type="text" name="lang" placeholder="Hindi,English..."/>
                
                <div class="cv_head">E-mail:</div>
                <input type="email" name="email" placeholder="email"/>
                <div class="cv_head">Address:</div>
                <input type="text" name="address" placeholder="address"/>
                <div class="cv_head">Phone:</div>
                <input type="text" name="phone" placeholder="Phone"/>
                <div class="cv_head">Date Of Birth:</div>
                <input type="date" name="bday" placeholder="01/01/2019">
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Educational Details</h2>
                <h3 class="fs-subtitle">Add Your Qualifications</h3>
                <div class="cv_info">Fill Your High School Details:</div>
                <div class="cv_head">Degree:</div>
                <input type="text" name="highdegree" placeholder="10th"/>
                <div class="cv_head">Institute:</div>
                <input type="text" name="highinst" placeholder="School Name"/>
               <div class="cv_head">Board:</div>
                 <input type="text" name="highboard" placeholder="C.B.S.E"/>
                <div class="cv_head">CGPA/Percantage:</div>
                <input type="text" name="highper" placeholder="8.5 CGPA or 75%"/>
                <div class="cv_head">Year Of Passing:</div>
                <input type="text" name="highyear" placeholder="Ex-2017"/>
                

                <div class="cv_info">Fill Your Secondary School Details:</div>
                <div class="cv_head">Degree:</div>
                <input type="text" name="secdegree" placeholder="12th"/>
                <div class="cv_head">Institute:</div>
                <input type="text" name="secinst" placeholder="School Name"/>
               <div class="cv_head">Board:</div>
                 <input type="text" name="secboard" placeholder="C.B.S.E"/>
                <div class="cv_head">CGPA/Percantage:</div>
                <input type="text" name="secper" placeholder="8.5 CGPA or 75%"/>
                <div class="cv_head">Year Of Passing:</div>
                <input type="text" name="secyear" placeholder="Ex-2017"/>


                <div class="cv_info">Fill Your Graduation Details:</div>
                <div class="cv_head">Degree:</div>
                <input type="text" name="ugdegree" placeholder="B.tech"/>
                <div class="cv_head">Institute:</div>
                <input type="text" name="uginst" placeholder="College"/>
               <div class="cv_head">University:</div>
                 <input type="text" name="uguni" placeholder="A.K.T.U"/>
                <div class="cv_head">CGPA/Percantage:</div>
                <input type="text" name="ugper" placeholder="8.5 CGPA or 75%"/>
                <div class="cv_head">Year Of Passing:</div>
                <input type="text" name="ugyear" placeholder="Ex-2017"/>

                <div class="cv_info">Fill Your Post Graduation Details:</div>
                <div class="cv_head">Degree:</div>
                <input type="text" name="pgdegree" placeholder="M.C.A"/>
                <div class="cv_head">Institute:</div>
                <input type="text" name="pginst" placeholder="College"/>
               <div class="cv_head">University:</div>
                 <input type="text" name="pguni" placeholder="A.K.T.U"/>
                <div class="cv_head">CGPA/Percantage:</div>
                <input type="text" name="pgper" placeholder="8.5 CGPA or 75%"/>
                <div class="cv_head">Year Of Passing:</div>
                <input type="text" name="pgyear" placeholder="Ex-2017"/>

                
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Technical Skills</h2>
                <h3 class="fs-subtitle">Enter Your Skills</h3>
                <div class="cv_head">Languages known:</div>
                <input type="text" name="language" placeholder="c,c++,java,php"/>
                <div class="cv_head">Front End:</div>
                <input type="text" name="front" placeholder="Html,Css"/>
                <div class="cv_head">Database:</div>
                <input type="text" name="database" placeholder="Mysql,oracle"/>
                <div class="cv_head">Operating System:</div>
                <input type="text" name="os" placeholder="Windows,Linux"/>
                <div class="cv_head">Interest:</div>
                <input type="text" name="interest" placeholder="Data structure,oops Concept"/>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>

            <fieldset>
                <h2 class="fs-title">Projects</h2>
                <h3 class="fs-subtitle">Enter About Your Project</h3>
                <div class="cv_info">Project 1 Details:</div>
                <div class="cv_head">Title:</div>
                <input type="text" name="title1" placeholder="Technovators Hub"/>
                <div class="cv_head">Technology:</div>
                <input type="text" name="tech1" placeholder="Php and Mysql"/>
                <div class="cv_head">Description:</div>
                <textarea rows="4" cols="50" name="desc1" placeholder="Technovators Hub Is A  Learning Portal"></textarea>

                <div class="cv_info">Project 2 Details:</div>
                <div class="cv_head">Title:</div>
                <input type="text" name="title2" placeholder="Technovators Hub"/>
                <div class="cv_head">Technology:</div>
                <input type="text" name="tech2" placeholder="Php and Mysql"/>
                <div class="cv_head">Description:</div>
                <textarea rows="4" cols="50" name="desc2" placeholder="Technovators Hub Is A  Learning Portal"></textarea>
                
                
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>


            <fieldset>
                <h2 class="fs-title">Achievements/Interest</h2>
                <h3 class="fs-subtitle">Achivements/Extra Curricular Activities/Interest</h3>
                <div class="cv_info">Achivements/Extra Activities:</div>
                <div class="cv_head">Achievement 1:</div>
                <input type="text" name="achieve1" placeholder=""/>
                <div class="cv_head">Achievement 2:</div>
                <input type="text" name="achieve2" placeholder=""/>
                <div class="cv_head">Achievement 3:</div>
                <input type="text" name="achieve3" placeholder=""/>
                 <div class="cv_info">Interest:</div>
                <div class="cv_head">Interest 1:</div>
                <input type="text" name="interest1" placeholder=""/>
                <div class="cv_head">Interest 2:</div>
                <input type="text" name="interest2" placeholder=""/>
                <div class="cv_head">Interest 3:</div>
                <input type="text" name="interest3" placeholder=""/>
                <div class="cv_head">Career Objective:</div>
                <textarea rows="4" cols="50" name="career" placeholder="Want to work...."></textarea>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>

            <fieldset>
               <h2 class="fs-title">Photo/Signature</h2>
                <div class="cv_info">Choose Image:</div>
          
                <input type="file" name="image" />
                <button type="button" class="btn btn-success" name="upload1"><i class="fa fa-upload" aria-hidden="true"></i>Upload</button><br><br>

                 <div class="cv_info">Choose Signature:</div>
          
                <input type="file" name="sign" />
                <button type="button" class="btn btn-success" name="upload2"><i class="fa fa-upload" aria-hidden="true"></i>Upload</button>
                <br><br><br><br>

                <div class="cv_head">Date:</div>
                <input type="date" name="date" placeholder="12-june-2019"/>

                <div class="cv_head">Place:</div>
                <input type="text" name="place" placeholder="Lucknow"/>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <!-- <input type="button" name="submit" class="" value="Submit"/> -->
                <!-- <a href="resumedesign.php" class="btn btn-success">Submit</a -->
             <input type="button" name="next" class="next action-button" value="Next"/>
        </fieldset>


        
        <fieldset>
          
          <button type="button" class="btn btn-success" name="submit"> <i class="fa fa-download" aria-hidden="true"></i>Submit</button>
          <br>
          <br>
          <br>
          <!-- <a href="dashboardstd.php"><button type="button" class="btn btn-info" name="download"> <i class="fa fa-external-link"></i> Go To DashBoard</button></a> -->
        </fieldset>

        </form>
        
    </div>
</div>



<script type="text/javascript">

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
});
</script>

<!---image--cv-->

<script>
   function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#cv_img')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }


</script>

<!--image--->
<script>
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

</script>        