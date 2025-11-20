<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Abdulmalek Alhomedy</title>
</head>
<body>
<center>
<?php
include 'css.css';
include 'info.php';
$ret = $_GET['ret'];
?>
<div id="d5"; style="  width:100%; height: 500px;"> 
<br><br><br><br>
<?php
if($ret=='1')
{
    echo "كلمة السر غير متطابقتان";
}
?> 
<h2>  تسجيل مستخدم جديد</h2>
<form   style="width: 500px;" method="get" action="Fuct/add_users.php">
<div>
<?php
$ret=$_GET['ret'];
if($ret == 1){
   echo "اسم المستخدم موجود بالفعل";
}
if($ret==2){
    echo "عدم تطابق كلمة السر الجديد ";
 }
?>
</div>
<div >
<label class="f25" style=" "> اسم المستخدم </label>
<input class="f75" type="" name="The_user" placeholder="اسم المستخدم">
</div>
<div >
<br><br>
<label class="f25">الاسم  كامل  </label>
<input class="f75" type="" name="Full_Name" placeholder="الاسم كامل">
</div>
<div>
<br><br>
<label class="f25"> كلمة السر</label>
<input class="f75"   type="password" name="The_Password" placeholder="كلمة السر">
<?php include_once $The_Password??'' ?>
</div>
<div>
<br><br>
<label class="f25"> عادة كلمة السر</label>
<input class="f75"   type="password" name="Rest_password" placeholder="عادة كلمة السر">
</div>
<div>
<br><br>
<label class="f25" > الهاتف</label>
<input class="f75"   type="" name="The_phone" placeholder=" الهاتف">
</div><div>
<br><br> 
<label class="f25" name="Sateg" >المرحله</label>
<select  class="f75"> 
<option value=""> الاوالي</option>
<option value="">  الثانيه</option>
<option value=""> الثالية </option>
<option value=""> الرابعة</option>
<option value="">درسات عليا</option>
</select>
</div>
<div>
<br><br>
<label class="f25">الملاحظات</label>
<input class="f75"   type="" name="Notes" placeholder="الملاحظات">
</div>
<input style="width: 68%;" type="submit" name="" value=" حفظ بيانات المستخدم">
</div>
</form>

</div>
</center>
</body>
</html>