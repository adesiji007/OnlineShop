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
		<div class="insert_products">
			<div class="insert_products1">
				<h> INSERT A NEW PRODUCTS TO THE DATABASE<h>

				
				<form action="insert-products.php" method="post">
				<p>name: <input type="text" name="name"></p>
				<p>desc: <input type="text" name="desc"></p>
				<p>manu: <input type="text" name="manu"></p>
				<p>cpu: <input type="text" name="cpu"></p>
				<p>hd: <input type="text" name="hd"></p>
				<p>os: <input type="text" name="os"></p>
				<p>ram: <input type="text" name="ram"></p>
				<p>price: <input type="text" name="price"></p>
				<p>VC: <input type="text" name="vc"></p>
				<p>OD: <input type="text" name="od"></p>
				<p>ds: <input type="text" name="display"></p>
				<p>Wireless: <input type="text" name="wireless"></p>
				<p>PS: <input type="text" name="ps"></p>
				<p>SS: <input type="text" name="ss"></p>
				<p>ADS: <input type="text" name="ads"></p>
				<p>BP: <input type="text" name="bp"></p>
				<p>reg: <input type="text" name="reg"></p>
				<p>img: <input type="text" name="img"></p>
				<p>warranty: <input type="text" name="warranty"></p>
				<p>PSC: <input type="text" name="psc"></p>
				<p>instock: <input type="text" name="instock"></p>
				<input type="submit"
				</form>
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