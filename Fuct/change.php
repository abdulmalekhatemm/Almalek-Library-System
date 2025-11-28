<?php
//includes page for connect 
include '../connect.php';
$almk_n1 = $_POST['almk_n1'];
$almk_n2 = $_POST['almk_n2'];
$almk_n3 = $_POST['almk_n3'];
session_start();
$The_user=$_SESSION['projectlibrary'];
$sql=" SELECT * FROM users WHERE The_user = '$The_user'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$The_Password=$row['The_Password'];
}
if($almk_n1 <> $The_Password)
{
   header('Location:http://localhost/Project_Library/pass.php?ret=1');
   exit();
}

if($almk_n3 !== $almk_n2)
{
    header('Location:http://localhost/Project_Library/pass.php?ret=2');
   exit();
}
$sql ="UPDATE users SET The_Password ='$almk_n3' where id='$The_user'";
$result = $conn->query($sql);
header('Location:http://localhost/Project_Library/personal.php');
//echo  $count ;               

?>