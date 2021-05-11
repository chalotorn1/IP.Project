<?php
@session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> 
<html class="no-js"> 
<head>
    <title>MeatKing</title>

    <!-- meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

<!-- css -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/main.css">

<!-- google font -->
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>

<!-- js -->
<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120">
	<div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header visible-xs">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                </button>
			


				<a class="navbar-brand" href="#"><h2>THAI RESTAURANT</h2></a>
			</div>
			<!-- navbar-header -->
			<div id="navbar" class="navbar-collapse collapse">
				<div class="hidden-xs" id="logo"><a href="#header">
                <img src="img/logo.png" alt="">
            </a>
				

				</div>


				<ul class="nav navbar-nav navbar-right">
					<?php
					if ( empty( $_SESSION[ 'sname' ] ) ) {
						?>
					<li><a href="#story">Story</a>
					</li>
					<?php }
				else{
				?>
					<a href="shopping.php"><input type="button" class="btn-success" value="เข้าดูออเดอร์"></a>
					<?php } ?>

					<li><a href="#reservation">Reservation</a>
					</li>
					<li><a href="#chefs">Our Chefs</a>
					</li>


					<li><a href="#food-menu">Food Menu</a>
					</li>
					<li><a href="#special-offser">Special Offers</a>
					</li>
					<?php
					if ( empty( $_SESSION[ 'sname' ] ) ) {
						?>
					<a class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        <input type="button" class="btn-success" value="LOG-IN">
      </a>
				

					<div class="dropdown-menu">
						<button><a class="dropdown-item" href="login.php">USER</a></button>
						<button><a class="dropdown-item" href="admin/menu.php">ADMIN</a></button>
					</div>
					</a>
					<?php }
				else{
				?>
					<a href="logout.php"><input type="button" class="btn-danger" value="Logout"></a>
					<?php } ?>

					<!--fix for scroll spy active menu element-->
					<li style="display:none;"> </li>

				</ul>

			</div>
			<!--/.navbar-collapse -->
		</div>
		<!-- container -->
	</div>
	<!-- menu -->

	<div id="header">
		<div class="bg-overlay"></div>
		<div class="center text-center">
			<div class="banner">
				<?php
				if ( empty( $_SESSION[ 'sname' ] ) ) {
					?>
				<h1 class="">THAI RESTAURANT</h1>
				<?php }
				else{
				?>
				<h1 class="">
					<?=$_SESSION['sname'];?>
				</h1>
				<?php } ?>
			</div>
			<div class="subtitle">
				<h4>WELCOME TO THAI FOOD LAND</h4>
			</div>
		</div>
		<div class="bottom text-center">
			<a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
		</div>
	</div>
	<!-- /#header -->
	<div id="food-menu" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Food Menu</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
	<div class="row">
		<div class="col-sm-3 col-md-3">
			<div class="menu-images "><img src="img/4.jpg" alt="Hot Drinks">
			</div>
			<div class="menu-titles">
				<h1 class="">อาหาร</h1>
			</div>
			<div class="menu-items ">
				<ul>
					<li>ต้มยำกุ้ง</li>
					<li>แกงเขียวหวาน</li>
					<li>ปลาทับทิมสามรส</li>
					<li>ต้มข่าไก่</li>
					<li>ขนมจีนน้ำยา</li>

				</ul>
			</div>
		</div>

		<div class="col-sm-3 col-md-3">
			<div class="menu-images "><img src="img/3.jpg" alt="Ice Drinks">
			</div>
			<div class="menu-titles">
				<h1 class="">ของหวาน</h1>
			</div>
			<div class="menu-items ">
				<ul>
					<li>บัวลอย</li>
					<li>ข้าวเหนียวมะม่วง</li>
					<li>กล้วยบวชชี</li>
					<li>สาคูเปียกมะพร้าวอ่อน</li>
					<li>ลูกชุบ</li>


				</ul>
			</div>
		</div>
		<div class="col-sm-3 col-md-3">
			<div class="menu-images "><img src="img/1.jpg">
			</div>
			<div class="menu-titles">
				<h1 class="">เครื่องดื่มสมุนไพร่</h1>
			</div>
			<div class="menu-items ">
				<ul>
					<li>น้ำใบเตย</li>
					<li>น้ำกระเจี๊ยบ</li>
					<li>น้ำดอกอัญชัน</li>
					<li>น้ำเก๊กฮวย</li>
					<li>น้ำลำไย</li>

				</ul>
			</div>
		</div>
		<div class="col-sm-3 col-md-3">
			<div class="menu-images "><img src="img/2.jpg" alt="Smoothies">
			</div>
			<div class="menu-titles">
				<h1 class="">ข้าว</h1>
			</div>
			<div class="menu-items ">
				<ul>
					<li>ข้าวสวย</li>
					<li>ข้าวมัน</li>
					<li>ข้าวสวยอัญชัน</li>
					<li>ข้าวเหนียว</li>
					<li>ข้าวกล้อง</li>

				</ul>
			</div>
		</div>
	</div>
	</div>
	<!-- /.container -->
	<section class="ss-style-bottom"></section>
	</div>
	<!--/#food-menu-->




	<div id="special-offser" class="parallax pricing">
		<div class="container inner">

			<h2 class="section-title text-center">Special Offers</h2>
			<p class="lead main text-center">There is no sincerer love than the love of food!</p>



			<div class="row">
				<?php
				include( 'connectdb.php' );
				$sql = "SELECT * FROM `food`";
				$result = mysqli_query( $conn, $sql );
				while ( $data = mysqli_fetch_array( $result ) ) {

					?>
				<div class="col-md-6 col-sm-6">

					<div class="pricing-item">

						<a><img class="img-responsiven img-thumbnail" src="admin/image/<?=$data['image']?>"></a>

						<div class="pricing-item-details">

							<h3>
								<?php echo $data['food_name'];?>
							</h3>
							<h5>
								<?php echo $data['detail'];?>
							</h5>
							<a class="btn btn-danger" href="m.php?foodid=<?=$data['food_id'];?>">Order now</a>
							<div class="clearfix"></div>
						</div>


						<span class="hot-tag br-red">
							<?=$data['price'];?>
						</span>
						<div class="clearfix"></div>
					</div>
				</div>


				<?php }  ?>

			</div>
		</div>
	</div>





	<!-- /.container -->
	</div>
	<!-- /#special-offser -->
	<br><br><br>




	<div id="reservation" class="black-wrapper">
		<section class="ss-style-top"></section>
		<div class="container inner">
			<h2 class="section-title text-center">Reservation</h2>
			<p class="lead main text-center">Reserve your table &amp; enjoy lorem Ipsum</p>
			<div class="row">
				<div class="col-md-6">
					<form class="form form-table" method="post" name="">
						<div class="form-group">
							<h4>จองโต๊ะ</h4>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 form-group">
								<label class="sr-only" for="first_name1">ชื่อ - นามสกุล</label>
								<input class="form-control hint" type="text" id="a" name="a" placeholder="ชื่อ - นามสกุล" required="">
							</div>

						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 form-group">
								<label class="sr-only" for="email1">email</label>
								<input class="form-control hint" type="email" id="c" name="c" placeholder="email" required="">
							</div>
							<div class="col-lg-6 col-md-6 form-group">
								<label class="sr-only" for="phone1">เบอร์โทรศัพท์</label>
								<input class="form-control hint" type="number" id="d" name="d" placeholder="เบอร์โทรศัพท์" required="">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6 col-md-6 form-group">
								<label class="sr-only" for="reserv_date1">วันที่</label>
								<input class="form-control datepicker hasDatepicker hint" type="date" id="b" name="b" placeholder="วันที่" required="">
							</div>
							<div class="col-lg-6 col-md-6 form-group">
								<label class="sr-only" for="numb_guests1">จำนวนคน</label>
								<input class="form-control hint" type="number" id="e" name="e" placeholder="จำนวนคน" required="">
							</div>


						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12"> </div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" id="Submit" name="Submit" class="btn btn-danger btn-lg">Reserve</button>
							</div>
						</div>
					</form>

					<?php
					if ( isset( $_POST[ 'Submit' ] ) ) {
						include_once( 'connectdb.php' );

						$sql = "insert into teble values('" . $_POST[ 'a' ] . "','" . $_POST[ 'b' ] . "','" . $_POST[ 'c' ] . "',
    '" . $_POST[ 'd' ] . "','" . $_POST[ 'e' ] . "')";

						mysqli_query( $conn, $sql )or die( 'เพิ่มข้อมูลไม่ได้' );


						echo "<script>";
						echo "alert('เพิ่มข้อมูลสำเร็จ');";
						echo "window.location='index1.php';";
						echo "</script>";
					}
					?>









				</div>
				<!-- col-md-6 -->
				<div class="col-md-5 col-md-offset-1">

					<h3><i class="fa fa-clock-o fa-fw"></i>Hours</h3>
					<h4>Breakfast</h4>
					<p>Mon to Fri: 7:30 AM - 11:30 AM<br>Sat &amp; Sun: 8:00 AM - 9:00 AM</p>
					<h4>Lunch</h4>
					<p>Mon to Fri: 12:00 PM - 5:00 PM</p>
					<h4>Dinner</h4>
					<p>Mon to Sat: 6:00 PM - 1:00 AM<br>Sun: 5:30 PM - 12:00 AM</p>

					<h3><i class="fa fa-map-marker fa-fw"></i>Directions</h3>
					<p>288/77 Kham Riang Subdistrict, Kantharawichai District Mahasarakham 44150</p>

					<h3><i class="fa fa-mobile fa-fw"></i>Contacts</h3>
					<p>Email: <a href="mailto:yourname@meatking.com">firstnumber1th@gmail.com</a>
					</p>
					<p>Phone: +6698 757 2104</p>

				</div>
				<!-- col-md-6 -->
			</div>
			<!-- /.services -->
		</div>
		<!-- /.container -->
		<section class="ss-style-bottom"></section>
	</div>
	<!-- #reservation -->



	<!-- Services Section -->
	<center>
		<div id="chefs" class="parallax pricing">
			<div class="container inner">
				<h2 class="text-center mt-0">Your Team</h2>
				<hr class="divider my-4">
				<div class="row text-center chefs">
					<div class="row">
						<div class="col-lg-3 col-md-6 text-center">
							<div class="mt-5"> <img src="img/chefs/3.jpg" width="150px">
								<h3 class="h4 mb-2">Ittipon Meewang <br>60010912656 BC602</h3>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="mt-5"> <img src="img/chefs/2.jpg" width="150px">
								<h3 class="h4 mb-2">Sathianpong Sangseema<br>60010912701 BC602</h3>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="mt-5"> <img src="img/chefs/1.jpg" width="150px">
								<h3 class="h4 mb-2">Chalotorn Ploysupa<br>60010912681 BC602</h3>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 text-center">
							<div class="mt-5"> <img src="img/chefs/4.jpg" width="100px">
								<h3 class="h4 mb-2">Kittisakl Phitsuwan<br>59010912701 BC591</h3>
							</div>
						</div>
					</div>
				</div>
				</section>
	</center>
	</div>
	<!-- /#chefs -->


	<footer id="footer" class="dark-wrapper">
		<section class="ss-style-top"></section>
		<div class="container inner">
			<div class="row">
				<div class="col-sm-6">
					&copy; BC602
					<br/>Theme By <a class="themeBy">ThemeWagon</a>
				</div>
				<div class="col-sm-6">
					<div class="social-bar">
						<a href="https://www.instagram.com/accounts/login/?hl=th" class="fa fa-instagram tooltipped" title=""></a>
						<a href="https://www.youtube.com/" class="fa fa-youtube-square tooltipped" title=""></a>
						<a href="https://www.facebook.com/" class="fa fa-facebook-square tooltipped" title=""></a>
						<a href="https://www.pinterest.com/" class="fa fa-pinterest-square tooltipped" title=""></a>
						<a href="https://aboutme.google.com/u/0/?referer=gplus" class="fa fa-google-plus-square tooltipped" title=""></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</footer>

	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/jquery.actual.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>