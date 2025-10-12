<?php
include '../connect.php';
$the_name = $_POST['the_name'];
$adress   = $_POST['adress'];
$e_mail   = $_POST['e_mail'];
$msg      = $_POST['msg'];
$sql ="INSERT INTO us (the_name,adress,e_mail,msg)
 values('$the_name','$adress','e_mail','$msg')";
 $result2 =$conn->query($sql);
 header("Location:http://localhost/Project_Library/us.php?ret=2");



?>