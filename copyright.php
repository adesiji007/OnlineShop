<!DOCTYPE "html">
<html>
<head>
	<link href="index.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
<?php
include "database.php";
?>


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
	

		<div class = "mid_copyright_details">
		<div class = "mid_copyright_details_left">
			<div class = "#"><h1>Copyright</h1>
<p>Registration Details for Natty Network Inc in United Kingdom</p>

<p>Natty Network Inc is registered in England and Wales.</p>
<p>Company Registration Number: 123456789.</p>
<p>Registered address: Natty Network Inc House, Inner town Street, beside University of Sunderland, Sunderland SR1 1RS, UK.</p>

<p>Natty Network Inc, Branch in Newcastle Upon Tyne is registered in England and Wales.</p>
<p>Company Registration Number: 987654321.</p>
></div>
	</div>
	<div class = "mid_copyright_details_left"></div>
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