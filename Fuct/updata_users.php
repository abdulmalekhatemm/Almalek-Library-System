<?php
include '../connect.php';
$id = $_POST['id'];
$job = $_POST['job'];

$sql ="UPDATE users SET job ='$job' where id ='$id'";
$result = $conn->query($sql);
header('Location:http://localhost/Project_Library/search_user.php');
//echo  $count ;               

?>