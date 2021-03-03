<?php

include "database.php";

$id = $_POST['id'];
				
				$name = $_POST['name'];
				
				$manu = $_POST['manu'];
				
				$price =$_POST['price'];
				
				$img = $_POST['img'];
				
				$instock = $_POST['instock'];
				
				
				$query = "reserve products set 
				name = '$name',
				
				manu = '$manu',
				
				price = '$price',
				
				image = '$img';
				
				instock = '$instock'";
				
				
				$check = mysql_query($query, $con);
				if($check){
					$msg = "update successful";
					}
				else{
					$msg = "Error:".msql_error();
					}
				header("location:Reservation.php?msg=$msg");
				exit();
				
				
?>