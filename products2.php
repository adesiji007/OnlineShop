<?php
$con = mysql_connect("bel.sunderland.ac.uk", "bg47de", "nifemi48DAMMY");
if (!con)
		{
			die('could not connect: ' . mysql_error());
		}
	mysql_select_db("username", $cn);
	$result = mysql_query("SELECT * FROM products");
	while($row = mysql_fetch_array($result))
	
		{
			echo "<a href=\*products-detais.php?id=";
			echo $row['id'];
			echo "\">";
			echo $row['products';
			echo "</a>";
			echo "<br />";
		>
	}
	mysql_close($con);
	?>