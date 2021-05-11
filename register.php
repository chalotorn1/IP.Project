
<html>
<head>
<meta charset="utf-8">
<link href="bootstrap.css" rel="stylesheet">

 
<title>สมัครสมาชิก</title>
</head>
<body background="">
<body>

<form class="form-horizontal" action="" method="post">
<fieldset>

<!-- Form Name -->
<center><legend> สมัครสมาชิก</legend></center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="a">Username</label>  
  <div class="col-md-4">
  <input id="a" name="a" type="text" placeholder="กำหนด Username ของคุณ" class="form-control input-md" required>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="b">Password</label>
  <div class="col-md-4">
    <input id="b" name="b" type="password" placeholder="กำหนด Password ของคุณ" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="c">ชื่อ - นามสกุล</label>  
  <div class="col-md-4">
  <input id="c" name="c" type="text" placeholder="กรอกชื่อ - นามสกุล" class="form-control input-md" required>
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-8">
    <button id="Submit" name="Submit" class="btn btn-success">บันทึก</button>
    <a href="login.php"><button class="btn btn-danger">ยกเลิก</button></a>
  </div>
</div>

</fieldset>
</form>


<?php
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		
		$sql = "insert into member values('".$_POST['x']."','".$_POST['a']."','".$_POST['b']."','".$_POST['c']."')";
		mysqli_query($conn, $sql) or die ('เพิ่มข้อมูลไม่ได้');
		
		
		echo "<script>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "window.location='login.php';";
		echo "</script>";
	}
?>

</body>
</html>