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
		<div class = "top_left">
						

		
		<div class = "mid_clearance_details_left">
			<div class = "#"><h1>Clearance</h1>
<a href="products.php" id="current">CLEARANCE OFFERS!</a><a href="products.php" id="current">CLEARANCE OFFERS!!!</a><a href="products.php" id="current">CLEARANCE OFFERS!!!</a></h1></div>
				
				</div>
						<div class = "mid_clearance_details_left">
						<h1><p>Browse our sales</p></h>
				
					<form> 	<br>Manuf: <input type="text" name="Manufacturer"><br/>
						<br>Price: <input type="text" name="Price"><br />
						
						<form name="input" action="html_form_action.asp" method="get">
						
						<br>RAM: <input type="text" name="RAM"><br />
						<input type="submit" value="Search">
						</form> 

				</div>
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