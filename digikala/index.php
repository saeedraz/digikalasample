<?php include 'header.php'?>
	<div class="row" id="topimg">
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
<div class="col-md-10 col-sm-10 col-lg-10 col-xs-10"> 
<img src="images/d61ea28a.jpg"  style="width: 100%;margin-top: 10px;">
</div>
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
</div><!--end top image--->
<div class="row">
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
</div>
<div class="col-md-7 col-sm-7 col-lg-7 col-xs-7">
<!----- Start Top Slider---->
	<div id="slider">
	<span id="prev"></span>
	<span id="next"></span>
	
		<div id="slider_img">
        
   <?php
   include 'connect.php';
   $sql4="SELECT * FROM `slider` WHERE `slider-number` = 1";
   $result4=$connect->query($sql4);
   $rows4=$result4->fetchAll(PDO::FETCH_ASSOC);
   foreach($rows4 as $row4)
   {
	   echo 	'		<a href="" class="item" ><img src="images/1.jpg"></a>
		 <a href="" class="item" ><img src="images/2.jpg"></a>
		 <a href="" class="item" ><img src="images/3.jpg"></a>
		 <a href="" class="item" ><img src="images/4.jpg"></a>
		 <a href="" class="item" ><img src="images/5.jpg"></a>';
   }
   ?>


		</div>
		
		<div id="slider_navigator">
			<ul>
               <?php
   include 'connect.php';
   $sql5="SELECT * FROM `slider` WHERE `slider-number` = 1";
   $result5=$connect->query($sql5);
   $rows5=$result5->fetchAll(PDO::FETCH_ASSOC);
   foreach($rows5 as $row5)
   {
	   echo 	'<li>  '.$row5["text"].' </li>';
   }
   ?>
	
			</ul>
			
		</div>
		
	</div>

	<script>
			
		
		var nextPic2=1;
		var nextslide=0;
		var nextslide2=0;
		var nextslide3=0;
		$(document).ready(function(){
			
//////////////////////////////////Slider4////////////////////////////////////////
			if(nextslide3==0)
				{
					$(".prevbtn3").css("display","none");
				}
			$(".nextbtn3").click(function(){
		
			next3();
			
			
			});
			function next3()
			{
				if(nextslide3==2)
					{
					$(".nextbtn3").css("display","none");
					}
				$(".prevbtn3").css("display","block");
				$(".slideshowcontent3").find(".post3").eq(nextslide3).animate({width:"toggle"},200);
				nextslide3++;
			}
			
			
			$(".prevbtn3").click(function(){
				
				
				prev3();
				
			});
			function prev3()
			{
				if(nextslide3==1)
					{
					$(".prevbtn3").css("display","none");
					}
				$(".nextbtn3").css("display","block");
				nextslide3--;
				$(".slideshowcontent3").find(".post3").eq(nextslide3).animate({width:"toggle"},200);
			}
			
			
//////////////////////////////////Slider4////////////////////////////////////////
if(nextslide2==0)
				{
					$(".prevbtn2").css("display","none");
				}
			$(".nextbtn2").click(function(){
		
			next2();
			
			
			});
			function next2()
			{
				if(nextslide2==2)
					{
					$(".nextbtn2").css("display","none");
					}
				$(".prevbtn2").css("display","block");
				$(".slideshowcontent2").find(".post2").eq(nextslide2).animate({width:"toggle"},200);
				nextslide2++;
			}
			
			
			$(".prevbtn2").click(function(){
				
				
				prev2();
				
			});
			function prev2()
			{
				if(nextslide2==1)
					{
					$(".prevbtn2").css("display","none");
					}
				$(".nextbtn2").css("display","block");
				nextslide2--;
				$(".slideshowcontent2").find(".post2").eq(nextslide2).animate({width:"toggle"},200);
			}
			
			
			
//////////////////////////////////Slider3////////////////////////////////////////
if(nextslide==0)
				{
					$(".prevbtn").css("display","none");
				}
			$(".nextbtn").click(function(){
		
			next();
			
			
			});
			function next()
			{
				if(nextslide==2)
					{
						$(".nextbtn").css("display","none");
					}
				$(".prevbtn").css("display","block");
				$(".slideshowcontent").find(".post").eq(nextslide).animate({width:"toggle"},200);
				nextslide++;
			}
			
			
			
			
			
			
			
			
			$(".prevbtn").click(function(){
				
				
				prev();
				
			});
			function prev()
			{
				if(nextslide==1)
					{
					$(".prevbtn").css("display","none");
					}
				$(".nextbtn").css("display","block");
				nextslide--;
				$(".slideshowcontent").find(".post").eq(nextslide).animate({width:"toggle"},200);
			}
			
//////////////////////////////////Slider2////////////////////////////////////////
	$("#slider2btn").click(function(){
						slider2();
					});
			slider2();
		clearInterval(timer2);
		var timer2 = setInterval(slider2,4000);
		function slider2()
		{
		if(nextPic2 > $("#slider2 .item").length)
		{
		nextPic2=1;
		}	
		if(nextPic2 < 1 )
		{
		nextPic2=$("#slider2 .item").length;
		}	
		$("#slider2").find(".item").hide();
		$("#slider2 #slider2_navigator ul li").removeClass("activeli");
		$("#slider2").find(".item").eq(nextPic2 - 1).fadeIn(500);
		$("#slider2 #slider2_navigator ul li").eq(nextPic2-1).addClass("activeli")
		nextPic2++;
		}
			
				$("#slider2").mouseleave(function(){
			clearInterval(timer2);
			timer2 = setInterval(slider2,4000);
			
		});
			
			
		$("#slider2_navigator ul li").click(function()
		{
			clearInterval(timer2);
		var index = $(this).index();
		gotoslide2(index);
		});

		function gotoslide2(index)
		{
		nextPic2 = index+1;
		slider2();
		}	
			
		});

		
		
