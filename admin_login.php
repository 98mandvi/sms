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
        <h3>Admin Login Page</h3><br>
        <form action="" method="post">
           Email: <input type="text" name="email" required><br><br>
           Password: <input type="password" name="password" required><br><br>
            <input type="submit" name="submit" required>
        </form><br>
        <?php
            session_start();
            $email ="";
            $name ="";
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"sms");
                $query="select * from login where email ='$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($query_run)){
                    if($row['email']==$_POST['email']){
                        if($row['password']==$_POST['password']){
                            $_SESSION['email']=$row['email'];
                            $_SESSION['name']=$row['name'];
                            header("Location: mandvi.php");
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