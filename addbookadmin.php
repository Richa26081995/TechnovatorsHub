<?php
session_start();
$connection=mysqli_connect('localhost','root','');
if (!$connection) {
	die("database connection failed". mysqli_error($connection));
}

$selectdb=mysqli_select_db($connection,'technovator');
if(!$selectdb){
	die("database selection failed" . mysqli_error($selectdb));
}

if (isset($_POST['submit'])) 
{
	$book_var=$_POST['book'];
	$writer_var=$_POST['writer'];
	$edition_var=$_POST['edition'];

	$image_var=$_FILES['image']['name'];
	$imagetmp_var=$_FILES['image']['tmp_name'];

	$pdf_var=$_FILES['pdf']['name'];
	$pdftmp_var=$_FILES['pdf']['tmp_name'];
    
    $folder='uploadedfiles/';

    $pathimg_var=$folder.$image_var;
    $pathpdf_var=$folder.$pdf_var;

    move_uploaded_file($imagetmp_var, $pathimg_var);

    move_uploaded_file($pdftmp_var, $pathpdf_var);

    $sql="INSERT INTO `adminbook` (book_db, writer_db, edition_db, pic_db, pdf_db, locpic_db, locpdf_db) VALUES ('$book_var', '$writer_var', '$edition_var', '$image_var', '$pdf_var', '$pathimg_var', '$pathpdf_var') ";

$qry=mysqli_query($connection,$sql);
if ($qry) {
	echo "Uploaded Successfully";
}
	else  {
		echo "....";
	}
}

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



<div style="padding-left: 400px;">
<!--design-->
<form action="" method="POST" enctype="multipart/form-data">
<input type="text" name="book" placeholder="bookname" required=""><br>
<input type="text" name="writer" placeholder="writername" required=""><br>
<input type="text" name="edition"  placeholder="edition" required=""><br>
<input type="file" name="image" placeholder="image" required=""><br>
<input type="file" name="pdf"  placeholder="pdf" required=""><br>
<input type="submit"  name="submit" value="submit">	
</form>
</div>
</body>
</html>