//////////////////////////////////Slider1////////////////////////////////////////
		var nextPic = 1;
		slider();
		clearInterval(timer);
		var timer = setInterval(slider,5000)
		$("#next").click(function(){
		clearInterval(timer);
		slider();
		});
		////////////////////////////
		$("#prev").click(function(){
		clearInterval(timer);
		gotoprev();
		});
		
		function gotoprev()
		{
		nextPic-=2;
		slider();
		}
		//////////////////////////
		
		$("#slider_navigator ul li").click(function()
		{
			clearInterval(timer);
		var index = $(this).index();
		gotoslide(index);
		});

		function gotoslide(index)
		{
		nextPic = index+1;
		slider();
		}
		///////////////////////
			$("#slider").mouseleave(function(){
			clearInterval(timer);
			timer = setInterval(slider,5000);
			
		});
		//////////////////////
		function slider()
		{
		if(nextPic > $("#slider .item").length)
		{
		nextPic=1;
		}	
		if(nextPic < 1 )
		{
		nextPic=$("#slider .item").length;
		}	
		$("#slider").find(".item").hide();
		$("#slider #slider_navigator ul li").removeClass("activeli");
		$("#slider").find(".item").eq(nextPic - 1).fadeIn(500);
		$("#slider #slider_navigator ul li").eq(nextPic-1).addClass("activeli")
		nextPic++;
		}

	</script>
