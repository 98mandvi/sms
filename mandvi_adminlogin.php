<!DOCTYPE html>
<?php

$profpic = "mandvi2.jpg";
?>
<html>
<head>
<title>ADMIN LOGIN</title>
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
		<h3>ADMIN LOGIN PAGE</h3><br>
		<form action="" method="post">
			<b>Email ID: <input type="text" name="email" required></b><br><br>
			<b>Password: <input type="password" name="password" required><b><br><br>
			<b><input type="submit" name="submit" value="LOGIN"></b>
		</form><br>
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"management");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: mandvi_admindashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
</body>
</html>