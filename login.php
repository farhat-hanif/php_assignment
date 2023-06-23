<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/gform.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="form" style="height: 287px;">
        <form action="" method="post">
        <label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" id="" required><br> 
        <label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" required><br> 
        <button name="login_btn" type="submit" class="btn" >log in</button>   
        </form>
        <?php
       include("connection.php");

        if(isset($_POST['login_btn'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $q="select * from user_information where user_email='".$email."'and password='".$password."' ";
            $login_data=mysqli_query($con,$q);
            $log_check=mysqli_num_rows($login_data);

            if( $log_check)
            {
                // while($r=mysqli_fetch_array($login_data)) { }
                header("location:login.html");  
            }
            else{
                echo 'record not found';
            }
        }

        ?>
    </div>
</div>
</body>
</html>