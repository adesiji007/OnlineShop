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

		<div class = "mid_recycling_details">
		<div class = "mid_recycling_details_left">
			<div class = "#"><h1>Recycling</h1>
<p>We will take away your old appliance so you don't have the worry yourself, all you just need to do is give us a call on 080097867565, and give us your address and the name of the materials you bought from us or you can take it to the local tip or recycling centre. We apologise that we are unable to collect any products which are not from our main company or from our umbrella company.
<p>For UK customers</p>
<p>Collection is only offered through the home delivery service </p>
<p>Please be inform that removal of the old item is only available at the same time as the new one is delivered. If the old one cannot be removed at the same time, we will not come back and collect at a later date and you will receive a refund of the charge for the service.</p>
<p> we are very sorry for any inconvenience you may have received</p>
</div>
	</div>
	<div class = "mid_recycling_details_left"><img src = "images/recycling.png" width = "435px" height = "300px"/>
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