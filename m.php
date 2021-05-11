<?php
@session_start();
include('check_login.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Order food</title>
		<link href="bootstrap.css" rel="stylesheet">
</head>

<body>
	<?php
	
				include( 'connectdb.php' );
				$sql = "SELECT * FROM `food` where food_id = '".$_GET['foodid']."'";
				$result = mysqli_query( $conn, $sql );
				$data = mysqli_fetch_array( $result );
?>
	
<br>
	
   <center> <img src="../MeatKing-master/menu/image/<?=$data['image'];?>" width="300"><br>
	   <?=$data['detail'];?><br><?=$data['price'];?> บาท
	</center>
	<br>
    
    
    
    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">ชื่อ - นามสกุล</label>  
  <div class="col-md-4">
  <input id="fullname" name="fullname" type="text" placeholder="ชื่อ" class="form-control input-md"  required value="<?php echo $_SESSION[ 'sname' ];?>"readonly>   
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="num">จำนวน</label>  
  <div class="col-md-4">
  <input id="num" name="num" min="1" max="20" type="number" placeholder="จำนวนจาน" class="form-control input-md" required="">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tb">หมายเลขโต๊ะ</label>  
  <div class="col-md-4">
  <input id="tb" name="tb" min="1" max="20" type="number" placeholder="หมายเลขโต๊ะ" class="form-control input-md" required="">
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="menu">เมนู</label>  
  <div class="col-md-4">
  <input id="menu" name="menu" type="text" placeholder="ชื่อ" class="form-control input-md"  required value="<?=$data['food_name'];?>"readonly>
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">สั่งอาหาร</button>
  </div>
  </div>



</fieldset>
</form>
<!-- Button -->
<a href="http://localhost/ip/MeatKing-master/index1.php"><div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-danger">กลับหน้าหลัก</button>
  </div>
</div></a>

<?php
	if(isset($_POST['Submit'])){
		$total = $_POST['num'] * $data['price'];
		$sql1 = "insert into od values('','".$data['image']."','".$_POST['menu']."','".$data['price']."','".$_POST['num']."','".$_POST['tb']."',
		'".$_POST['fullname']."','".$total."')";
		mysqli_query($conn, $sql1) or die ('เพิ่มข้อมูลไม่ได้');
	
		echo "<script>";
        echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "location='index1.php';";
		echo "</script>";
  }
?>

<body background="../MeatKing-master/image/100.jpg">

</body>
</html>
