<?php
include '../connect.php';
$news=$_POST['news'];
$sql ="INSERT INTO  ticher (news)
values('$news')";
$result2 =$conn->query($sql);
header("Location:../news.php?ret=1");



?>