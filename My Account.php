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
	
		
				<div class = "mid_my_account_details">
						<div class = "mid_my_account_details_left1">
								<h1>Existing Customers</h1>
								<p><label for="name">First Name</label><input id="name" name="name"><br></p>
								<p><label for="name">E-mail</label><input id="email" name="email"><br></p>
								<p><label for="email">password</label><input id="password" name="pwd"><br></p>
								<p><input type="submit" name="submit" id="submit" value="submit" class="button" /></p>
								<p><a href="register.php" id="current">Forget password</a></p>
								
						</div>
				
					
						<div class = "mid_my_account_details_left">
							<div class = "mid_my_account_details_left2">
								<h1>New Customers</h1>
								<label for="name">First Name</label><input id="name" name="name"><br>
								<label for="name">Surname Name</label><input id="name" name="name"><br>
								<label for="email">email</label><input id="email" name="email"><br>
								<input type="submit" name="submit" id="submit" value="submit" class="button" />
							</div>
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