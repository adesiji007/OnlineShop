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
			<span class="border"><a href="products.php" id="current">Products</a>
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
		<?php
		include "database.php";
		?>

	<div class = "update_products_form">
				
				<h1>UPDATE EXISTING PRODUCTS FROM HERE<h1>

			<form action="update-products.php" method="post">
											
				<fieldset>			
				
				<ul class="a">
			<label for="name">First Name</label><input id="name" name="name3"><br>	
			<div <p>products: </p><p><input type="text" name="productsid" value="1" readonly"></p></div>
			<div <p>name: </p><p><input type="text" name="name" value="name"></p></div
			<p>description:	</p><p><input type="text" name="desc" value="name"></p>
			<p>manufacturer:</p><p>	<input type="text" name="manu" value="manu" ></p>
			<p>cpu:	</p><p><input type="text" name="cpu" value="cpu"></p>
			<p>hard disc:		<input type="text" name="hd" value="hd"></p>
			<p>operating system:		<input type="text" name="os" value="os"></p>
			<p>ram:	<input type="text" name="ram" value="ram" >
			<p>price:	<input type="text" name="price" value="price"></p>
			<p>video card:		<input type="text" name="vc" value="vc" ></p>
			<p>optical drive:		<input type="text" name="od" value="od"></p>
			<p>display:		<input type="text" name="ds" value="ds" ></p>
			<p>wireless:	<input type="text" name="wireless" value="wireless"></p>
			<p>productivity software:		<input type="text" name="ps" value="ps"></p>
			<p>security software:		<input type="text" name="ss" value="ss" ></p>
			<p>Accidental Damage Support:	<input type="text" name="ADS" value="ADS" ></p>
			<p>Battery Primary:	<input type="text" name="BP" value="BP" ></p>
			<p>regulation:	<input type="text" name="reg" value="name" ></p>
			<p>image:	<input type="text" name="name" value="reg"></p>
			<p>warrant:	<input type="text" name="warrant" value="warrant" ></p>
			<p>Port Slots & Chasis:	<input type="text" name="PSC" value="PSC"></p>
			<p>instock:	<input type="text" name="PSC" value="instock"></p>
			
			<input type="submit"><fieldset>
			
			</ul>
			</form>	
		
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