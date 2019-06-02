<?php include 'header.php'?>
	<div class="row" id="topimg">
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
<div class="col-md-10 col-sm-10 col-lg-10 col-xs-10"> 
<img src="images/d61ea28a.jpg"  style="width: 100%;margin-top: 10px;">
</div>
<?php
			$sql5="select * from product where daste = ? ";
			$result5=$connect->prepare($sql5);
			$result5->bindValue(1,$_GET["name"]);
			$result5->execute();
			$tedad=$result5->rowCount();
				if(!isset($_GET["page"]))
			{
				$_GET["page"]=0;
			}

?>
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1"></div>
</div><!--end top image--->
<div class="row">
<div class="col-md-1 col-sm-1 col-lg-1 col-xs-1">
</div>
<div class="col-md-7 col-sm-7 col-lg-7 col-xs-7">
<!----------------->
	<div id="allproduct">
		<div id="produt_titr">
			<div style="padding: 10px 10px;font-size: 17px;font-weight:bold;">دسته بندی نتایج (نمایش <?= $_GET["page"]+1; ?> تا <?= $_GET["page"]+3 ?> محصول از <?=  $tedad; ?>)</div>
			<div align="left">
				مرتب سازی بر اساس
				پربازدیدترین ها
				
				جدیدترین ها
				
				پرفروش ترین ها
				
			</div>
			<hr>
			</div>
		<div id="produt_content">
			
			<?php
			include 'connect.php';
		
			$sql4="select * from product where daste = ? limit ".$_GET["page"]." , 3";
			$result4=$connect->prepare($sql4);
			$result4->bindValue(1,$_GET["name"]);
			$result4->execute();
			
			
			
			
			$rows4=$result4->fetchAll(PDO::FETCH_ASSOC);
			foreach($rows4 as $row4)
			{
				echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/5.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/1.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/9.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/7.jpg"width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/12.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/1.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/14.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/13.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/12.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/11.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/10.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/9.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/8.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/7.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/6.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/5.jpg"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/4.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/3.png"	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/2.png" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			echo '<a href="index-more.php?proid='.$row4["id"].'"><div class="productpost">
				<div align="center" style="margin-bottom: 10px;"><img src="picture/kala/1.jpg" 	width="180" height="250"></div>
				<div class="product_name" >'.$row4["name"].'</div>
				<div class="product_gheymat">  '.number_format($row4["gheymat"]).' تومان </div>
			</div></a>';
			}

			
	?>
			
			
			
			
		</div>
		<div id="produt_footer">
        
        <?php
 		$number=ceil($tedad/3);
			echo '<a href=product.php?page=0&name='.$_GET["name"].'>1</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			echo '<a href=product.php?page=3&name='.$_GET["name"].'>2</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;....';
		for($i=0 ; $i<$number;$i++)
		{
			$i2=$i+1;
			$page=$i*3;
			
			//echo '<a href=product.php?page='.$page.'&name='.$_GET["name"].'>'.$i2.'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

		}
		echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=product.php?page=3&name='.$_GET["name"].'>'. ceil($tedad/3).'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		
		?>

      </div>
		
	</div>
<!----------------->
</div>
<div class="col-md-3 col-sm-3 col-lg-3 col-xs-3">
<img src="images/DigikalaTelegram-290x52-fixed.jpg" class="img-responsive img-rightmenu">
<img src="images/4724ed3c.jpg" class="img-responsive img-rightmenu">
<img src="images/a9a9c6a6.jpg" class="img-responsive img-rightmenu">

	<div id="brand">
		<img src="images/samsung-brand.jpg">
		<img src="images/x.vision.png">
			
	</div>
	




</div><!---END OF CONTAINER---->
</body>
</html>