<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>news</title>
</head>
<body>
   <!-- The News  -->
<style>
.f25{
width: 75px;
float: right;
padding: 0px;
text-align: right;
}
.f75{
width: 80%;
float: right;
text-align: right;
padding: 9px;
text-align: right;
}</style>
<center>
<?php
include 'css.css';
include 'list.php';
$ret = $_GET['ret'];
?>
<div id="d5"; style="  width:100%; height: 500px;"> 
<br><br><br><br>
<h2>  تسجيل مستخدم جديد</h2>
<form   style="width: 500px;" method="POST" action="Fuct/add_news.php">
<div>
<?php
$ret=$_GET['ret'];
if($ret== 1){
   echo " تم  اضافة الخبر";
}
?>
</div>
<div >
<label class="f25" style=" "> الخبر</label>
<textarea  style=" width: 95%;" name="news"></textarea>
</div>
<div >
<br><br>
<input   class="f75" style="width: 95%;" type="submit"  value=" حفظ الخبر">
</div>
</form>
</div>
</center>
</body>
</html>