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

		<div class = "mid_terms_Condition_details">
		
		<div class = "mid_terms_Condition_details_left">
			<div class = "#">
			<h1>Terms & conditions</h1>
<p>This website is operated by Natty Network Inc (referred to as "Natty/we/our/us"). As user of this website (referred to as "you/your") you acknowledge that any use of this website including any transactions you make ("use/using") is subject to our terms and conditions below (which includes any other important hyper-linked sections e.g. Home delivery information, How to use this website, Returns and refunds, and Privacy policy. In addition, you will find other useful information within Customer services. Please:</p>
Natty Network Inc is registered in England and Wales. Company Registration Number: 123456789.</p>
<p>Registered address: Natty Network Inc House, Inner town Street, beside University of Sunderland, Sunderland SR1 1RS, UK.</p>

			</div>
		</div>
			<div class = "mid_terms_Condition_details_left"><p>Natty Network Inc, Security Limited trading as Natty Network Inc securitalcare is registered in England</p>
<p>Company Registration Number: 369121518. <p>Registered address: 145 Middlesbrough, High Street, MD12 7AE, Middlesbrough </p>
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