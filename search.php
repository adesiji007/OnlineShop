





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
			

<?php


if (!empty($_POSt)) {

$con = mysql_connect("bel.sunderland.ac.uk","bg47de","nifemi48DAMMY");
if(!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
		mysql_select_db("bg47de", $con);
		$menu = $_POST['menu'];
		
		// to decide how the query will be processed
		$sql="SELECT * FROM products WHERE menu='$menu' ";
		$sql="SELECT * FROM products WHERE menu like '%$menu%' ";
		$result = mysql_query($sql);
		echo " I found this product:<hr />";
		while($row = mysql_fetch_array($result))
		
		{
			echo $row['menu'];
			echo "<br />";
		}
		mysql_close($con);
		
	}else{
		//it the form has not been submitted, then show the form to the user.
?>
	
			











<div class = "#">

<hi> search Computer by Manufacturers; <h1>
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input name="menu" type="text" id="menu" />
			<input type="submit" value="search" />
			</form>
			
			<?php } ?>



	
	
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