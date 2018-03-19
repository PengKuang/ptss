<?php

	session_start();
	$clientid='';
	
	if(isset($_POST['submit'])){

		$clientid = intval($_POST['clientid']);
		$clientid = mysql_real_escape_string($clientid)

		// include 'ptss_db.php';
		$DBconnect = @mysqli_connect("localhost", "root", "", "ptss_update1")
		//$DBConnect = @mysqli_connect("localhost","schoolsp","!@#123qwe")
		Or die("<p>Unable to connect to the database server!</p>"
		. "<p>Error code " . mysqli_connect_errno()
		. ": " . mysqli_connect_error() . "</p>");

		// $sql = "SELECT * FROM client WHERE clientid='$clientid'";
		// $result=mysqli_query($DBconnect, $sql);

		// while ($result){

		// 	echo 'Client id already existed! Please try another one.';

		// }

		//execute the query
		mysqli_query($DBconnect, "INSERT INTO answer(client_id)
		 VALUES('$clienid')");
		 
		if (mysqli_affected_rows($DBconnect) > 0) 
		{
			echo "<p>Client ID created</p>";
			echo '<a href="demographics.php">Go Back</a>';
		} 
		else 
		{
			echo "Client ID not created<br/>";
			echo mysqli_error ($DBconnect);
		}

		$_SESSION['clientid'] = $clientid;
		// redirect_to("demographics.php");
		header("Location:demographics.php")
		die();
	}