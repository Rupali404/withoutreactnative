<?php
	session_start();

	//initialize variables
	$username = "";
	$email_id = "";
	$password = "";
	$conf_pass = "";
	$first_name = "";
	$middle_name = "";
	$last_name = "";
	$gender = "";
	$date_of_birth = "";
	$country = "";
	$address = "";
	$contact = "";
	$status = "";
	$hobbies = "";
	$skill = "";
	$describe_self ="";
	$about_self ="";
	$you_think = "";
	$receive_news = "";
	$agree = "";

	//connect  to database
	$db = mysqli_connect('localhost', 'root','','regg');

	//check connection
	if($db->connect_error){

		die("connection failed:" .$db);
	}
	else{

		echo "connection successfully";
	}


	//if save button clicked
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email_id = $_POST['email_id'];
		$password = $_POST['password'];
		$conf_pass = $_POST['conf_pass'];
		$first_name = $_POST['first_name'];
		$middle_name = $_POST['middle_name'];
		$last_name = $_POST['last_name'];
		$gender = $_POST['gender'];
		$date_of_birth = $_POST['date_of_birth'];
		$country = $_POST['country'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$status = $_POST['status'];
		$hobbies = $_POST['hobbies'];
		$skill = $_POST['skill'];
		$describe_self = $_POST['describe_self'];
		$about_self = $_POST['about_self'];
		$you_think = $_POST['you_think'];
		$receive_news = $_POST['receive_news'];
		$agree = $_POST['agree'];
	


		$query = "INSERT INTO reg_form(name, email_id, password, conf_pass, first_name, middle_name, last_name, gender, date_of_birth, country, address, contact, status, hobbies, skill, describe_self, about_self, you_think, receive_news, agree) VALUES('$username', '$email_id', '$password', '$conf_pass', '$first_name', '$middle_name', '$last_name', '$gender','$date_of_birth', '$country', '$address', '$contact', '$status', '$hobbies', '$skill', '$describe_self', '$about_self', '$you_think', '$receive_news', '$agree')";

		mysqli_query($db, $query);
		header('Location:index.php'); //redirect to index page after inserting 
	}

?>



