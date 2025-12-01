<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css.css">
<!-- This Page For View Books  -->
<title>Books</title>
</head>
<body>
<?php 
/**Including Pages For Used */ 
include 'css.css'; 
include 'info.php';  ?>
<center>
<div id="d2"; style="background: #0000ff ; width:100%; height:985px;">
<br><br>
<h2>الكتب الاكثر مبيعا</h2>
<?php
$sql="SELECT * FROM bookses limit 8 ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
?>  
<div style="float: left;  width: 25%;">
<img  src="img/book/<?php echo $row['cover_photo']; ?>" style=" width: 200px; height: 120px;"> 
<h2>    <?php echo $row['book_name']; ?></h2>
<label> <?php echo $row['author_name']; ?> </label><br> 
<label> <?php echo $row['publishing_house_name']; ?> </label><br>
</div>

<?php
}
?>
</div> 
</center>
</body>
</html>

<!--
<a href="
?php  if(!isset($_SESSION['onlinelibrary'])){
    echo 'login.php';
}
if(isset($_SESSION['onlinelibrary'])){
    echo 'Fuct/borrow_a_book.php?id='.$row['id'];
}

?>"> <button>طلب استعارة </button></a>
-->