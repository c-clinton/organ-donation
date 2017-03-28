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
		
		//mailUser($fname, $lname, $username, $email, $password);
		
		//disabling this since it doesn't work locally.
		
		$hash = password_hash($password, PASSWORD_DEFAULT);
		$userstring = "INSERT INTO tbl_user VALUES(DEFAULT, '{$fname}', '{$lname}', '{$username}', '{$email}', '{$hash}', '{$level}', '{$ip}', DEFAULT, DEFAULT, 0)"; 
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			
		//echo $password;
		
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

//Ugh, so this is the code that's supposed to purge the user. Ideally, I wanted the createuser function and the delete user function to do one simple thing: create user would insert, delete user would set up an event that deletes the user after 15 minutes if the login number is zero.

//Unfortunately, for reasons I can't explain or look up on google, it will only allow me to either a) insert the user's info into the database, b) create an event to DELETE the user, but not both.

//That, or I'm being absolutely dumb and missing some super important/super obvious piece of information, which is probably more likely. But I'm sorry to say I've run out of fucks to give right now.

		//$delete = "CREATE EVENT {$username} ON SCHEDULE EVERY 15 MINUTE ENABLE DO DELETE FROM tbl_user WHERE user_name = '{$username}' AND user_logins = 0";		
		//mysqli_query($link, $delete);
		

mysqli_close($link);
	
}


function editUser($fname, $lname, $username, $email, $password, $id) {
	
	//standard issue edit user function, as shown in class. Not sure how to handle the encrypted password in the context of this yet...

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