<?php 
//include 'css.css';  
// session_unset();
/* تستخدم لازلة جميع المتغيرات المسجلة في الجلسة الحالية */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>Page Login</title>
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

<div id="d5"; style="  width:100%; height: 500px;"> 
<br><br>
<h2> بيانات الدخول</h2>
<form style="width: 500px;" method="POST" action="Fuct/test.php">
<div >
<br><br>
<label class="f25"> اسم المستخدم </label>
<input class="f75" type="" name="almk_n1"> 
</div>
<div>
<br><br>
<label class="f25"> كلمة السر </label>
<input class="f75"   type="" name="almk_n2">
</div>
<div>
<input style="width: 65%;" type="submit" name="" value="دخول">
</div>
</form>
<a href="Sign_up.php?ret=">  هل لديك حساب</a>
</div>
</body>
</html>