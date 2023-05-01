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
        <h3>Student Login Page</h3><br>
        <form action="" method="post">
           Email: <input type="text" name="email" required><br><br>
           Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="submit" required>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"management");
                $query="select * from student where email ='$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($query_run)){
                    if($row['Email'] == $_POST['email']){
                        if($row['Password'] == $_POST['password']){
                            header("Location: mandvi_student_dashboard.php");
                        }
                        else{
                            echo "Wrong password";
                        }
                    }
                    else{
                        echo "Wrong email ID";
                    }
                }
            }
        ?>
    </center>
</body>
</html>