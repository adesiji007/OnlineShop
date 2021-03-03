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
	
		<div class = "mid_legal_regulation_details">
		<div class = "mid_legal_regulation_details_left">
			<div class = "#"><h1>Legal Regulation</h1>
<p>For any legal issues regarding any product you purchase from us, Kindly give us a call or send e-mail to us.</p>
Registration Details for Natty Network Inc in United Kingdom</p>

<p>At Natty Network Inc, our customers are so precious to us and if want any further information about our products you may contact any of our branches as stated below
</p> most of our company address are displayed below.</p>
<p>Registered address: Natty Network Inc House, Inner town Street, beside University of Sunderland, Sunderland SR1 1RS, UK.</p>
</div>
	</div>
	<div class = "mid_legal_regulation_details_left"><a href = "."><img src = "images/legal.PNG" width = "380px" height = "170px"/></a>
<p>Registered addres for Sunderland/Newcastle Upon Tyne: Natty Network Inc House, Gosfort High street, University of Newcastle way, Newcastle, upon Tyne, NE1 5RE, UK, the Phone number: 123456789</p>
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