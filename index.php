<!DOCTYPE "html">
<html>
<head>
	<link href="index.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
<div class= "wrapper">
	<div class = "header">
			<span class = "logo"><a href = "."><img src = "images/logo3.png" width = "180px" height = "70px"/></a></span>
				<div class = "navlist">
					
			<div class "index">
			<span class="border"><a href="index.php" id="current">Home</a>
			<span class="border"><a href="products.php" id="current">products</a>
			<span class="border"><a href="Reserve.php" id="current">Reserve</a>
			<span class="border"><a href="Contact.php" id="current">Contact</a>
			<span class="border"><a href="My Account.php" id="current">My Account</a>
			<span class="border"><a href="clearance.php" id="current">clearance</a>
			<div class = "search"><form action ="search.php" method = "post">
			<input type = "text" name ="search"/><input type = "submit" value = "search"/>
			
			</form></div>
			</div>
			
		</div>
	</div>
		<div class = "top">
			<div class = "top1_left">
				<div class = "top_left">
						<div class = "top_left1"><?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select * from products order by id asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 2; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<div class = "mid_left">
			<a href = "products.php?condition=<?php echo $pro['manu']; ?>&type=1">
			<div class = "mid_left1"><img src = "images/<?php echo $pro['image']; ?>" width = "173px" height = "145px"/></div>
			<div class = "mid_left2"><?php echo $pro['name']; ?></div>
			</a>
		</div>
		
		<?php } ?></div>
						<div class = "top_below"></div>
						<div class = "top_left2"><h1><a href="products.php" id="current">CLEARANCE OFFERS!</a><a href="products.php" id="current">CLEARANCE OFFERS!!!</a><a href="Products.php" id="current">CLEARANCE OFFERS!!!</a></h1></div>
				</div>
			</div>
				<div class = "top_below"></div>
		</div>
	
	<div class = "mid_product">
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select * from products order by id asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 10; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<div class = "mid_left">
			<a href = "products.php?condition=<?php echo $pro['manu']; ?>&type=1">
			<div class = "mid_left1"><img src = "images/<?php echo $pro['image']; ?>" width = "173px" height = "145px"/></div>
			<div class = "mid_left2"><?php echo $pro['name']; ?></div>
			</a>
		</div>
		<?php } ?>
	</div>
	

	<div class = "footer">
		
		<div class = "navlist">
		<a href="Copyright.php">Copyright</a>
		<a href="Legal & Regulatory.php">Legal & Regulatory</a>
		<a href="Terms & Condition.php">Terms & Condition</a>
		<a href="Unresolved Issues.php">Unresolved Issues</a>
		<a href="Privacy Statement.php">Privacy Statement</a>
		<a href="Recycling.php">Recycling</a>
		<a href="Feedback.php">Feedback</a>
		</div>
	</div>
	
</body>
</html>