<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart devbanban</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
      <form id="frmcart" name="frmcart" method="post" action="">
<table width="100%" border="0" align="center">
	<tr>
		<td height="40" colspan="7" align="center" bgcolor="#CCCCCC"><strong><b>ตะกร้าสินค้า</span></strong>
		</td>
	</tr>
	<tr>
		<td align="center" bgcolor="#EAEAEA"><strong>รูป</strong>
		</td>
		<td align="center" bgcolor="#EAEAEA"><strong>สินค้า</strong>
		</td>
		<td align="center" bgcolor="#EAEAEA"><strong>ราคา</strong>
		</td>
		<td align="center" bgcolor="#EAEAEA"><strong>จำนวน</strong>
		</td>
		<td align="center" bgcolor="#EAEAEA"><strong>ราคารวม</strong>
		</td>
	</tr>
	<?php
	include_once( "connectdb.php" );

	$sql = "SELECT * FROM od where user = '" . $_SESSION[ 'sname' ] . "'";
	$result = mysqli_query( $conn, $sql );
	while ( $data = mysqli_fetch_array( $result ) ) {
		?>
	<tr>
		<td><img src="image/<?=$data['image']?>" width="100">
		</td>
		<td>
			<?=$data['odName'];?>
		</td>
		<td>
			<?=$data['price'];?>บาท
		</td>
		<td>
			<?=$data['num'];?>
		</td>
		<td>
			<?=$data['total'];?>บาท
		</td>

	</tr>
	<?php }  ?>
	<tr>
	<?php
	$sql1 = "SELECT * FROM od where user = '" . $_SESSION[ 'sname' ] . "'";
	$result1 = mysqli_query( $conn, $sql1);
	
	while ( $data1 = mysqli_fetch_array( $result1, ) ) {
		
		$usertotal += $data1['total'];
	
	}
	
	?>
	<tr>
		
		<td>
		</td>
	</tr>
	</tbody>
</table>
		<h4 align="right">รวม  <?=$usertotal;?>  บาท</h4>
            </div>
          </div>
	
       
        <br>

      </form>
      <p align="center"> <a href="index1.php" class="btn btn-primary">กลับไปเลือกสินค้า</a> </p>
    </div>
  </div>
</div>
</body>
</html>
