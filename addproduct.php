<?php



include "database.php";

		
	if(isset($_GET['id'])){
				$id = $_GET['id'];
				$type = "Edit";
				$query = "select * from products where id = '$id'";
				$ret = mysql_query($query, $con);
				$row = mysql_fetch_object($ret);
				
				$name = $row ->name;
				$desc = $row ->description;
				$manu = $row ->manu;
				$cpu = $row ->cpu;
				$hd = $row ->hd;
				$os = $row ->operatingSystem;
				$ram = $row ->RAM;
				$price = $row ->price;
				$VC = $row ->VideoCard;
				$OD = $row ->OpticalDrive;
				$ds= $row ->Display;
				$Wireless = $row ->Wireless;
				$PS = $row ->ProductivitySoftware;
				$SS = $row ->SecuritySoftware;
				$ADS = $row ->AccidentalDamageSupport;
				$BP = $row ->BatteryPrimary;
				$reg = $row ->Regulatory;
				$img = $row ->image;
				$warranty = $row ->Warranty;
				$PSC = $row ->PortSlotsChasis;
				$instock = $row -> instock;
				
				
				
				}
			else{
				$id = "";
				$type = "insert";
				$name = "";
				$desc = "";
				$manu = "";
				$cpu = "";
				$hd = "";
				$os = "";
				$ram = "";
				$price = "";
				$VC = "";
				$OD = "";
				$ds= "";
				$Wireless = "";
				$PS = "";
				$SS = "";
				$ADS = "";
				$BP = "";
				$reg = "";
				$img = "";
				$warranty = "";
				$PSC = "";
				$instock = "";
				}
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
			<span class="border"><a href="admin.php" id="current">Admin Home</a>
			<span class="border"><a href="addproduct.php" id="current">Add Product</a>
			<span class="border"><a href="Reservation.php" id="current">Reservations</a>
			<div class = "search"><form action ="search.php" method = "post">
			<input type = "text" name ="search"/><input type = "submit" value = "search"/>
			
			</form></div>
			</div>
			
		</div>
	</div>
		
<div class = "mid_product2">
	<form action = "<?php echo $type.".php"; ?>" method = "post">
	<input type = "hidden" name = "id" value = "<?php echo $id; ?>"/>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">name</div>
		<div class = "addproduct_right"><input type = "text" name = "name" value = "<?php echo $name; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">description</div>
		<div class = "addproduct_right"><textarea name = "desc" id = "addproducttxt" > <?php echo $desc; ?></textarea></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">manufacturer</div>
		<div class = "addproduct_right"><input type = "text" name = "manu" value = "<?php echo $manu; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">cpu</div>
		<div class = "addproduct_right"><input type = "text" name = "cpu" value = "<?php echo $cpu; ?>"/></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">hard drive</div>
		<div class = "addproduct_right"><input type = "text" name = "hd" value = "<?php echo $hd; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">operatingSystem</div>
		<div class = "addproduct_right"><input type = "text" name = "os" value = "<?php echo $os; ?>"/></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">RAM</div>
		<div class = "addproduct_right"><input type = "text" name = "ram"value = "<?php echo $ram; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Video Card</div>
		<div class = "addproduct_right"><input type = "text" name = "vc" value = "<?php echo $VC; ?>"/></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">Optical Drive</div>
		<div class = "addproduct_right"><input type = "text" name = "od" value = "<?php echo $OD; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Display</div>
		<div class = "addproduct_right"><textarea name = "display" id = "addproducttxt" ><?php echo $ds; ?> </textarea></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">Wireless</div>
		<div class = "addproduct_right"><input type = "text" name = "wireless"value = "<?php echo $Wireless; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Productivitity Software</div>
		<div class = "addproduct_right"><textarea name = "ps" id = "addproducttxt" ><?php echo $PS; ?> </textarea></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">price</div>
		<div class = "addproduct_right"><input type = "text" name = "price" value = "<?php echo $price; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Security Software</div>
		<div class = "addproduct_right"><textarea name = "ss" id = "addproducttxt"> <?php echo $SS; ?></textarea></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">Warranty</div>
		<div class = "addproduct_right"><input type = "text" name = "warranty" value = "<?php echo $warranty; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Accidental Damage Support</div>
		<div class = "addproduct_right"><input type = "text" name = "ads"value = "<?php echo $ADS; ?>"/></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">Battery Primary</div>
		<div class = "addproduct_right"><input type = "text" name = "bp" value = "<?php echo $BP; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">Port, Slots & Chasis</div>
		<div class = "addproduct_right"><textarea name = "psc" id = "addproducttxt"> <?php echo $PSC; ?></textarea></div>
	</div>
	<div class = "addproduct_admi1">
		<div class = "addproduct_left">Regulatory</div>
		<div class = "addproduct_right"><textarea name = "reg" id = "addproducttxt"value = "<?php echo $reg; ?>"> </textarea></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">image</div>
		<div class = "addproduct_right"><input type = "text" name = "img" value = "<?php echo $img; ?>"/></div>
	</div>
	
	<div class = "addproduct_admi2">
		<div class = "addproduct_left">instock</div>
		<div class = "addproduct_right"><input type = "text" name = "instock" value = "<?php echo $instock; ?>"/></div>
	</div>
	<div class = "addproduct_admi2">
		<div class = "addproduct_left"></div>
		<div class = "addproduct_right"><input type = "submit" value = "<?php echo $type;?>"/></div>
	</div>
	</form>
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