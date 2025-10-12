<?php
include '../connect.php';
$book_name = $_POST['book_name'];
$author_name = $_POST['author_name'];
$publishing_house_name = $_POST['publishing_house_name'];
$reference_number=$_POST['reference_number'];

$count_book = $_POST['count_book'];	


$sql=" SELECT * FROM   bookses WHERE 	reference_number ='$reference_number' ";
$result = $conn->query($sql);
$count = $result->num_rows ;
if($count==1){
header("Location:http://localhost/Project_Library/new_book.php?ret=1"); 
exit();
}
$cover_photo =$_FILES['cover_photo']['name'];
$cover_photo =date("mdyhis").'.'.pathinfo($cover_photo,PATHINFO_EXTENSION);
$filetmb=$_FILES['cover_photo']['tmp_name'];
$upload_file='../img/book/';
move_uploaded_file($filetmb,$upload_file.$cover_photo);
 $sql ="INSERT INTO bookses (book_name,author_name,publishing_house_name,reference_number,cover_photo,count_book)
 values('$book_name','$author_name','$publishing_house_name','$reference_number','$cover_photo','$count_book')";
 $result2 =$conn->query($sql);
 header("Location:http://localhost/Project_Library/new_book.php?ret=2");



?>