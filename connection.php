<?php
$connection=mysqli_connect('localhost','root','');
if (!$connection) {
	die("database connection failed". mysqli_error($connection));
}

$selectdb=mysqli_select_db($connection,'technovator');
if(!$selectdb){
	die("database selection failed" . mysqli_error($selectdb));
}



?>