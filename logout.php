<meta charset="utf-8">
<?php
include('connectdb.php');
@session_start();

//session_destroy();
$sql = "delete from od where user='".$_SESSION['sname']."'" ;
mysqli_query($conn,$sql);

unset($_SESSION['sid']);
unset($_SESSION['sname']);

echo "<script>";
echo "window.location='index1.php';";
echo "</script>";
?>