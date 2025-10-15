<?php 
include 'info.php';
include 'css.css';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<title>US</title>
</head>
<body>
<center>
    <div id="d5"; style="background: #008b8b ; width:100%; height: 500px;"> 
        <br><br>
    <h2> اتصل بنا رايك بهذا</h2>
    
<form style="width: 500px;" action="Fuct/add_us" method="post">
<div >
<label class="f25"> الاسم</label>
<input class="f75" type="" name="the_name">
</div>
<div><br><br>
<label class="f25"> العنوان</label>
<input class="f75"   type="" name="adress">
</div>
<div>
    <br><br>
<label class="f25" >الاميل </label>
<input class="f75"   type="email" name="e_mail">
</div> 
<div>
    <br><br>
<label class="f25"> الرساله</label>
<input class="f75"  type="" name="msg">
</div>
<div>
<input style="width: 90%;" type="submit" name="" value="ارسل">
</div>
</form>
</div>
</center>
  

</body>
</html>