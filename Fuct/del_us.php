<?php
include '../connect.php';
$id = $_GET['almk_n1'];
$sql ="DELETE FROM us WHERE id = '$id' ";
$result =$conn->query($sql);
header("Location:http://localhost/Project_Library/search_us.php");



?>