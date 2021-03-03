<?php
include "database.php";
$id = $_POST['id'];
				
				$name = $_POST['name'];
				$desc = $_POST['desc'];
				$manu = $_POST['manu'];
				$cpu = $_POST['cpu'];
				$hd = $_POST['hd'];
				$os = $_POST['os'];
				$ram =$_POST['ram'];
				$price =$_POST['price'];
				$VC = $_POST['vc'];
				$OD = $_POST['od'];
				$ds= $_POST['display'];
				$Wireless =$_POST['wireless'];
				$PS = $_POST['ps'];
				$SS =$_POST['ss'];
				$ADS =$_POST['ads'];
				$BP =$_POST['bp'];
				$reg =$_POST['reg'];
				$img = $_POST['img'];
				$warranty =$_POST['warranty'];
				$PSC = $_POST['psc'];
				$instock = $_POST['instock'];
				
				$query = "insert into products(name, description, manu, cpu, hd, operatingsystem, RAM, 
				price, VideoCard, OpticalDrive, Display, Wireless, ProductivitySoftware, 
				SecuritySoftware, AccidentalDamageSupport, BatteryPrimary, PortSlotsChasis, Regulatory, image, instock, Warranty) 
				values(
				'$name',
				'$desc',
				'$manu',
				'$cpu',
				'$hd',
				'$os',
				'$ram',
				'$price',
				'$VC',
				'$OD',
				'$ds',
				'$Wireless',
				'$PS',
				'$SS',
				'$ADS',
				'$BP',
				'$PSC',
				'$reg',
				'$img',
				'$instock',
				'$warranty')";
				
				$check = mysql_query($query, $con);
				if($check){
					$msg = "insert successful";
					}
				else{
					$msg = "Error:". mysql_error();
					}
				header("location:admin.php?msg=$msg");
				exit();
				
				
?>