<!------End Top slider --->
<!---<img src="images/Capsture.JPG" class="img-responsive img-leftmenu">-->

	<div id="slider2">
		<div id="slider2_img">
		
		
			<a href="" class="item" >
			<div id="rightslider">
				<div id="txtrightslider">
				<span id="gheymat1">1.365 میلیون تومان</span>
				<span id="gheymat2"><div id="line">________</div>1.489  </span>
				<div id="txtdescription">
				<br>
					ال ای دی
					<br>
					فول اچ دی
					<br>
					
					
					گارانتی دو ساله
					<br>
					کیفیت را با ما تجربه کنید
					</div>
				</div>
			</div>
			<div id="leftslider">
				<div id="topleftslider">
					<span id="txttopleftslider">
					تلویزیون ال ای دی 43 اینچ ایکس ویژن
					  </span>
					
				</div>
				<div id="bottomleftslider">
					<img src="images/test.png">
				</div>
				</div>
			</a>
			
			<a href="" class="item" >
			<div id="rightslider">
				<div id="txtrightslider">
				<span id="gheymat1">2.299 میلیون تومان</span>
				<span id="gheymat2"><div id="line">________</div>2.399  </span>
				<div id="txtdescription">
				<br>
					هارد 1 ترابایت
					<br>
					نمایشگر فول اچ دی
					<br>
					
					
					گرافیک قدرتمند
					<br>
					8 گیگابایت رم					</div>
				</div>
			</div>
			<div id="leftslider">
				<div id="topleftslider">
					<span id="txttopleftslider">
					لپتاپ ال ای دی 15 اینچی لنوو
					  </span>
					
				</div>
				<div id="bottomleftslider">
					<img src="images/2017-04-09_224947.png">
				</div>
				</div>
			</a>
			
			<a href="" class="item" >
			<div id="rightslider">
				<div id="txtrightslider">
				<span id="gheymat1">179 هزار تومان</span>
				<span id="gheymat2"><div id="line">________</div>280  </span>
				<div id="txtdescription">
				<br>
					مناسب برای شش نفر
					<br>
					طراحی ساده و زیبا و جذاب
					<br>
					
					
					جنس : اوپال
					<br>
					تعداد کلی ظروف : 19 پارچه					</div>
				</div>
			</div>
			<div id="leftslider">
				<div id="topleftslider">
					<span id="txttopleftslider">
					سرویس غذاخوری 19 پارچه لومینارک
					  </span>
					
				</div>
				<div id="bottomleftslider">
					<img src="images/kala1.png">
				</div>
				</div>
			</a>
			
				<a href="" class="item" >
			<div id="rightslider">
				<div id="txtrightslider">
				<span id="gheymat1">62 هزار تومان</span>
				<span id="gheymat2"><div id="line">________</div>73  </span>
				<div id="txtdescription">
				<br>
					پشتیبانی از فرمت فول اچ دی و سه بعدی
					<br>
				مقاوم در برابر سرما
					<br>
					
					
					مقاوم در برابر ضربه
					<br>
					 مقاوم در برابر آب					</div>
				</div>
			</div>
			<div id="leftslider">
				<div id="topleftslider">
					<span id="txttopleftslider">
					  کارت حافظه میکرو 32 گیگا بایت کلاس 10
					  </span>
					
				</div>
				<div id="bottomleftslider">
					<img src="images/kala2.png">
				</div>
				</div>
			</a>
			
			<a href="" class="item" >
			<div id="rightslider">
				<div id="txtrightslider">
				<span id="gheymat1">2.649 میلیون تومان</span>
				<span id="gheymat2"><div id="line">________</div>2.799  </span>
				<div id="txtdescription">
				<br>
					8 گیگابایت رم
					<br>
				نمایشگر فول اچ دی
					<br>
					
					
				2 گیگابایت گرافیک
					<br>
					طراحی زیبا و بدنه مقاوم				</div>
				</div>
			</div>
			<div id="leftslider">
				<div id="topleftslider">
					<span id="txttopleftslider">
					    لپتاپ 15 اینچی ایسوس مدل ایکس 55
					  </span>
					
				</div>
				<div id="bottomleftslider">
					<img src="images/kala3.png">
				</div>
				</div>
			</a>
			<a href="" class="item" ><img src="images/3.jpg"></a>
			<a href="" class="item" ><img src="images/4.jpg"></a>
			<a href="" class="item" ><img src="images/5.jpg"></a>
			<a href="" class="item" ><img src="images/6.jpg"></a>

		</div>
		
		<div id="slider2_navigator">
			<ul>
				
				<li> تلویزیون ایکس ویژن </li>
				<li>لپتاپ 15 اینچی لنوو </li>
				<li>  سرویس غذاخوری لومینارک </li>
				<li>   کارت حافظه میکرو </li>
				<li> لپتاپ 15 اینچی ایسوس  </li>
				<li> لامپ ال ای دی </li>
				<li> پیشنهاد شگفت انگیز ویژه </li>
				<li> پیشنهاد شگفت انگیز ویژه </li>


			</ul>
			
		</div>
	</div>
<div class="row img-leftmenu">
<div class="col-md-8 col-sm-8 col-lg-8 col-xs-8"><img src="images/Capsssture.JPG" class=" img-responsive "></div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="images/Captusre.JPG" class="img-responsive "></div>
</div>
<div class="row img-leftmenu">
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="images/d60fb691.jpg" class=" img-responsive "></div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="images/b3b5646a.jpg" class="img-responsive "></div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="images/0932dfe7.jpg" class="img-responsive "></div>
</div>
<div class="row img-leftmenu">
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4"><img src="images/4ce6196a.jpg" class="img-responsive "></div>
<div class="col-md-8 col-sm-8 col-lg-8 col-xs-8"><img src="images/3a23841c.jpg" class=" img-responsive "></div>

</div>

