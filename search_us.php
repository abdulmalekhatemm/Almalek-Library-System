<?php //error_reporting(0);  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> رسائل الزوار</title>
<style type="text/css">
*{
direction :rtl;
}
table
{
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
include 'list.php';
$almk_n5 = "  ";
$almk_n5 =$_GET['almk_n5'];
 if(empty(isset($_GET['almk_n5']))){
    echo  " no fount   ";
}
if(isset($_GET['almk_n5'])!==''){
$almk_n5 =$_GET['almk_n5'];
}  
?>
<center>
<div style="width: 500px; margin-top:100px;" >
<form  method="get" action="search_us.php" >
<input type="" name="almk_n5" value="<?php  echo $almk_n5;  ?>">
<input type="submit"  value="بحث"> 
</form>
</div>
<table>
<tr>
<th>م</th>
<th>الاسم</th>
<th>العنوان</th>
<th>الاميل</th>
<th>الرساله</th>
<th>الحذف</th>
</tr><?php
$almk_n=0;
$sql="SELECT * FROM us WHERE the_name LIKE '%$almk_n5%'  OR  adress  LIKE '%$almk_n5%' 
 OR  e_mail  LIKE '%$almk_n5%'    OR msg   LIKE '%$almk_n5%' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$almk_n = $almk_n + 1;
$id =$row['id'];
?>  
<tr>
<td> <?php echo $almk_n ; ?></td>
<td> <?php echo $row ['the_name']   ?></td>
<td> <?php echo $row ['adress']   ?> </td>
<td> <?php echo $row ['e_mail']   ?> </td>	
<td> <?php echo $row ['msg']   ?> </td>
<td> <a href="Fuct/del_us.php?almk_n5=<?php echo $id;  ?>">حذف</a> </td>
</tr>
<?php
}
?> 
</table>
</center>
</body>
</html>