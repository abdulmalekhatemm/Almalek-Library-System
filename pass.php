<?php 
include 'css.css';  
include 'info.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
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
<div id="d5"; style="  width:100%; height: 500px;"> 
<br><br>
<h2> تغير كلمة  السر</h2>
<form style="width: 500px;" method="POST" action="Fuct/change.php">
<div>
<?php
if(isset($_GET['ret']) == '' )
{
 echo "   ";
}
elseif (isset($_GET['ret']) !== '' ) {
  $ret=$_GET['ret'];
}
elseif($ret==1){
       echo " كلمة السر القديمة خطا";
}
elseif($ret==2){
   echo " عدم تطابق كلمة السر الجديد ";
 }
?>
</div>
<div >
<br><br>
<label class="f25"> كلمة السر القديمة</label>
<input class="f75" type="" name="almk_n1"> 
</div>
<div>
<br><br>
<label class="f25"> كلمة السر   الجديد</label>
<input class="f75"   type="" name="almk_n2">
</div>
<div>
<br><br>
<label class="f25"> كلمة السر  اعادة </label>
<input class="f75"   type="" name="almk_n3">
</div>
<div>
<input style="width: 65%;" type="submit" name="" value="دخول">
</div>
</form>
<!-- <a href="Sign_up.php">  هل لديك حساب</a> -->
</div>
</center>
</body>
</html>