<?php 

	$DBConnect = @mysqli_connect("localhost", "root", "", "ptss_new")
	//$DBConnect = @mysqli_connect("localhost","schoolsp","!@#123qwe")
	Or die("<p>Unable to connect to the database server!</p>"
	. "<p>Error code " . mysqli_connect_errno()
	. ": " . mysqli_connect_error() . "</p>");

	$DBName = "ptss_new";

	if (!@mysqli_select_db($DBName))
	{
		echo "Database connection failed.";
	}
			
	if (@mysqli_select_db($DBName))
	{
		echo "Database connected successfully!";
	}
	
?>