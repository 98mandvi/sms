<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juquery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.js"></script>
    <style type="text/css">
        #header{
            height:10%;
            width:100%;
            top:2%;
            background-color:black;
            position:fixed;
            color:white;
        }
        #left_side{
            height:75%;
            width:15%;
            top:10;
            position:fixed;
        }
        #right_side{
            height:75%;
            width:80%;
            background-color:whitesmoke;
            position:fixed;
            left:17%;
            top:21%;
            color:red;
            border:solid 1px black;
        }
        #top_span{
            top:15%;
            width:80%;
            left:17%;
            position:fixed;
        }
        </style>
         <?php
         session_start();
         $connection= mysqli_connect("localhost","root","");
         $db= mysqli_select_db($connection,"management");
         ?>
</head>
<body>
    <div id="header">
        <center><br><strong> STUDENT MANAGEMENT SYSTEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
            Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Name: <?php echo $_SESSION['name'];?>
            <a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a>
        </center>
    </div>
     <span id="top_span"><marquee>Note:- this portal is open til 5 May... plz edit 
        your information if Wrong.</marquee></span>
    <div id="left_side"><br><br><br><br><br><br>
        <from  method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="Search_student" value="Search Student"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="Edit_student" value="Edit Student"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="Add_new_student" value="Add new Student"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="Delete_student" value="Delete Student"><br><br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="right_side">
        <div id="demo">
            <?php
            if(isset($_POST['Search_student']))
            {  
                ?>
                <center><!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-color: black;
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-color: whitesmoke;
			position: fixed;
			left: 17%;
			top: 21%;
			color: red;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"management");
	?>
</head>
<body>
	<div id="header"><br>
		<center>Student Management System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email: <?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $_SESSION['name'];?> 
		<a href="mandvi_logout.php">Logout</a>
		</center>
	</div>
	<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
		
			<table>
				<tr>
					<td>
						<input type="submit" name="edit_detail" value="Edit Detail">
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show_detail" value="Show Detail">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
			if(isset($_POST['show_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Remark:</b>
						</td> 
						<td>
							<textarea rows="3" cols="40" disabled><?php echo $row['remark']?></textarea>
						</td>
					</tr>
				</table>
				<?php
				}	
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="mandvi_edit_student.php" method="post">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<input type="submit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}
			?>
		</div>
	</div>
</body>
</html>
                    <form action=""method="post">
                        Enter Roll No:
                        <input type="text" name="rollno"></input>
                        <input type="submit" name="search by roll no for search" value="Search"></input>
                    </form>
                </center>
                <?php
            }        
                if(isset($_POST['search_student']))
            {
                $query ="select * from student where roll_no * '$_POST[rollno]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                  ?>
                  <table>
                      <tr>
                          <td><b>Roll No: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['rollno'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>Name: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['name'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>City: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['city'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>pcont: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['pcont'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>stander: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['stander'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>Email: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['email'];?>"disabled>
                          </td>
                      </tr>
                      <tr>
                          <td><b>Password: &nbsp;&nbsp;&nbsp;</b></td>
                          <td>
                              <input type="text" value="<?php echo $row['password'];?>"disabled>
                          </td>
                      </tr>
                  </table>
                  <?php
              }
          }

             ?>
        </div>

    </div>
    
</body>
</html>