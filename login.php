

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



				<div class = "content">


						<h1>Employer Login</h1>
	
					<form action="login.php" method="post">
					
						<div class="data"


							<p><fieldset>
							<legend><h1>Employer Login</h1></legend>


							<form action= "<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
							
							<p><label for="name">Username:</label> 
							<input type="text" id="name" /><br /></p>
							
							<p><label for="password">Password</label> 
							<input name="password" type="password" id="password" /><br /></p>
						
							
						<div class="buttons">
												
							
							
							<p class="submit"><input type="submit" value="Log-In" /><br /></p>
						</div>
					</div>
							</fieldset>
					</form></p>
							
				</div>
	
	
	
	<div class = "footer">
		
		<div class = "navlist">
		<a href="Copyright.php">Copyright</a>
		<a href="Legal & Regulatory.php">Legal & Regulatory</a>
		<span class="border"><a href="Company details.php" id="current">Company details</a>
		<a href="Terms & Condition.php">Terms & Condition</a>
		<a href="Unresolved Issues.php">Unresolved Issues</a>
		<a href="Privacy Statement.php">Privacy Statement</a>
		</div>
	</div>
</body>
</html>