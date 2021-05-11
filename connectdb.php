<meta charset="utf-8">
<?php
	$host="127.0.0.1";
	$user="root";
	$pwd="";
	$db="foods";
	
	
	$conn=mysqli_connect($host,$user,$pwd)or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,$db) or die("เลือก database ไม่ได้");
	//แสดงผลข้อมูลภาษาไทย//
 mysqli_query($conn,"SET NAMES utf8");
 ?>