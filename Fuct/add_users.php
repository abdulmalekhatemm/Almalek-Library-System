<?php
// The This Page For add users
include '../connect.php';
$The_user = $_GET['The_user'];
$sql=" SELECT * FROM users WHERE The_user = '$The_user'";
$result = $conn->query($sql);
$count = $result->num_rows ;
if($count==1){
    header("Location:http://localhost/Project_Library/Sign_up.php?ret=1"); 
    exit();
}
$Full_Name = $_GET['Full_Name'];
$The_Password = $_GET['The_Password'];
$Rest_password = $_GET['Rest_password'];
if( $The_Password !== $Rest_password )
{
    header("Location:http://localhost/Project_Library/Sign_up.php?ret=2");
   exit();
}
$The_phone = $_GET['The_phone'];
$Sateg = $_GET['Sateg'];
$Notes = $_GET['Notes'];
$sql ="INSERT INTO users (The_user,Full_Name,The_Password,The_phone,Sateg,Notes)
values('$The_user','$Full_Name','$The_Password','$The_phone','$Sateg','$Notes')";
$result2 =$conn->query($sql);
header("Location:http://localhost/Project_Library/Sign_up.php?ret=");



?>