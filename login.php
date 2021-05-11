<?php
@session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" href="bootstrap.css" type="text/css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script language="javascript" src="bootstrap.css"></script>
</head>

<body>
	<form class="form-horizontal" action="" method="post">
		<fieldset>

			<!-- Form Name -->
			<center>
				<legend>Log-In</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="a">Username</label>
					<div class="col-md-4">
						<input id="a" name="a" type="text" placeholder="username" class="form-control input-md">

					</div>
				</div>

				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="b">Password</label>
					<div class="col-md-4">
						<input id="b" name="b" type="password" placeholder="password" class="form-control input-md">

					</div>
				</div>
				<a href="register.php" target="_blank">ต้องการสมัครสมาชิก?</a><br>



				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="Submit"></label>
					<div class="col-md-4">
						<button id="Submit" name="Submit" class="btn btn-success">Login</button>
					</div>
				</div>

		</fieldset>
	</form>
	<?php
	if ( isset( $_POST[ 'Submit' ] ) ) {
		include_once( "connectdb.php" );

		$sql = "SELECT * FROM `member` WHERE Username='" . $_POST[ 'a' ] . "' and Password='" . $_POST[ 'b' ] . "' LIMIT 1 ";
		$result = mysqli_query( $conn, $sql );
		$num = mysqli_num_rows( $result );

		if ( $num == 1 ) { //ถ้าเจอ
			$data = mysqli_fetch_array( $result );
			//สร้างตัวแปล
			$_SESSION[ 'sid' ] = $data[ 'UserID' ];
			$_SESSION[ 'sname' ] = $data[ 'Name' ];

			echo "<script>";
			// echo "alert('เข้าสู่ระบบสำเร็จ');";
			echo "window.location='index1.php';";
			echo "</script>";
		} else {
			echo "<script>";
			echo "alert('รหัสผ่านไม่ถูกต้อง');";
			echo "</script>";
		}
	}
	?>
</body>
</html>