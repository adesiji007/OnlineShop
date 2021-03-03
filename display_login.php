<?php
			include "database.php";
			//get the data from the form
			$name =$_Post['name'];
			$e_mail =$_Post['e_mail'];
			
?>

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
			<span class="border"><a href="products.php" id="current">products</a>
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
				<div class = "content">
						<h1>employer login</h1>
	
						
							<legend><h1>employer Login</h1></legend>
							<span><?php echo $employer_login; ?><span><br>
														
							<p><label for="name">Name:</label> 
							<span><?php echo $name; ?><span><br>
							
							<p><label for="e-mail">e-mail</label>
							<span><?php echo $e_mail; ?><span><br>
					
						
							
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