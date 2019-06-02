<!doctype html>
<html>
<head>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.elevatezoom.js"></script>
<script>
$(document).ready(function(e) {
    function basketnumber()
	{
		$.post("basketnumber.php",function(data){
			$("#basketnumber").html(data);
			
			});
	}
	setInterval(basketnumber,500);
});
</script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<meta charset="utf-8">
<title>شرکت برنامه نویسان فنی و حرفه ای </title>

</head>

<body dir="rtl">
<div class="container-fluid">
<div class="row" id="header">
<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
<a href="index.php" style="font-size:24px;color:#4caf50;text-decoration:none;"><p style="padding-top:25px;" > شرکت برنامه نویسان فنی و حرفه ای</a></p>
</div><!---END OF header 3---->
<div class="col-md-9 col-sm-9 col-lg-9 col-xs-9">

<div class="row">
<div class="col-md-7 col-sm-7 col-lg-7 col-xs-7 "><a href="user-register.php" class="txt"><img src="images/user.jpg">ثبت نام کنید</a></div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4 "><img src="images/lock.JPG"><span id="logintxt" >فروشگاه اینترنتی  ،</span> <a href="user-login.php" class="txt">وارد شوید</a></div>
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>

</div><!---END OF top-right header---->
<div class="row" id="right-bottom">
<div class="col-md-8 col-sm-8 col-lg-8 col-xs-8">
<form action="search.php" method="post">
<input type="text" id="serach" name="search" placeholder="محصول ، دسته یا برند مورد نظرتان را جست و جو کنید ...">
<input type="submit" id="searchbtn" value="">
<img src="images/49116.png">
</form>
</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
<form action="basket.php" method="post">
<button id="basketbtn">
<img src="images/cart-icon-12.png" id="basketimg" class="img-responsive">

<div id="baskettxt">  سبد خرید <span id="basketnumber"></span></div>

</button>

</form>

</div>
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
</div><!---END OF bottom-right header---->


</div><!---END OF header 9---->


</div><!---END OF header row---->

<div class="row" id="topmenu">
<div id="level1">
<ul>
	<li ><a href="product.php?name=27">محصولات</a>
	<!-----Start Of Level 2 Ul------>
	
	<li ><a href="contact.php">تماس با ما</a>
	<li ><a href="about.php">معرفی ما</a>
	<!-----End Of Level 2 Ul------>
	</li>
	</ul>
	<?php
	include 'connect.php';
	?>
</div>
</div><!---END OF TopMENU---->
