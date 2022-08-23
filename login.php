<?php
require_once('connection.php');
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login Form </title>
  <link rel="stylesheet" href="css/tech.css">
</head>
<body class="login_img">
  <div class="box">
    <?php if(@$_GET['reg']==true){?>
      <div class="reg_msg1"><?php echo $_GET['reg'];?></div>
    <?php } ?>
    <h2>Login</h2>
    <form action="login_check.php" method="POST">

      <div class="inputBox drpdwn">

    Login As &nbsp&nbsp<select name="category" required="">
    <option value="admin">Admin</option>
    <option value="student">Student</option>
    </select>
    </div>

    <div class="inputBox">
    <input type="email" name="email" required="">
    <label for="">E-mail</label>
    </div>

      <div class="inputBox">
        <input type="password" name="pswd" required="">
        <label for="">Password</label>
      </div>
      <input type="submit" name="submit" value="Submit">

      <?php if(@$_GET['error_msg']==true){?>
      <div class="reg_msg"><?php echo $_GET['error_msg'];?></div>
    <?php } ?>
    </form>
  </div>
</body>
</html>