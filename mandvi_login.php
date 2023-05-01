<!DOCTYPE html>
<?php

$profpic = "mandvi.jpg";

?>
<html>
<head>
	<title>Login Page</title>
    <style>
    body
    {
        background-image:url('<?php echo $profpic; ?>');
        background-size:cover;
    } 
    </style>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center><br><br>
	<h1>SUN RISE ACADEMY OBRA  AURANGABAD (BIHAR) </h1><br>
	<h3>STUDENT MANAGEMENT SYSTEM</h3><br>
    
	<form action="" method="POST">
		<input type="submit" name="mandvi_adminlogin" value="Admin Login" required>
		<input type="submit" name="mandvi_studentlogin" value="Student Login" required>
	</form>
    
	<?php
		if(isset($_POST['mandvi_adminlogin'])){
			header("Location: mandvi_adminlogin.php");
		}
		if(isset($_POST['mandvi_studentlogin'])){
			header("Location: mandvi_studentlogin.php");
		}
	?>
	</center>
</body>
</html>