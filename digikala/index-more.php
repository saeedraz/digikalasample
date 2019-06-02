<?php 
session_start();
include 'header.php' ?>
<div class="container test">
<?php
	include 'connect.php';
	
	
	
	
	
	if(isset($_GET["proid"]))
	{
		$sql="select * from product where id = ?";
		$result=$connect->prepare($sql);
		$result->bindValue(1,$_GET["proid"]);
		$result->execute();
		$data=$result->fetch(PDO::FETCH_OBJ);
		
			}
	else
	{
		header("location:index.php");
		exit;
	}
	
	
	if(isset($_SESSION["username"]))
	{
		$sql5="select * from users where username = ?";
	$result5=$connect->prepare($sql5);
	$result5->bindValue(1,$_SESSION["username"]);
	$result5->execute();
	$data5=$result5->fetch(PDO::FETCH_OBJ);
	}

	?>
	<script>
		var nextslide3=0;
		
	$(document).ready(function(){
		
///////////////////
$(".keifiat").click(function(){
	
	var keifiat=$(this).attr("data-keifiat");
	$("#keifiat").val(keifiat);
	});
	
	$(".arzesh").click(function(){
	
	var arzesh=$(this).attr("data-arzesh");
	$("#arzesh").val(arzesh);
	});
	
	
$("#send").click(function(){
	var keifiat=$("#keifiat").val();
	var arzesh=$("#arzesh").val();
	var text = $("#commenttext").val();
	var kala =<?= $_GET["proid"]?>;
	if(text=="")
	{
		alert("لطفا متن نظر خود را وارد نمایید !");
		return false;
	}
	$.post("add-comment-check.php",{text:text,kala:kala,keifiat:keifiat,arzesh:arzesh},function(data){
		$("#comment-result").html(data);
		$("#commenttext").val("");
		});
	});


////////////////////

		
		$("#fani_content").hide();
		$("#nazarat_content").hide();
		$("#porsesh_content").hide();
		$("#moghayese_content").hide();
		if(nextslide3==0)
				{
					$(".prevbtn4").css("display","none");
				}
			$(".nextbtn4").click(function(){
		
			next3();
			
			
			});
			function next3()
			{
				if(nextslide3==2)
					{
					$(".nextbtn4").css("display","none");
					}
				$(".prevbtn4").css("display","block");
				$(".slideshowcontent4").find(".post4").eq(nextslide3).animate({width:"toggle"},200);
				nextslide3++;
			}
			
			
			$(".prevbtn4").click(function(){
				
				
				prev3();
				
			});
			function prev3()
			{
				if(nextslide3==1)
					{
					$(".prevbtn4").css("display","none");
					}
				$(".nextbtn4").css("display","block");
				nextslide3--;
				$(".slideshowcontent4").find(".post4").eq(nextslide3).animate({width:"toggle"},200);
			}
		//////////////////////////////////////////////////////////////////
		var nextslide4=0;
		
		if(nextslide4==0)
				{
					$(".prevbtn5").css("display","none");
				}
			$(".nextbtn5").click(function(){
		
			next4();
			
			
			});
			function next4()
			{
				if(nextslide4==2)
					{
					$(".nextbtn5").css("display","none");
					}
				$(".prevbtn5").css("display","block");
				$(".slideshowcontent5").find(".post5").eq(nextslide4).animate({width:"toggle"},200);
				nextslide4++;
			}
			
			
			$(".prevbtn5").click(function(){
				
				
				prev4();
				
			});
			function prev4()
			{
				if(nextslide4==1)
					{
					$(".prevbtn5").css("display","none");
					}
				$(".nextbtn5").css("display","block");
				nextslide4--;
				$(".slideshowcontent5").find(".post5").eq(nextslide4).animate({width:"toggle"},200);
			}
		//////////////////////////////////////////////////////////
		var state=0;
		$("#ejmalibishtartxt").click(function(){
			if(state==0)
				{
					state=1;
					$("#ejmalibishtartxt").html("نمایش کمتر");
					//$("#ejmalitxt").css("height","auto");
					$('#ejmalitxt').animate({height:400},2000);
				}
			else
				{
					state=0;
					$("#ejmalibishtartxt").html("نمایش بیشتر");
					//$("#ejmalitxt").css("height","138px");
					$('#ejmalitxt').animate({height:138},2000);
				}
		});
		/////////////////////////////////////////////////////////////
		$(".sarbargha_sub").click(function(){
			var index=$(this).index();
			$(".sarbargha_sub").removeClass("sarbarg_click");
			$(".sarbargha_sub").eq(index).addClass("sarbarg_click");
			///////////////////////
			if(index==0)
				{
		$("#naghd_content").show();
		$("#fani_content").hide();
		$("#nazarat_content").hide();
		$("#porsesh_content").hide();
		$("#moghayese_content").hide();
				}
			///////////////////////
			if(index==1)
				{
		$("#fani_content").show();
		$("#nazarat_content").hide();
		$("#porsesh_content").hide();
		$("#moghayese_content").hide();
		$("#naghd_content").hide();
				}
			////////////////////////
			if(index==2)
				{
		$("#fani_content").hide();
		$("#nazarat_content").show();
		$("#porsesh_content").hide();
		$("#moghayese_content").hide();
		$("#naghd_content").hide();
				}
		/////////////////////////////
				if(index==3)
				{
		$("#fani_content").hide();
		$("#nazarat_content").hide();
		$("#porsesh_content").show();
		$("#moghayese_content").hide();
		$("#naghd_content").hide();
				}
			////////////////////////////////
					if(index==4)
				{
		$("#fani_content").hide();
		$("#nazarat_content").hide();
		$("#porsesh_content").hide();
		$("#moghayese_content").show();
		$("#naghd_content").hide();
				}
		});
		$(".sarbargha_sub").eq(0).addClass("sarbarg_click");
		$("#basketbtn2"	).click(function(){
			var id = <?= $_GET["proid"]?>;
			$.post("addtobasket.php",{id : id},function(data){
				alert(data);
				
				});
			});
			
			$("#like").click(function(){
				alert("Like");
				var id =$(this).attr("data-product-id");
				$.post("like.php",{id:id});
				
				});
	});
	</script>
