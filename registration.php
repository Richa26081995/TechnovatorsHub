<?php
session_start();
require_once('connection.php');



if(isset($_POST['submit']) & !empty($_POST))
{
 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$course = $_POST['course'];
$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];

if ($_POST['user_password'] != $_POST['confirm_password']) 
{
echo(" Passwords does not match,Try Again");
}
else
{

$createsql="INSERT  INTO `registration`(first_name,last_name,course,user_name,user_password,confirm_password,email,contact_no) VALUES ('$first_name','$last_name','$course','$user_name','$user_password','$confirm_password','$email','$contact_no')";

$res = mysqli_query($connection,$createsql);

if ($res) {
  header("location:login.php?reg=Successfully Register Login Now!!!");
  session_destroy();
}

else{
  echo "Please Try Again";
}

}
}
?>




<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
</head>
<link rel="stylesheet" type="text/css" href="css/tech.css">
<link rel="stylesheet" type="text/css" href="js/tech1.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




<body>
  <div class="container-fluid clrbg">
<div class="container reg_div bg-secondary">
  <div id="reg_img"><img src="./images/reg.gif"></div>

    <form class="well form-horizontal" action="" method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2 style="color: white;"><b>Connect with Us</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Course</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="course" class="form-control selectpicker">
      <option value="Select your Course" >Select your Course</option>
      <option>M.C.A</option>
      <option>B.Tech</option>
      <option >M.tech</option>
      
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Username</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="user_name" placeholder="Username" class="form-control"  type="text" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="user_password" placeholder="Password" class="form-control"  type="password" required="">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control"  type="password" required="">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required="">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="contact_no" placeholder="(+91)" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div>
    </div><!-- /.container -->
    </body>
    </html>