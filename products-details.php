<?php
$con = mysql_connect("$host", "$username", "$pass");
if (!con)
	{
	die('Could not connect: ', mysql_error());
	}
	mysql_select_db("bg47de", $con);
	
	//get the ID from the querystring.
	$id=$GET['id']; // get the value from the address bar (querystring)
	if(!is_numeric($id)){ // check it is a number.
	echo 'sorry, there appears to have been an error.";
	exit;
	}
	
	$query=mysql("select * from products where id=$id");
	$row=mysql_fetch_object($query);
	echo mysql_error();
	
	//display the products in html table
	echo "<table>";
	echo"
	<tr bgcolor='#cccccc'><td><b>products</b></td> $row ->products</td></tr>
	<tr bgcolor='#cccccc'><tr><td><b>name</b></td><td> $row ->name </td></tr>
	<tr bgcolor='#cccccc'><td><b>dec</b></td><td> $row ->description</td></tr>
	<tr bgcolor='#cccccc'><td><b>manu</b></td><td> $row ->$row ->manu</td></tr>
	<tr bgcolor='#cccccc'><td><b>cpu</b></td><td> $row ->$row ->cpu</td></tr>
	<tr bgcolor='#cccccc'><td><b>hd</b></td><td> $row ->$row ->hd</td></tr>
	<tr bgcolor='#cccccc'><td><b>os</b></td><td> $row ->$row ->operatingSystem</td></tr>
	<tr bgcolor='#cccccc'><td><b>ram</b></td><td> $row ->$row ->RAM</td></tr>
	<tr bgcolor='#cccccc'><td><b>price</b></td><td> $row -> $row ->price</td></tr>
	<tr bgcolor='#cccccc'><td><b>VC</b></td><td> $row ->$row ->VideoCard</td></tr>
	<tr bgcolor='#cccccc'><td><b>OD</b></td><td> $row ->$row ->OpticalDrive</td></tr>
	<tr bgcolor='#cccccc'><td><b>ds</b></td><td> $row ->$row ->Display</td></tr>
	<tr bgcolor='#cccccc'><td><b>Wireless</b></td><td> $row ->$row ->Wireless</td></tr>
	<tr bgcolor='#cccccc'><td><b>PS</b></td><td> $row ->$row ->ProductivitySoftware</td></tr>
	<tr bgcolor='#cccccc'><td><b>SS</b></td><td> $row ->$row ->SecuritySoftware</td></tr>
	<tr bgcolor='#cccccc'><td><b>ADS</b></td><td> $row ->$row ->AccidentalDamageSupport</td></tr>
	<tr bgcolor='#cccccc'><td><b>BP</b></td><td> $row ->$row ->BatteryPrimary</td></tr>
	<tr bgcolor='#cccccc'><td><b>reg</b></td><td> $row ->$row ->Regulatory</td></tr>
	<tr bgcolor='#cccccc'><td><b>img</b></td><td> $row ->$row ->image</td></tr>
	<tr bgcolor='#cccccc'><td><b>warranty</b></td><td> $row ->$row ->Warranty</td></tr>
	<tr bgcolor='#cccccc'><td><b>PSC</b></td><td> $row ->$row ->PortSlotsChasis</td></tr>
	<tr bgcolor='#cccccc'><td><b>instock</b></td><td> $row ->$row ->instock</td></tr>
	";
	echo "</table>";
	?>
	

	

