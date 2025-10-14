<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Informantion</title>
</head>
<style>
.f25
{
width: 400px;
float: right;
padding: 9px;
text-align: right;
}
.f75
{
width: 400px;
float: right;
padding: 9px;
text-align: right;
}
</style>
<body>
<center>
<?php 
//include 'css.css'; 
include 'info.php';
 //session_start(); 
//session_unset();
?>
<div id="d5"; style=" width:100%; height: 500px;"> 
<br><br>
<h2> بيانات الدخول</h2>
<?php
$sql="SELECT * FROM info  ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
?>
<form style="width: 500px;"  action="Fuct/chinge_info.php" method="post">
<div>
<br><br>
<label class="f25"> الرئيسية</label>
<input class="f75" type="" name="filed1" value="<?php  echo $row ['filed1']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> حول</label>
<input class="f75"   type="" name="filed2" value="<?php  echo $row ['filed2']  ?>">
</div>
<div>
<br><br>
<label class="f25"> الكتب</label>
<input class="f75" type="" name="filed3" value="<?php  echo $row ['filed3']  ?>"> 
</div>
<div>
<br><br>
<label class="f25">  فريق العمل</label>
<input class="f75"   type="" name="filed4" value="<?php  echo $row ['filed4']  ?>">
</div>
<div>
<br><br>
<label class="f25"> الخطة</label>
<input class="f75" type="" name="filed5" value="<?php  echo $row ['filed5']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> اتصل بنا</label>
<input class="f75"   type="" name="filed6"  value="<?php  echo $row ['filed6']  ?>">
</div>
<div>
<label class="f25">  المكتبة واهدافها</label>
<input class="f75" type="" name="filed7"  value="<?php  echo $row ['filed7']  ?>"> 
</div>
<div>
<br><br>

<input style="width: 65%; background-color:green;" type="submit" name="" value="ارسال">
</div>
</form>
<?php  
}
?>
<!--
<a href="Sign_up.php?ret=">  هل لديك حساب</a>  -->
</div>

</center>
</body>
</html>









































<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Library Abdulmalek Qasem Hatem </title>
</head>
<style>
.f25
{
width: 400px;
float: right;
padding: 9px;
text-align: right;
}
.f75
{
width: 400px;
float: right;
padding: 9px;
text-align: right;
}
</style>
<body>
<center>
<?php 
//include 'css.css'; 
// include 'info.php';
 //session_start(); 
//session_unset();
?>
<div id="d5"; style=" width:100%; height: 500px;"> 
<br><br>
<h2> بيانات الدخول</h2>
<?php
// $sql="SELECT * FROM info  ";
// $result = $conn->query($sql);
// while($row = $result->fetch_assoc()){
?>
<form style="width: 500px;"  action="Fucts/chinge_info.php" method="post">
<div>
<br><br>
<label class="f25"> الرئيسية</label>
<input class="f75" type="" name="filed1" value="<?php  echo $row ['filed1']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> حول</label>
<input class="f75"   type="" name="filed2" value="<?php  echo $row ['filed2']  ?>">
</div>
<div>
<br><br>
<label class="f25"> الكتب</label>
<input class="f75" type="" name="filed3" value="<?php  echo $row ['filed3']  ?>"> 
</div>
<div>
<br><br>
<label class="f25">  فريق العمل</label>
<input class="f75"   type="" name="filed4" value="<?php  echo $row ['filed4']  ?>">
</div>
<div>
<br><br>
<label class="f25"> الخطة</label>
<input class="f75" type="" name="filed5" value="<?php  echo $row ['filed5']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> اتصل بنا</label>
<input class="f75"   type="" name="filed6"  value="<?php  echo $row ['filed6']  ?>">
</div>
<div>
<label class="f25">  المكتبة واهدافها</label>
<input class="f75" type="" name="filed7"  value="<?php  echo $row ['filed7']  ?>"> 
</div>
<div>
<br><br>

<input style="width: 65%; background-color:green;" type="submit" name="" value="ارسال">
</div>
</form>
<?php  
//}
?>

<a href="Sign_up.php?ret=">  هل لديك حساب</a>  
</div>

</center>
</body>
</html> -->