<div id="address">
	
	فروشگاه اینترنتی دیجی کالا
	<span class="flesh">></span>
	کالای دیجیتال
	<span class="flesh">></span>
	موبایل
	<span class="flesh">></span>
	گوشی موبایل
	<span class="flesh">></span>
	آیفون 7
	
</div>
	
	<div id="product">
	<div id="right-product">
		
		
		
		<div id="share">
			
			
			
			<img src="images/roshd.png" class="shareimg">
			<img src="images/alarm.png" class="shareimg">
			<img src="images/like.png" class="shareimg" id="like" >
			<img src="images/share.png" class="shareimg">
		</div>
		<div id="orginalpicture">
			<img src=<?= substr($data->picture,3); ?> class="zoom" data-zoom-image="<?= substr($data->picture,3); ?>" width=200 heigh=150 >
			
		</div>
		<div id="moghayese" >
			<div class="moghayese-pic"><img src="images/1.png"></div>
			<div class="moghayese-pic"><img src="images/2.png"></div>
			<div class="moghayese-pic"><img src="images/3.png"></div>
			<div class="moghayese-pic"><img src="images/4.png"></div>
		</div>
		<div id="otherpicture">

			<span class="imgbox"><img src="images/iphone6.png" class="otherpicture-img"></span>
			<span class="imgbox"><img src="images/iphone6-2.png" class="otherpicture-img"></span>
			<span class="imgbox"><img src="images/iphone6.png" class="otherpicture-img"></span>
			<span class="imgbox"><img src="images/iphone6-2.png" class="otherpicture-img"></span>
			<span class="imgbox"><img src="images/iphone6.png" class="otherpicture-img"></span>
			
			
			
		
			
		</div>
		
		
		
		
		
		
		
		
		</div>
		<div id="left-product">
		<div id="productname">
			<div id="productfullname">
			<?= $data->name ?>
		</div>
			<div id="productpishnahad">
				<span id="pishnahadimg"><img src="images/star.png"></span>
				<span id="pishnahadtxt">
				<span id="numberpishnahad">50+</span>
				
			  نفر از خریداران
پیشنهاد خرید داده اند
</span>
			</div>
			
		</div>
