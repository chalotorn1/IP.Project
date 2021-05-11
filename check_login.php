<meta charset="utf-8">
<?php
@session_start();

//echo $_SESSION['aid']."<br>".$_SESSION['aname'];

if(empty($_SESSION['sid'])){
echo "<script>";
echo "location='login.php';";
echo "</script>";
}
?>
