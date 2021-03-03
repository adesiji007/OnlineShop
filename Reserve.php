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
	

	<div class = "mid_reservation_details">
		<div class = "mid_reservation_details_left">
				<div class = "#">
				
									<h1>Reservation</h1>
									<p>We can only reserve this product for 24 hours only and you can collect it from any of our outlets. Please bear in mind that any reserved products is subject to terms and condition of the Natty Internet Inc</p>
				</div>
					<div class = "mid_reservation_details_left3">
				               <p>Product: <input type="text" name="product"></p>

						<img src = "images/1.jpg" width = "173px" height = "145px"/>
< 
					</div>
		</div>
		<div class = "mid_reservation_details_left">
						
						<div class = "mid_reservation_details_left3">
								<div class = "mid_reservation_details_left1">
									<h1>Browse our sales</h1>
					
						<form>
							<p>Name: <input type="text" name="Name"><p/>
							<p>Manu: <input type="text" name="Manu"><p/>
							<p>Prices: <input type="text" name="Price"><p/>
							
								
										Quantity
										<select>
										<option value="Dell">1</option>
										<option value="Acer">2</option>
										<option value="HP">3</option>
										<option value="Apple">4</option>
										<option value="Asus">5</option>
										<option value="Lenovo">6</option>
										<option value="Sony">7</option>
										<option value="Toshiba">8</option>
										<form name="input" action="html_form_action.asp" method="get">
                         
										<input type="submit" value="Submit">
										</form>
										</select>
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