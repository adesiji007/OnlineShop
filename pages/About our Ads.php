<!DOCTYPE = "html5">
<html>
<head>
	<link href="index.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
<div class= "cont">
	<div class = "header">
	<div class = "logo"><img src = "images/logo3.png" width = "180px" height = "70px"/></div>
		<div class ="comp_name">
			<div class = "navcontainer">
			<ul class = "navlist">
			<li id="active"><a href="index.php" id="current">Home</a>
			<li><a href="About-Us.php">About-Us</a></li>
			<li><a href="Products.php">Products</a></li>
			<li><a href="Laptops.php">Laptops</a></li>
			<li><a href="Company details.php">Company details</a></li>
			<li><a href="About our Ads.php">About our Ads</a><li>
			<li><a href="Reservation.php">Reservation</a></li>
			<li><a href="Contact.php">Contact</a></li>
			<ul id="subnavlist">
			<li id="subactive"><a href="Products.php" id="subcurrent">Product-List</a></li>
			<li><a href="Products.php">Description</a></li>
			<li><a href="Products.php">Price</a></li>
			<li><a href="My Account.php">My Account</a></li>
			<div class = "search"><form action ="search.php" method = "post">
			<input type = "text" name ="search"/>
			<input type = "submit" value = "search"/>
			</form></div>
			</ul>
		</div>
	</div>

<div class = "top">
		<div class = "top_left"><img src = "images/22.jpg" width = "173px" height = "145px"/><img src = "images/21.jpg" width = "173px" height = "145px"/></div>
		<div class ="top_right"><img src = "images/4.jpg" width = "173px" height = "145px"/><img src = "images/16.jpg" width = "173px" height = "145px"/></div>
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
			<div class = "mid_left1"><img src = "images/<?php echo $pro['id']; ?>.jpg" width = "173px" height = "145px"/></div>
			<div class = "mid_left2"><?php echo $pro['name']; ?></div>
			</a>
		</div>
		<?php } ?>
	</div>
	

	<div class = "footer">
		<div class = "navcontainer">
		<ul class = "navlist">
		<li><a href="Copyright.php">Copyright 2014-2018 Natt Network Inc</a></li>
		<li><a href="Legal & Regulatory.php">Legal & Regulatory</a></li>
		<li><a href="Terms & Condition.php">Terms & Condition</a></li>
		<li><a href="Unresolved Issues.php">Unresolved Issues</a></a></li>
		<li><a href="Privacy Statement.php">Privacy Statement</a></li>
		<li><a href="Recycling.php">Recycling</a></li>
		<li><a href="Feedback.php">Feedback</a></li></div>
	</div>
</body>
</html>