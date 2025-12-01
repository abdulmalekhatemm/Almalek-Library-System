<!DOCTYPE html>
<html lang="en">
    <!-- This Book Of Search  about book -->
<head>
<title> بحث عن الكتاب</title>
<style type="text/css">
*{
direction :rtl;
}
table{
width: 100%;
}
tr , td{
padding: 10px;
}
tr:nth-child(even){
background-color: #f2f2f2;
}
th{
background-color: #04aa04;
}
</style>
</head>
<body>
<?php
include 'connect.php';
include 'css.css';
include 'info.php';
$almk_n1 =$_GET['almk_n1'];
?>
<center>
<div style="width: 500px; margin-top:100px;" >
<form method="get" action="book_search.php" >
<input type="" name="almk_n1" value="<?php  echo $almk_n1  ?>">
<input type="submit"  value="بحث"> 
</form>
</div>
<table>
<tr>
<th>م</th>
<th>اسم الكتاب</th>
<th>اسم المؤلف</th>
<th>اسم دار النشر</th>
<th>ارقم المرجعي</th>
<th>صورة الغلاف</th> 
<th>عدد النسخ</th>
</tr>
<?php // The_user = ''
$almk_n=0;
$sql="SELECT * FROM bookses WHERE 	book_name LIKE '%$almk_n1%'  OR 
                            author_name LIKE '%$almk_n1%'  OR
                            publishing_house_name LIKE '%$almk_n1%'  OR
                            reference_number LIKE '%$almk_n1%' OR
                            cover_photo LIKE '%$almk_n1%'  ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
    $almk_n=$almk_n + 1;
    $id= $row ['id'];	//the_book
    ?>  
<tr>
<td><?php echo $almk_n ; ?></td>
<td> <?php echo $row ['book_name']   ?></td>
<td> <?php echo $row ['author_name']   ?> </td>
<td> <?php echo $row ['publishing_house_name']   ?> </td>	
<td> <?php echo $row ['reference_number']   ?> </td>
<td>
<a href="img/book/ <?php echo  $row ['cover_photo']   ?>">
 <img  style="width:50px; height: 50px;" src="img/book/<?php echo $row ['cover_photo']?>"> 
 </a>
</td>
<td> <?php echo $row ['count_book']   ?> </td>
<?php
}
?> 
    </table>
    </center>
</body>
</html>