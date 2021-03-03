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
				$warranty =$_POST['warranty'];
				$PSC = $_POST['psc'];
				$SS =$_POST['ss'];
				$ADS =$_POST['ads'];
				$BP =$_POST['bp'];
				$reg =$_POST['reg'];
				$img = $_POST['img'];
				$instock = $_POST['instock'];
				
				
				$query = "update products set 
				name = '$name',
				description = '$desc',
				manu = '$manu',
				cpu = '$cpu',
				hd = '$hd',
				operatingSystem = '$os',
				RAM = '$ram',
				price = '$price',
				VideoCard = '$VC',
				OpticalDrive = '$OD',
				Display = '$ds',
				Wireless = '$Wireless',
				ProductivitySoftware = '$PS',
				SecuritySoftware = '$SS',
				AccidentalDamageSupport = '$ADS',
				BatteryPrimary = '$BP',
				PortSlotsChasis = '$PSC',
				Regulatory = '$reg',
				image = '$img'";
				instock = '$instock'";
				
				
				$check = mysql_query($query, $con);
				if($check){
					$msg = "update successful";
					}
				else{
					$msg = "Error:".msql_error();
					}
				header("location:admin.php?msg=$msg");
				exit();
				
				
?>