<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="registration";
	//Connect to database

	$db=mysqli_connect($servername, $username, $password, $dbname);

	//check connection
	if($db->connect_error){

		die("connection failed:" .$db);
	}
	else{

		echo "connection successfully";
	}
?>