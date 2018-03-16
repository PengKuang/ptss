<!-- <-?php include 'ptss_db.php' ?> -->

<?php

if (isset($_POST['submit']))
{
	if (
		//isset($_POST['clientid'])&&
		!empty($_POST['fname']) &&
		!empty($_POST['lname']) &&
		!empty($_POST['dob']) &&
		!empty($_POST['gender']) &&
		!empty($_POST['marriage']) &&
		!empty($_POST['referal']) &&
		!empty($_POST['employment']) &&
		!empty($_POST['education']) &&
		!empty($_POST['d1'])  &&
		!empty($_POST['d2']) 
	) 
	{
		//collect data from the form
		//$client_id=(int)$_POST['clientid'];
		$first_name=$_POST['fname'];
		$last_name=$_POST['lname'];
		$date_of_birth=$_POST['dob'];
		$gender=$_POST['gender'];
		$marriage=$_POST['marriage'];
		$referal=$_POST['referal'];
		$employment=$_POST['employment'];
		$education=$_POST['education'];
		$demo_q1=$_POST['d1'];
		$demo_q2=$_POST['d2'];


		$DBconnect = @mysqli_connect("localhost", "root", "", "ptss_update1")
		//$DBConnect = @mysqli_connect("localhost","schoolsp","!@#123qwe")
		Or die("<p>Unable to connect to the database server!</p>"
		. "<p>Error code " . mysqli_connect_errno()
		. ": " . mysqli_connect_error() . "</p>");

		//execute the query
		mysqli_query($DBconnect, "INSERT INTO report(fname, lname, dob, gender, marriage, referal, employment, education, d1, d2)
		 VALUES('$first_name','$last_name','$date_of_birth', '$gender', '$marriage', '$referal', '$employment', '$education', '$demo_q1', '$demo_q2')");
		 
		if (mysqli_affected_rows($DBconnect) > 0) 
		{
			echo "<p>Report generated</p>";
			echo '<a href="index.php">Go Back</a>';
		} 
		else 
		{
			echo "Report NOT generated<br/>";
			echo mysqli_error ($DBconnect);
		}

	}

	else 
	{
		echo "Please make sure you answered all the questions";
	}

}

else 
{
	echo "Please submit the form";
}

