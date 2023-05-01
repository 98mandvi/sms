<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
         <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
         <script type="text/javascript" src="bootstrap-4.4.1/js/juquery_latest.js"></script>
         <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.js"></script>
    </head>
<body>
<center><br><br>
        <h3>STUDENT MANAGEMENT SYSTEM</h3><br>
        <form action="" method="post">
           <input type="submit" name="admin_login" value="Admin Login">
           <input type="submit" name="student_login" value="Student Login" >
            
        </form><br>
        <?php
        if(isset($_POST['admin_login'])){
            header("Location: admin_login.php");
        }
        if(isset($_POST['student_login'])){
            header("Location: student_login.php");
        }
        ?>
    </center>
</body>
</html>