<div id="productcolor">
	انتخاب رنگ
	<br><br>
	<select>
		<option>مشکی</option>
		<option>سفید</option>
		<option>طلایی</option>
	</select>
	<br><br>
	انتخاب گارانتی
	<br><br>
		<select>
		<option>18 ماه گارانتی مدیا پردازش</option>
		<option>18 ماه گارانتی مدیا پردازش</option>
		<option>18 ماه گارانتی مدیا پردازش</option>
	</select>
	<br><br>
	انتخاب فروشنده
	<br><br>
			<select>
		<option>  دیجی کالا</option>
		<option>  دیجی کالا</option>
		<option>  دیجی کالا</option>
	</select>
	<br><br>
	<div id="takhfif">
		<div id="productoldgheymat">
		قیمت : 
		<strike><?= number_format($data->gheymat)?> </strike>
		تومان
		</div>
		<div id="takhfifnumber">
		<span id="takhfifnumber1">تخفیف</span>
			<span id="takhfifnumber2"><?= number_format($data->takhfif)?> هزار تومان</span>
		</div>
		<div id="digibon">
		7 
		دیجی بن
		</div>
	</div>
	<div id="newgheymat">
		قیمت برای شما:
		<span id="gheymatcolor"><?= number_format($data->gheymat-$data->takhfif) ?> تومان</span>
		
	</div>
	<div id="btnkharid">
		
		<button id="basketbtn2">
<img src="images/cart-icon-12.png" id="basketimg" class="img-responsive">

<div id="baskettxt">  افزودن به سبد خرید   </div>

</button>
	</div>
</div>
<div id="simcart">
<ul>
	<li><span class="tedadsim">تعداد سیم کارت :</span> تک سیم کارت</li>
	<li><span class="tedadsim">  حافظه داخلی :</span> 128 گیگا بایت  </li>
	<li><span class="tedadsim">  شبکه های ارتباطی :</span> نسل چهارم  </li>
	<li><span class="tedadsim">تعداد سیم کارت :</span> 12 مگا پیکسل  </li>

</ul>			
</div>
<div id="express">
			
			
			
			
			<div class="row  box1-more">
<div class="box">
<a href="">
<img src="images/car.png">
<span class="boxtxt">تحویل اکسپرس</span>
</a>
</div>
<div class="box2">
<a href="">
<img src="images/taghvim.png">
<span class="boxtxt"> ضمانت بازگشت</span>
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
			
			
			
			
			
			</div>

	</div>
	
	</div>
	
	<div class="row slideshow">

	<div class="slideshowtitr"><div>محصولات مرتبط با این محصول  </div></div>
	<div class="slideshowcontent4">
	
		<span class="nextslide4 nextbtn4"></span>
		<span class="prevslide4 prevbtn4"></span>
				
				<?php
				$sql4="select * from product where daste = ? and id != ? ";
				$result4=$connect->prepare($sql4);
				$result4->bindValue(1,$data->daste);
				$result4->bindValue(2,$data->id);
				$result4->execute();
				$rows4=$result4->fetchAll(PDO::FETCH_ASSOC);
				foreach($rows4 as $row4)
				{
					

	
				echo '<div class="post4">
					<div class="postpicture"><img src='.substr($row4["picture"],3).' width=110 height=110></div>
					<div class="postname">'.$row4["name"].'</div>
					<div class="postoldprice"><strike>'.$row4["gheymat"].'</strike></div>
					<div class="postnewprice">'.$row4["gheymat"].'</div>
					
		</div>';	
				}
				
				
				?>
			

		
		
	</div>

</div>

<div id="ejmalititr">معرفی اجمالی محصول</div>
<div class="ejmaliname"><?= $data->name ?></div>
<div id="ejmalitxt">
	
<?= $data->tozihat?>
</div>
<div id="ejmalibishtar"><span id="ejmalibishtartxt">نمایش بیشتر</span></div>

