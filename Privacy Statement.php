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


		<div class = "mid_Privacy_Statement_details">
		<div class = "mid_Privacy_Statement_details_left">
			<div class = "#">
			<h1>Privacy Statement</h1>

<p> At Natty Internet, we take our private statement very seriously and we sometime retain information to our database for security reasons
and we respects your privacy as well. Across our store, we will collect, store and use your personal information for defined purposes. We use your information to support and enhance our relationship with you, for example, to process your purchase, provide service and support, and share product, service and company news and offerings with you. We do not sell your personal information, 
but we may share your IP address with advertisers depending on the situation </p></div>
				</div>
						<div class = "mid_Privacy_Statement_details_left"><p>For further information about our 
policy and private statement, kindly read more of our policy statement and our otherrelated information that you think it might be of help to you,
and our staffs are ready to answer any of you question.</p>
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