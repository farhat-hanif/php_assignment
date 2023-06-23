<?php
include("connection.php");
$userID=$_GET['id'];
$q="select * from user_information where user_id =$userID";
$data=mysqli_query($con,$q);
$r=mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="assets/gform.css">
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
</head>
<body>
    
<div class="container">
    <div class="form" style="height: 387px;">
        <form action="" method="post">
        <label for="name">Name:</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name Here" value="<?php echo $r['user_name']?>"><br>            
        <label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Here" value="<?php echo $r['user_email']?>"><br> 
        <label for="dob">Date of birth</label>
		<input type="date" class="form-control" id="dob" name="dob" value="<?php echo $r['date_of_birth']?>"><br> 
        <button name="update_btn" type="submit" class="btn" >update</button>   
        </form>
        
    </div>
</div>
<?php
if(isset($_POST['update_btn']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];

    $q="update user_information set user_name='".$name."' , user_email='".$email."' where user_id='".$userID."'";

    $exc=mysqli_query($con,$q);
    if($exc){
        header('location:userData.php');
    }
}
?>
</body>
</html>