<div class="row slideshow">

	<div class="slideshowtitr"><div>  خریداران این محصول ، محصولات زیر را هم خریده اند   </div></div>
	<div class="slideshowcontent5">
	
		<span class="nextslide5 nextbtn5"></span>
		<span class="prevslide5 prevbtn5"></span>
				
				
				
		<div class="post5">
					<div class="postpicture"><img src="images/glass1.jpg"></div>
					<div class="postname">    محافظ صفحه آیفون 6</div>
					<div class="postoldprice"><strike>40,000</strike></div>
					<div class="postnewprice">30,000 تومان</div>
					
				</div>
					<div class="post5">
					<div class="postpicture"><img src="images/glass2.jpg"></div>
					<div class="postname">قاب آیفون 5  </div>
					<div class="postoldprice"><strike>31,000</strike></div>
					<div class="postnewprice">31,000 تومان</div>
					
				</div>
		<div class="post5">
					<div class="postpicture"><img src="images/glass3.jpg"></div>
					<div class="postname">محافظ صفحه آیفون 6</div>
					<div class="postoldprice"><strike>45,000</strike></div>
					<div class="postnewprice">45,000 تومان</div>
					
				</div>
					<div class="post5">
					<div class="postpicture"><img src="images/glass4.jpg"></div>
					<div class="postname"> قاب آیفون 7  </div>
					<div class="postoldprice"><strike>49,000</strike></div>
					<div class="postnewprice">39,000 تومان</div>
					
				</div>
						<div class="post5">
					<div class="postpicture"><img src="images/glass5.jpg"></div>
					<div class="postname">   محافظ صفحه آیفون 7</div>
					<div class="postoldprice"><strike>190,000</strike></div>
					<div class="postnewprice">190,000 تومان</div>
					
				</div>
						<div class="post5">
					<div class="postpicture"><img src="images/glass6.jpg"></div>
					<div class="postname">قاب آیفون 7</div>
					<div class="postoldprice"><strike>195,000</strike></div>
					<div class="postnewprice">81,000 تومان</div>
					
				</div>
							<div class="post5">
					<div class="postpicture"><img src="images/glass7.jpg"></div>
					<div class="postname">محافظ صفحه آیفون 7   </div>
					<div class="postoldprice"><strike>154,000</strike></div>
					<div class="postnewprice">154,000 تومان</div>
					
				</div>
							<div class="post5">
					<div class="postpicture"><img src="images/glass8.jpg"></div>
					<div class="postname">محافظ صفحه آیفون 7   </div>
					<div class="postoldprice"><strike>55,000</strike></div>
					<div class="postnewprice">45,000 تومان</div>
					
				</div>

		
		
	</div>

</div>
	<div id="sarbargha">
		<div class="sarbargha_sub">نقد و بررسی تخصصی</div>
		<div class="sarbargha_sub"> مشخصات فنی  </div>
		<div class="sarbargha_sub">  نظرات کاربران  </div>
		<div class="sarbargha_sub">  پرسش و پاسخ   </div>
		<div class="sarbargha_sub">  مقایسه سریع    </div>
	</div>
	<div id="naghd_content">
<?= $data->naghd ?>
	</div>
	
	
	<div id="fani_content"> 
	<div style="font-size: 20px;">مشخصات فنی</div>
	<div class="ejmaliname">گوشي موبايل اپل مدل iPhone 7 ظرفيت 32 گيگابايت </div>
	<div style="font-size: 17px;margin-bottom: 20px;">مشخصات کلی</div>
	<div id="right_fani_content">
		<div class="right_box_fani_content">تعداد سیم کارت</div>
		<div class="right_box_fani_content">ابعاد  </div>
		<div class="right_box_fani_content">وزن  </div>
		<div class="right_box_fani_content">قطع سيم کارت  </div>


	</div>
	<div id="left_fani_content">
		<div class="left_box_fani_content">تک سيم کارت</div>
		<div class="left_box_fani_content">7.1 × 67.1 × 138.3 ميلي‌متر </div>
		<div class="left_box_fani_content">138 گرم</div>
		<div class="left_box_fani_content"> سايز نانو (8.8 × 12.3 ميلي‌متر)</div>
		
	</div>
	</div>
	
	
	
	
	
	<?php
