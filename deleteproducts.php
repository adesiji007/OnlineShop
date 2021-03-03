<?php
include('database.php);
						
						$id=$_GET["id"];
						if(!is_numeric($id)){ //check if it is a number.
						echo "Sorry, there appears to have been an error.";
						exit;
						}
						$sql = "DELETE from films where id='$id. ";
						echo $sql;
						if (!mysql_query($sql,$con)))
							{
								die('Error: ' . mysql_error());
							}
							echo "<h1> 1 record removed.</h1>";
							
						

						$check = mysql_query($query, $con);
				        if($check){
					    $msg = "insert successful";
					    }
				        else{
					    $msg = "Error:".msql_error();
					    }
				        header("location:admin.php?msg=$msg");
				        exit();
						?>
				
				