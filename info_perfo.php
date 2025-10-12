<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Abdulmalek Qasem </title>
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
include 'css.css'; 
// include 'list.php';
//  session_start(); 
// session_unset();
?>
<div id="d5"; style=" width:100%; height: 500px;"> 
<br><br>
<h2> بيانات الدخول</h2>
<?php
// $sql="SELECT * FROM info  ";
// $result = $conn->query($sql);
// while($row = $result->fetch_assoc()){
?>
<form style="width: 500px;"  action="Fuct/chinge_info.php" method="post">
<div>
<br><br>
<label class="f25"> الرئيسية</label>
<input class="f75" type="" name="filed1" value=""> 
</div>
<div>
<br><br>
<label class="f25"> حول</label>
<input class="f75"   type="" name="filed2" value="">
</div>
<div>
<br><br>
<label class="f25"> الكتب</label>
<input class="f75" type="" name="filed3" value=""> 
</div>
<div>
<br><br>
<label class="f25">  فريق العمل</label>
<input class="f75"   type="" name="filed4" value="">
</div>
<div>
<br><br>
<label class="f25"> الخطة</label>
<input class="f75" type="" name="filed5" value=""> 
</div>
<div>
<br><br>
<label class="f25"> اتصل بنا</label>
<input class="f75"   type="" name="filed6"  value="">
</div>
<div>
<label class="f25">  المكتبة واهدافها</label>
<input class="f75" type="" name="filed7"  value=""> 
</div>
<div>
<br><br>

<input style="width: 65%; background-color:green;" type="submit" name="" value="ارسال">
</div>
</form>
<?php  
// }
?>
<!--
<a href="Sign_up.php?ret=">  هل لديك حساب</a>  -->
</div>

</center>
</body>
</html>