<?php 

	$DBConnect = @mysqli_connect("localhost", "root", "", "ptss_update1")
	//$DBConnect = @mysqli_connect("localhost","schoolsp","!@#123qwe")
	Or die("<p>Unable to connect to the database server!</p>"
	. "<p>Error code " . mysqli_connect_errno()
	. ": " . mysqli_connect_error() . "</p>");

	$DBName = "ptss_update1";
	
	
	
	// if (!@mysqli_select_db($DBName))
	// {
	// 	echo "<p>The database is not available. Be sure to add a record before attempting to update for a bug information.</p>";
	// }
			
	// if (@mysqli_select_db($DBName))
	// {
	// 	echo "database connected successfully!";
	// }
	
?>