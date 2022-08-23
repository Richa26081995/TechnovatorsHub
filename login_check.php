<?php
session_start();
require_once('connection.php');

if(isset($_POST['submit']))
{
	$category=$_POST['category'];
	$email=$_POST['email'];
	$password=$_POST['pswd'];

	if($category=="student")
	{
$readsql="SELECT * FROM registration WHERE email='$email' and user_password='$password'";
$result= mysqli_query($connection,$readsql);
$row= mysqli_fetch_assoc($result);
$name1=$row['first_name'];
$name2=$row['last_name'];
if($row){
	$_SESSION['name1_ses']=$name1;
	$_SESSION['name2_ses']=$name2;
	header("location:dashboardstd.php");
    }
else{
	header("location:login.php?error_msg=Invalid User Name Or Password");
    }

}

else
	{
if($email=="richamaheshwari2631@gmail.com" && $password=="adminricha26")
{
	$_SESSION['nameadmin_ses']="Richa Maheshwari";
	header("location:dashboardadmin.php");
}
else
	header("location:login.php?error_msg=Invalid User Name Or Password");
	}

}

else
{
	echo "Cannot Login";
}


?>