<!DOCTYPE html>
<html lang="en">
<head>
<title>طلبات الاستعاره</title>
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
include 'list.php';
$almk_n1 =$_GET['almk_n1'];
?>
<center>
<div style="width: 500px; margin-top:100px;" >
<form  method="get" action="borrow_a_book.php" >
<input type="" name="almk_n1" value="<?php  echo $almk_n1  ?>">
<input type="submit"  value="بحث"> 
</form>
</div>
    <table>
        <tr>
            <th>م</th>
            <th>اسم الطلب</th>
            <th>اسم الكتاب</th>
            <th>حاله الطلب</th>
            <th>ملاحظات</th>
            <th>تاريخ الاستعاره</th>
            <th>تاريخ الاعادة</th>
            <th>الضمان</th>
            <th>حفظ</th>
        </tr>
        <?php 
$almk_n=0;
$sql=" SELECT * FROM  borrow_a_book WHERE the_user LIKE '%$almk_n1%'  and The_user ='$almk_n1' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
$almk_n = $almk_n + 1;
$order_status = $row['order_status'] ;
$the_day= (new \DateTime())->format('Y-m-d');
$replay_date=$row['replay_date'] ; 
?>  
<tr>
        <td> <?php echo $almk_n ; ?></td>
        <td> <?php echo $row ['the_user']   ?></td>
        <td> <?php echo $row ['the_book']   ?> </td>
        <td> <?php echo $row ['order_time']   ?> </td>
        <td> 
            <form action="Fuct/updata_borrow_a_book.php" method="post">
                <input type="hidden"  name="id" value=" <?php echo $row ['id'] ;  ?>">
        <select name="order_status">
            <option value="<?php echo $row['order_status']   ?>"><?php echo  $row ['job']?>
        
        </option>
            <option value="طلب">طلب</option>
            <option value="طلب">طلب</option>
            <option value="طرف الارجاع">طرف الارجاع</option>
            <option value="تم الارجاع">تم الارجاع</option>
            <option value="تالف">تالف</option>
        </select>
       
    </td>

    <td> <input type=""  name="notes" value=" <?php echo $row ['notes'] ;  ?> "></td>	
    <td><input type="date"  name="borrowing_date" value=" <?php echo $row ['borrowing_date'] ;  ?>"> </td>
    <td  <?php  if($the_day>=$replay_date and $order_status=='' ){
        ?>
        style="background-color: red ;".

        <?php
 }?>
        >

        </td>
        <td><input type="date"  name="replay_date" value=" <?php echo $row ['replay_date'] ;  ?>"> </td>
        <td> <input type=""  name="securitys" value=" <?php echo $row ['securitys'] ;  ?> "></td>
        <td>   <input type="submit"  value="حفظ"></td>
        </tr>
    </form>
    <?php
}
    ?> 
    </table>
    </center>
</body>
</html>
$filed9  = $_POST['filed9'];
$filed10 = $_POST['filed10'];
$filed11 = $_POST['filed11'];
$filed12 = $_POST['filed12'];
$filed13 = $_POST['filed13'];
$filed14 = $_POST['filed14'];
$filed15 = $_POST['filed15'];
$filed16 = $_POST['filed16'];
$filed17 = $_POST['filed17'];
$filed18 = $_POST['filed18'];
$filed19 = $_POST['filed19'];
$filed20 = $_POST['filed20'];
$filed21 = $_POST['filed21'];
$filed22 = $_POST['filed22'];
============================
filed9 = '$filed9', filed10  =   '$filed10', filed11 = '$filed11',filed12 = '$filed12',
filed13 = '$filed13', filed14 = '$filed14',filed15 = '$filed15',filed16 = '$filed16',
filed17 = '$filed17', filed18 = '$filed18',filed19 = '$filed19',filed20 = '$filed20',
filed21 = '$filed21', filed22 = '$filed22' ";