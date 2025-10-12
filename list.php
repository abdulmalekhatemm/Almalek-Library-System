<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Document</title>
</head>
<body>
<?php  
include 'css.css'; 
include 'connect.php';
$sql ="SELECT * FROM info";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
 {
$filed1  = $row ['filed1'];
$filed2  = $row ['filed2'];
$filed3  = $row ['filed3'];
$filed4  = $row ['filed4'];
$filed5  = $row ['filed5'];
$filed6  = $row ['filed6'];
$filed7  = $row ['filed7'];
$filed8  = $row ['filed8'];
$filed9  = $row ['filed9'];
$filed10 = $row ['filed10'];
$filed11 = $row ['filed11'];

 }

?>
<div style="width: 100%; postion: fixed;top:0; ">
<ul>
<li><a href="US.php"><?php echo $filed6; ?></a></li>
<li><a href="Plane.php"><?php echo $filed5; ?></a></li>
<li><a href="team.php"> <?php echo $filed4; ?></a></li>
<li><a href="book.php"><?php echo $filed3; ?></a></li>
<li><a href="about.php"><?php echo $filed2; ?></a></li>
<li><a href="index.php"><?php echo $filed1; ?></a></li>
<?php
session_start();
if(!isset($_SESSION['projectlibrary'])){
?>
<li style="float: right;"><a href="login.php">تسجل  الدخول</a></li>
<?php
}
?>
<?php
if(isset($_SESSION['projectlibrary'])){
$n1=$_SESSION['projectlibrary'];
$sql=" SELECT * FROM users WHERE The_user = '$n1' ";
$result = $conn->query($sql);
/* تنفيذ استعلام معين*/ 
while($row = $result->fetch_assoc())
{
    /* ارجاع لاسترجاع النتائج  */
$Full_Name =$row['Full_Name'];
$The_user  =$row['The_user'];
$job=$row['job'];
}
?>
<li style="float: right;"> <a href="login.php">تسجيل الخروج</a></li>
<li style="float: right; color: red; font-size: 25px;"> مرحبا بكم يا سادة <?php $Full_Name ?> </li>
<li style="float: right;"> <a href="personal.php">الصفحة الشخصية</a></li>
<?php
}
?>
</ul>
<marquee  direction="right";>
<?php
// $sql="SELECT * FROM   ticher ";
// $result = $conn->query($sql);
// while($row = $result->fetch_assoc())
// {
// $news=$row['news'];
// }
// echo $news.'**   *   **';
// ?>
</marquee>
</div>
</body>
</html>