<!DOCTYPE html>
<html lang="en">
<head>
<title> بحث عن المستخدمين</title>
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
if(isset($_GET['almk_n1'])==''){
 echo "   no value ";
}
if(isset($_GET['almk_n1'])!==''){
$almk_n1 = "  " ;
$almk_n1 = $_GET['almk_n1'];
}
?>
<center>
<div style="width: 500px; margin-top:100px;" >
<form  method="get" action="search_user.php" >
<input type="" name="almk_n1" value="<?php  echo $almk_n1  ?>">
<input type="submit"  value="بحث"> 
</form>
</div>
    <table>
        <tr>
            <th>م</th>
            <th>اسم المستخدم</th>
            <th>الاسم كامل</th>
            <th>الدور الوظيفى</th>
            <th>الهاتف</th>
            <th>المرحله</th>
            <th>الملاحظات</th>
        </tr>
        <?php 
// The_user = ''
$almk_n=0;
$sql=" SELECT * FROM users WHERE Full_Name LIKE '%$almk_n1%'   ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$almk_n = $almk_n + 1;
?>  
<tr>
        <td> <?php echo $almk_n ; ?></td>
        <td> <?php echo $row ['The_user']   ?></td>
        <td> <?php echo $row ['Full_Name']   ?> </td>
        <td> 
            <form action="Fuct/updata_users" method="post">
                <input type="hidden"  name="id" value=" <?php echo $row ['id'] ;  ?>">
        <select name="job">
            <option value="<?php echo $row['job']   ?>"><?php echo  $row ['job']?>
        
        </option>
            <option value="طالب">طالب</option>
            <option value="مدير">مدير</option>
            <option value="موظف">موظف</option>
        </select>
        <input type="submit"  value="حفظ">
        </form>
    </td>

        <td> <?php echo $row ['The_phone']   ?> </td>	
        <td> <?php echo $row ['Sateg']   ?> </td>
        <td> <?php echo $row ['Notes']   ?> </td>
    </tr>
    <?php
}
    ?> 
    </table>
    </center>
</body>
</html>