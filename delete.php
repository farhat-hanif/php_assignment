<?php
include("connection.php");

$userID=$_GET['id'];
$q="delete from user_information where user_id =$userID";
$exc=mysqli_query($con,$q);

if($exc)
{
    header('location:userData.phpp');
}
?>