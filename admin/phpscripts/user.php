<?php

function getUser($id) {


require_once('connect.php');

$userstring = "SELECT * FROM tbl_user WHERE user_id = {$id}";
$userquery = mysqli_query($link, $userstring);

if($userquery) {

	$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
	return $found_user;


}else{

$message = "There was a problem changing your account. Please contact web admin for help.";

}
}

function createUser($fname, $lname, $username, $email, $level){
	
		include('connect.php');
		$ip=0;		
		$password = bin2hex(openssl_random_pseudo_bytes(16));
		
		mailUser($fname, $lname, $username, $email, $password);
		

		$userstring = "INSERT INTO tbl_user VALUES(DEFAULT, '{$fname}', '{$lname}', '{$username}', '{$email}', '{$password}', '{$level}', '{$ip}', DEFAULT, DEFAULT, 0)"; 
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
		
		redirect_to("admin_index.php?");	
		deleteUser($username);
		}else{
			
			$message = "There was a problem setting up this user...";
			return $message;
			
		}
			 
	mysqli_close($link);
}

function deleteUser($username) {
	
include('connect.php');		

mysqli_close($link);
	
}


function editUser($fname, $lname, $username, $email, $password, $id) {

	include('connect.php');
	$updatestring = "UPDATE tbl_user SET user_fname='{$fname}', user_lname='{$lname}', user_name='{$username}', user_email='{$email}', user_hash='{$password}' WHERE user_id={$id}";
	$updatequery = mysqli_query($link, $updatestring);

	if($updatequery){

		redirect_to("admin_index.php");


	}else{

		$message = "There was a problem changing your account settings. Please contact your web admin.";
		return $message;

	}

	mysqli_close($link);
}

?>