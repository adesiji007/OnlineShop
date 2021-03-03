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

		<div class = "mid_unresolved_issues_details">
		<div class = "mid_unresolved_issues_details_left">
			<div class = "#"><h1>Unresolved Issues</h1>
<p>Our company is always ready to be of help to you.</p>

<p>For any unresolved issues please contact our customer resource on the phone number below or e-mail us with any particular issues relating to our product to customer-issues@Natty-Network-Inc.com and we will get back to you as soon as possible</p>

<p><b>Our office address is</b>: 12345 Natty Network Inc House, Inner town Street, beside University of Sunderland, Sunderland SR1 1RS, UK.</p>

<p><b>Natty Network Inc, Branch in Newcastle Upon Tyne</b>: 15 University street, University of Newcastle upon Tyne. NE1 2RE.</p>

</div>
	</div>
	<div class = "mid_unresolved_issues_details_left">
	<p><b>Darlington Branch:</b> 14 falcon Road, Darlinghton, Tees University Street, TS6 1RS, Darlington.</p>

<p><b>Natty Network Inc, Security Limited trading</b> as Natty Network Inc securitalcare is registered in England</p>
<p>Company Registration Number: 123456789.</p>
<p><b>Middlesbrough Branch: </b>145 Middlesbrough, High Street, MD12 7AE, Middlesbrough </p>
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