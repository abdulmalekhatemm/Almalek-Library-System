<?php
include '../connect.php';
$filed1  = $_POST['filed1'];
$filed2  = $_POST['filed2'];
$filed3  = $_POST['filed3'];
$filed4  = $_POST['filed4'];
$filed5  = $_POST['filed5'];
$filed6  = $_POST['filed6'];
$filed7  = $_POST['filed7'];
$filed8  = $_POST['filed8'];

$sql ="UPDATE info SET  filed1 ='$filed1', filed2 = '$filed2', filed3 = '$filed3', filed4 ='$filed4',
filed5 = '$filed5', filed6   =  '$filed6',   filed7 = '$filed7',filed8 = '$filed8'";

$result = $conn->query($sql);
header('Location:http://localhost/Project_Library/info.php');
//echo  $count ;               

?>