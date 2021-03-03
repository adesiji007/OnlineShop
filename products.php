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
		<div class = "top">
			<div class = "top1_left">
				<div class = "top_left">
						<div class = "top_left1"><?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select * from products order by id asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 2; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<div class = "mid_left">
			<a href = "products.php?condition=<?php echo $pro['manu']; ?>&type=1">
			<div class = "mid_left1"><img src = "images/<?php echo $pro['image']; ?>" width = "173px" height = "145px"/></div>
			<div class = "mid_left2"><?php echo $pro['name']; ?></div>
			</a>
		</div>
		<?php } ?></div>
						<div class = "top_below"></div>
						<div class = "top_left2"><h1><a href="products.php" id="current">GREAT OFFERS!</a><a href="products.php" id="current">COOL PRICE BELOW!!!</a><a href="products.php" id="current">PICK YOUR PRODUCT!!!</a></h1></div>
				</div>
			</div>
			
				<div class = "top_below"></div>
	</div>
	
<div class = "mid_product2">
	<div class ="prod_top">
		<?php 
			if(isset($_GET['condition'])){
				$condition = $_GET['condition'];
				}
			else{
				$condition = "ALL";
				}
		?>
		
		<h1><?php echo $condition; ?>
	</div>
	
	<div class = "prod_left">
		<div class = "prod_cat">
		<h4>Brand</h4>
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select distinct manu from products order by manu asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 10; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<p><a href = "products.php?condition=<?php echo $pro['manu'];  ?>&type=1"><?php echo $pro['manu'];  ?></a></p>
		
		<?php } ?>
		</div>
		
		<div class = "prod_cat">
		<h4>CPU Type</h4>
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select distinct cpu from products order by cpu asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 10; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<p><a href = "products.php?condition=<?php echo $pro['cpu'];  ?>&type=2"><?php echo $pro['cpu'];  ?></a></p>
		
		<?php } ?>
		</div>
		
	</div>
	
	<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
		if(isset($_GET['type'])){
			$type = $_GET['type'];
			}
		else{
			$type = 0;
			}
		if($type == 0){
			$query2 = "select * from products order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			
			}
		else if($type == 1){
			$query2 = "select * from products where manu = '$condition' order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			}
		else if($type == 2){
			$query2 = "select * from products where cpu= '$condition' order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			}
		else if($type == 3){
			$query2 = "select * from products where operatingSystem = '$condition' order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			}
		else if($type == 4){
			$query2 = "select * from products where RAM = '$condition' order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			}
		else if($type == 5){
			$query2 = "select * from products where hd = '$condition' order by name";
			$ret2 = mysql_query($query2, $con);
			$num2 = mysql_num_rows($ret2);
			}
		?>
		
	<div class = "prod_center">
	<?php for($i = 0; $i < $num2; $i++){
			$pro2 = mysql_fetch_array($ret2);
		?>
		<div class ="prod_holder">
			<div class ="prod_image"><img src = "images/<?php echo $pro2['image']; ?>" width = "173px" height = "145px"/></div>
			<div class = "prod_details">
			<h4><?php echo $pro2['name']; ?></h4>
			<strong>Description</strong> <br/>
			<?php echo $pro2['description']; ?><br/>
			<p><a href = "Reserve.php"> ..Reserve</a></p>
			<p><a href = "Reserve.php"> ..Buy now</a></p>
			</div>
			<div class = "prod_price">&pound;<?php echo $pro2['price']; ?></div>
		</div>
	<?php } ?>
	</div>
	
	<div class = "prod_right">
		<div class = "prod_cat">
		<h4>Operating System</h4>
		
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select distinct operatingSystem from products order by operatingSystem asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 10; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<p><a href = "products.php?condition=<?php echo $pro['operatingSystem'];  ?>
		&type=3"><?php echo $pro['operatingSystem'];  ?>
		</a></p>
		
		<?php } ?>
		</div>
		
		<div class = "prod_cat">
		<h4>RAM</h4>
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select distinct RAM from products order by RAM asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 5; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<p><a href = "products.php?condition=<?php echo $pro['RAM'];  ?>&type=4"><?php echo $pro['RAM'];  ?></a></p>
		
		<?php } ?>
		</div>
		
		<div class = "prod_cat">
		<h4>Hard Disk</h4>
		<?php
		include "database.php";
		
		if(!$con){
			echo "error";
			}
			
		$query = "select distinct hd from products order by hd asc";
		$ret = mysql_query($query, $con);
		$num = mysql_num_rows($ret);
		
		
		for($i=0; $i < 10; $i++){
			$pro = mysql_fetch_array($ret);
		?>
		<p><a href = "products.php?condition=<?php echo $pro['hd'];  ?>&type=5"><?php echo $pro['hd'];  ?></a></p>
		
		<?php } ?>
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