<?php
include("connection.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/gform.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="form">
        <form action="" method="post">
        <label for="name">Name:</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name Here" required><br>            
        <label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Here" required><br> 
        <label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" required><br> 
        <label for="dob">Date of birth</label>
		<input type="date" class="form-control" id="dob" name="dob" required><br> 
        <button name="submit" type="submit" class="btn" >sign in</button>   
        </form>
        
    </div>
</div>
    <?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $dob=$_POST["dob"];
     $query="insert into user_information(user_name,user_email,password,date_of_birth) values('".$name."','".$email."','".$password."','".$dob."')";
    mysqli_query($con,$query);
    }
    ?>

</body>
</html>

