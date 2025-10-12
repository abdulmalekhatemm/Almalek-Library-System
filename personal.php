<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> الصفحة الشخصية</title>
<?php
include 'css.css';
include 'list.php';
?>
<style type="text/css">
button{
background-color: green;
border : none; 
color: white;
padding :15px 32px;
text-align: center;
display:inline;
margin: 4px 2px;
font: size 16px;
width: 100%;
}
a{
text-decoration:none;
}
</style>
</head>
<body>
<br><br> <br> <br><br>
<center>
<div style="width: 500px;">
<a href="pass.php"> <button> تغير كلمة السر </button>  </a> 
<!-- <?php
if($job=='مدير'){
?> -->
<a href="new_book.php?ret="> <button>   اضافة كتاب جديد</button></a> 
<a href="news.php?ret="><button> اضافة خبر</button></a> 
<a href="search_user.php?almk_n1="><button> المستخدمين</button></a> 
<a href="book_search.php?almk_n1="><button>   البحــــــــــــــث الكتب </button> </a> <!--search_books.php?ret-->
<a href="info.php"><button> التعديل على الصفحة الاولئ</button> </a>
<a href="search_us.php"><button> رسائل الزوار </button> </a>

<!-- <?php
}
?>  -->

</div>
</center>
</body>
</html>
