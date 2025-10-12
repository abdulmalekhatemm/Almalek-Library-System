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
$sql=" SELECT * FROM  borrow_a_book WHERE the_user LIKE '%$almk_n1%'   ";
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
<!--
<a href="borrow_a_book.php"><button> طلب الاستعاره</button> </a>
<a href="borrow_a_book2.php"><button> طلب الاستعاره</button> </a>
?php
if($job=='طالب'){
  
?>

?php
}
<th>طلب</th>
<th>طرف الطالب</th>
<th>تم الارجاع</th>
<th>تالف</th>
<th>الرصيد الحالي</th>
?>
<div >
<br><br><br>
<label class="f25">  الاكثر استعارة</label>
<input class="f75"   type="" name="filed8"  value="<?php  echo $row ['filed8']  ?>">
</div>
<div >
<br><br>
<label class="f25">  العمل المكتبة</label>
<input class="f75" type="" name="filed9"  value="<?php  echo $row ['filed9']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> خطة العمل 1</label>
<input class="f75"   type="" name="filed10"  value="<?php  echo $row ['filed10']  ?>">
</div>
<div >
<br><br>
<label class="f25"> خطة العمل 2</label>
<input class="f75" type="" name="filed11"  value="<?php  echo $row ['filed11']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> خطة العمل 3</label>
<input class="f75"   type="" name="filed12"  value="<?php  echo $row ['filed12']  ?>">
</div>
<div >
<br><br>
<label class="f25"> خطة العمل 4</label>
<input class="f75" type="" name="filed13"  value="<?php  echo $row ['filed13']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> خطة العمل5</label>
<input class="f75"   type="" name="filed14"  value="<?php  echo $row ['filed14']  ?>">
</div>
<div >
<br><br>
<label class="f25"> خطة العمل 6</label>
<input class="f75" type="" name="filed15"  value="<?php  echo $row ['filed15']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> خطة العمل 7</label>
<input class="f75"   type="" name="filed16"  value="<?php  echo $row ['filed16']  ?>">
</div>
<div>
<br><br>
<label class="f25"> اتصل بنا رايك بهذا</label>
<input class="f75" type="" name="filed17"  value="<?php  echo $row ['filed17']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> الاسم</label>
<input class="f75"   type="" name="filed18"  value="<?php  echo $row ['filed18']  ?>">
</div>
<div >
<br><br>
<label class="f25"> العنوان</label>
<input class="f75" type="" name="filed19"  value="<?php  echo $row ['filed19']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> الاميل</label>
<input class="f75"   type="" name="filed20"  value="<?php  echo $row ['filed20']  ?>">
</div>
<div >
<br><br>
<label class="f25"> الرسالة</label>
<input class="f75" type="" name="filed21"  value="<?php  echo $row ['filed21']  ?>"> 
</div>
<div>
<br><br>
<label class="f25"> زر الارسال</label>
<input style="width: 65%;" type="submit" name="" value="دخول">
</div>
-->