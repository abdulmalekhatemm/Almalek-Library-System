<?php
include '../connect.php';
$the_book=$_GET['id'];
session_start();
$the_user =$_SESSION['onlinelibrary'];
$order_time=(new \datetime())->format('Y-m-d');
$order_status='طلب';
$sql="INSERT INTO borrow_a_book (the_book,the_user,order_time,order_status)
VALUES('$the_book','$the_user','$order_time','$order_status')";
$result = $conn->query($sql);
header("Location:http://localhost/Project_Library/book.php"); 	
//$result->fetch_assoc()
?>