<div class="row box1">
<div class="box">
<a href="">
<img src="images/car.png">
<span class="boxtxt">تحویل اکسپرس</span>
</a>
</div>
<div class="box2">
<a href="">
<img src="images/taghvim.png">
<span class="boxtxt">7 روز ضمانت بازگشت</span>
</a>
</div>
<div class="box">
<a href="">
<img src="images/cart.png">
<span class="boxtxt">پرداخت در محل</span>
</a>
</div>
<div class="box">
<a href="">
<img src="images/zarebin.png">
<span class="boxtxt">تضمین قیمت</span>
</a>
</div>
<div class="box2">
<a href="">
<img src="images/ok.png">
<span class="boxtxt">ضمانت اصل بودن</span>
</a>
</div>
</div>

<div class="row slideshow">

	<div class="slideshowtitr"><div>گوشی موبایل </div></div>
	<div class="slideshowcontent">
	
		<span class="nextslide3 nextbtn"></span>
		<span class="prevslide3 prevbtn"></span>
				
				
				
		<div class="post">
					<div class="postpicture"><img src="picture/kala/6.jpg"></div>
					<div class="postname">تلفن همراه هوشمند سامسونگ</div>
					<div class="postoldprice"><strike>1.639,000</strike></div>
					<div class="postnewprice">1.629,000 تومان</div>
					
				</div>
					<div class="post">
					<div class="postpicture"><img src="picture/kala/4.jpg"></div>
					<div class="postname">تلفن همراه هوشمند ال جی</div>
					<div class="postoldprice"><strike>2.520,000</strike></div>
					<div class="postnewprice">2.500,000 تومان</div>
					
				</div>
		<div class="post">
					<div class="postpicture"><img src="picture/kala/6.jpg"></div>
					<div class="postname">تلفن همراه هوشمند ال جی</div>
					<div class="postoldprice"><strike>4.535,000</strike></div>
					<div class="postnewprice">4.500,000 تومان</div>
					
				</div>
					<div class="post">
					<div class="postpicture"><img src="picture/kala/4.jpg"></div>
					<div class="postname">تلفن همراه هوشمند اچ تی سی</div>
					<div class="postoldprice"><strike>3.700,000</strike></div>
					<div class="postnewprice">3.685,000 تومان</div>
					
				</div>
						<div class="post">
					<div class="postpicture"><img  src="picture/kala/5.jpg"></div>
					<div class="postname">تلفن همراه هوشمند ال جی</div>
					<div class="postoldprice"><strike>3.880,000</strike></div>
					<div class="postnewprice">3.850,000 تومان</div>
					
				</div>
						<div class="post">
					<div class="postpicture"><img src="picture/kala/6.jpg"></div>
					<div class="postname">تلفن همراه هوشمند آیفون 6</div>
					<div class="postoldprice"><strike>10,500,000</strike></div>
					<div class="postnewprice">10,475,000 تومان</div>
					
				</div>

		
		
	</div>
</div>






</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
<img src="images/DigikalaTelegram-290x52-fixed.jpg" class="img-responsive img-rightmenu">
<img src="images/4724ed3c.jpg" class="img-responsive img-rightmenu">
<img src="images/a9a9c6a6.jpg" class="img-responsive img-rightmenu">
<img src="images/200b51b2.jpg" class="img-responsive img-rightmenu">
<img src="images/42027de1.jpg" class="img-responsive img-rightmenu">
<img src="images/efd7db64.jpg" class="img-responsive img-rightmenu">
	<div id="brand">
		<img src="images/samsung-brand.jpg">
		<img src="images/x.vision.png">
		<img src="images/pars-khazar-8cdaa4.png">
		<img src="images/nivea.png">
		<img src="images/snowa-cc6b61.png">
		<img src="images/philips-3db377.png">		
	</div>
	<div id="news">
		<div id="titlenews">تازه ترین خبرها</div>
		<div id="bodynews">
			<!-------->
			<?php
			include 'connect.php';
			$sql6="SELECT * FROM `news` ORDER BY `news`.`id` DESC limit 5";
			$result6=$connect->query($sql6);
			$rows6=$result6->fetchAll(PDO::FETCH_ASSOC);
			foreach($rows6 as $row6)
			{
				echo '<div class="allbodynews">
				<div class="imgnews">
					
					<img src=admin/news/pic/'.$row6["pic"].' width="50" height="50">
				</div>
				<div class="txtnews">
					
'.$row6["title"].'
			<br>
				<span class="tarikh">'.$row6["date"].'</span>
					
				</div>
			</div>';
			}
			?>
	
			

			
			
			
			
			
			
						
			
		</div>
		<div id="footernews"><a href="all-news.php">مشاهده ی خبرهای بیشتر</a></div>
		
	</div>

</div><!----Right menu--->
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>


</div>




</div><!---END OF CONTAINER---->
</body>
</html>