<?php
//this page for test 
include '../connect.php';
$almk_n1 = $_POST['almk_n1'];
$almk_n2 = $_POST['almk_n2'];
$sql=" SELECT * FROM users WHERE The_user = '$almk_n1' and The_Password = '$almk_n2' ";
$result = $conn->query($sql);
$count = $result->num_rows ;
if( $count==0 )
{
    header('Location:http://localhost/Project_Library/login.php');
    exit();
}
if( $count==1)
{
    header('Location:http://localhost/Project_Library/index.php');
    session_start();
    $_SESSION['projectlibrary'] =$almk_n1;
    exit();
}
//echo  $count ;               

?>