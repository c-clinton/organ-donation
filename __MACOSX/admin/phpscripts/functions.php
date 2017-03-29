<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

	function redirect_to($location) {
		if($location != NULL) {
			header("Location:{$location}");
			exit;
		}
	}
	
	function mailUser($fname, $lname, $username, $email, $password) {
		//echo $password;

	include('connect.php');
	
	$url = "www.cjclinton.ca/sites/research_project/admin_login.php";
	
	$admin = "admin@somewebsite.com";
	
	$subject = "Welcome to the site, '{$fname}' '{$lname}'!";
	
	$message = "We're so glad you made it.\n\n Your username is '{$username}', and you temporary password is '{$password}'; you can log in at '{$url}'.\n\n If you do not remember signing up, contact us at '{$admin}'.\n\n Have a nice day.";
	
	mail($email, $subject, $message);


	mysqli_close($link);
}
	
?>