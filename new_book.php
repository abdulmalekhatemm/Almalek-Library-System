<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>كتاب جديد</title>
</head>
<body>
<center>
<?php
include 'css.css';
include 'info.php';
$ret =$_GET['ret'];
?>
<div id="d5"; style="  width:100%; height: 500px;"> 
<br><br><br><br>
<h2> اضافة كتاب جديد</h2>
<form   style="width: 500px;" method="post" action="Fuct/add_book.php" enctype="multipart/form-data">
<div>
<?php
$ret=$_GET['ret'];
if($ret==2){
   echo "تم اضافة كتاب بالفعل";
}
if($ret==1){
    echo " الكتاب مضافة مسبقان";
 }
?>
</div>
<div >
<label class="f25" style=" "> اسم الكتاب</label>
<input class="f75" type="" name="book_name" placeholder="اسم الكتاب">
</div>
<div >
<br><br>
<label class="f25"> اسم المؤلف    </label>
<input class="f75" type="" name="author_name" placeholder="اسم المؤلف ">
</div>
<div>
<br><br>
<label class="f25"> اسم دار النشر</label>
<input class="f75"   type="" name="publishing_house_name" placeholder="اسم دار النشر " >
</div>
<div>
<br><br>
<label class="f25"> رقم المرجعي</label>
<input class="f75"   type="" name="reference_number" placeholder="رقم المرجعي">
</div>
<div>
<br><br>
<label class="f25"> عدد الكتاب</label>
<input class="f75"   type="" name="count_book" placeholder=" عدد الكتاب">
</div>
<div>
<br><br>
<label class="f25" > صورة الغلاف</label>
<input class="f75"   type="file" name="cover_photo" >
</div>

<div>
<input style="width: 68%;" type="submit" name="" value="  اضافة كتاب">
</div>
</form>
</div>
</center>
</body>
</html>