if(isset($_SESSION["username"]))
{
?>
	<div id="nazarat_content"> 





    <div>
    <img src="images/21294.png" width="65" style="float:right;margin-left:30px;margin-bottom:20px;" >
    <?php

	echo $data5->fname.' ' . $data5->lname.'<br>'.$data5->username;
	?>
    </div>
    <div id="comment-result" align="center"></div>
    <div>
    <textarea placeholder="متن نظر را وارد نمایید ..." style="width:100%;" id="commenttext"></textarea>
    <br>
    <div  align="center">
<span style="margin-left:21px;margin-right:90px;">1</span>
<span style="margin-left:21px;">2</span>
<span style="margin-left:21px;">3</span>
<span style="margin-left:21px;">4</span>
<span style="margin-left:21px;">5</span>
    <br />
    ارزش خرید :&nbsp;&nbsp;&nbsp;
    <input type="radio" name="arzesh" class="arzesh" data-arzesh="1" style="margin-left:15px;" />
    <input type="radio" name="arzesh" class="arzesh" data-arzesh="2" style="margin-left:15px;" />
    <input type="radio" name="arzesh" class="arzesh" data-arzesh="3" style="margin-left:15px;"/>
    <input type="radio" name="arzesh" class="arzesh" data-arzesh="4" style="margin-left:15px;"/>
    <input type="radio" name="arzesh" class="arzesh" data-arzesh="5" style="margin-left:15px;"/>   
    <input type="hidden" id="arzesh" value="0" />
    <br />
    </div>
<div align="left">    <button class="porsesh_btn" id="send" style="margin-left:20px;">ارسال نظر</button></div>

    </div>

    
    <?php
	
	$sql6="SELECT * FROM `comment` WHERE `kala` = ? AND `state` = '1'";
	$result6=$connect->prepare($sql6);
	$result6->bindValue(1,$_GET["proid"]);
	$result6->execute();
	$rows6=$result6->fetchAll(PDO::FETCH_ASSOC);
	foreach($rows6 as $row6)
	{
			$sql7="select * from users where username = ?";
	$result7=$connect->prepare($sql7);
	$result7->bindValue(1,$row6["user"]);
	$result7->execute();
	$data7=$result7->fetch(PDO::FETCH_OBJ);
	?>
    
    
    
    
    
    <div class="comment_box">
		<div id="nazarat_content_right">
			<div id="rate2">
			
			<div class="all_rate">
			<div class="rate2_right">کیفیت ساخت</div>
			<div class="rate2_left">
		
			</div>
			</div>
				
			<div class="all_rate">
			<div class="rate2_right">ارزش خرید </div>
			<div class="rate2_left">
			<?php
			
			switch($row6["arzesh"])
			{
				case '1':
				echo '<div>&nbsp;</div>';
				break;
				case '2' :
				echo '<div>&nbsp;</div><div>&nbsp;</div>';
				break;
				case '3' :
				echo '<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>';
				break;
				case '4' :
				echo '<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>';
				break;
				case '5' :
				echo '<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>';
				break;				
			}
			?>
            
			</div>
			</div>
			



		</div>
		</div>
		<div id="nazarat_content_left">
			<div class="nazarat_content_left_2"><?= substr($row6["text"],0,7).'...' ?>
			<div class="nazarat_content_left_3">
            <?= $row6["text"]?>
	</div>
<span style="font-size:14px;">   از طرف :  <?= $data7->fname.' '. $data7->lname?></span>
	</div>
		</div>
		</div>
    
    
    
    
    
    
    
    <?php
	}
	
	
	
	?>
	
	
	
	
	
	    <?php
}
else
{
	echo '<div align="center">لظفا برای ثبت و مشاهده ی نظرات وارد حساب کاربری خود شوید</div> !';
}
?>
	
	
	<div id="porsesh_content"> 
	<div>پرسش خود را مطرح نمایید</div>
	<div><textarea id="porsesh_txt"></textarea></div>
	<div style="text-align: left"><button class="porsesh_btn">ثبت پرسش</button></div>
	 </div>
	 
	 
	 
	 
	 
	 
	<div id="moghayese_content">
		<div class="moghayese_content_titr">منتخبی برای مقایسه</div>
		<div class="moghayese_content_txt">لیست پیشنهادی متخصصان دیجی کالا برای مقایسه<span>مقایسه با موارد بیشتر</span></div>
		<div class="moghayese_content_part">
		
		<div class="moghayese_content_part1">
		
			
		</div>
	
		</div>
		
		
		<div class="moghayese_content_part">
		
		<div class="moghayese_content_part1" id="first_img_moghayese">
			
			<div><img src="images/moghayese1.jpg"></div>
			<div class="ejmaliname">Apple iPhone 7 256GB Mobile Phone</div>
			
			
		</div>
	
		</div>
		
		<div class="moghayese_content_part">
		
		<div class="moghayese_content_part1">
			
			<div><img src="images/moghayese2.jpg"></div>
			<div class="ejmaliname">Apple iPhone 6s 128GB Mobile Phone</div>
			
		</div>
		<div class="moghayese_content_part2">
			
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			
		</div>
		
		</div>
		
		
		<div class="moghayese_content_part">
		
		<div class="moghayese_content_part1">
			
			<div><img src="images/moghayese3.jpg"></div>
			<div class="ejmaliname">Apple iPhone SE 64GB Mobile Phone</div>
			
		</div>
		
		<div class="moghayese_content_part2">
			
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			<div class="left_box_fani_content">تک سيم کارت</div>
			
		</div>
		
		</div>
	</div>
	
</div><!----allbodycontainer---->
