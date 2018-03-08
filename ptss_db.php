<?php 

	$DBConnect = @mysqli_connect("localhost", "root", "")
	//$DBConnect = @mysqli_connect("localhost","schoolsp","!@#123qwe")
	Or die("<p>Unable to connect to the database server!</p>"
	. "<p>Error code " . mysqli_connect_errno()
	. ": " . mysqli_connect_error()) . "</p>";
	$DBName = "ptss_new";
	
	
	
	if (!@mysqli_select_db($DBConnect, $DBName))
			echo "<p>The database is not available. Be sure to add a record before attempting to update for a bug information.</p>";

			
	if (@mysqli_select_db($DBConnect, $DBName)) 
	{
		echo "database connected successfully!";
	}
	
?>