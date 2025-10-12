<?php
include '../connect.php';
$id = $_POST['id'];
$order_status = $_POST['order_status'];
$notes = $_POST['notes'];
$borrowing_date = $_POST['borrowing_datek'];
$replay_date= $_POST['replay_date'];
$securitys= $_POST['securitys'];	
$sql ="UPDATE borrow_a_book SET order_status='$order_status',  notes='$notes' ,
borrowing_date='$borrowing_date', replay_date='$replay_date',
securitys ='$securitys'  where id ='$id'";
$result = $conn->query($sql);
header('Location:http://localhost/Project_Library/updata_borrow_a_book.php');
//echo  $count ;               

?>
<!--

<td> <?php echo $row ['count_book']   ?> </td>	
<td>
<?php
$sql1="SELECT * FROM  borrow_a_book WHERE the_book  ='$id'  and  order_status='طلب'";
$result1 = $conn->query($sql1);
$count1 = $result1->num_rows;
echo $count1;

?>
</td>

<td>
<?php
$sql2="SELECT * FROM  borrow_a_book WHERE the_book  ='$id'  and  order_status='طلب'";
$result2 = $conn->query($sql2);
$count2 = $result1->num_rows;
echo $count2;

?>
</td>
<td>
<?php
$sql3="SELECT * FROM  borrow_a_book WHERE the_book  ='$id'  and  order_status='طلب'";
$result3 = $conn->query($sql3);
$count3 = $result1->num_rows;
echo $count3;

?>
</td>

<td>
<?php
$sql4="SELECT * FROM  borrow_a_book WHERE the_book  ='$id'  and  order_status='طلب'";
$result4 = $conn->query($sql4);
$count4 = $result1->num_rows;
echo $count4;

?>
</td>

<td> <?php echo $row ['count_book'] - $count2 - $count4 ?>  </td>
</tr>
<a href="Fuct/borrow_a_book.php?id=<?php echo $row['id'];   ?>"><button>طلب استعارة </button></a>
$filed12 =$row ['filed12'];
$filed13 =$row ['filed13'];
$filed14 = $row ['filed14'];
$filed15 =$row ['filed15'];
$filed16 = $row ['filed16'];
$filed17 =$row ['filed17'];
$filed18 =$row ['filed18'];
$filed19 = $row ['filed19'];
$filed20 = $row ['filed20'];
$filed21 =$row ['filed21'];
$filed22 =$row ['filed22'];
-->