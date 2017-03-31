<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);


	function logIn($username, $enteredpass, $ip) {
		require_once("connect.php");

		$username = mysqli_real_escape_string($link, $username); 
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}'";
		$user_set = mysqli_query($link, $loginString);
		if(mysqli_num_rows($user_set)) { 
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC); 
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_name'];
			$_SESSION['user_lastlogin'] = $found_user['user_lastlogin']; 
		
			$userinfo = "SELECT * FROM tbl_user WHERE user_id={$id}";
			$data = mysqli_query($link, $userinfo);
			
			if(!is_string($data)) { 
    		while ($row = mysqli_fetch_array($data)) {
				
			 $logins = $row['user_logins'];
			 
		
		if(mysqli_query($link, $loginString)) {
		
				$updateString = "UPDATE tbl_user SET user_ip= {$ip} WHERE user_name={$username}";
				$updateQuery = mysqli_query($link, $updateString);
				
				if($logins>=1){
				redirect_to("admin_index.php");
				}
				if($logins<1){
				$updateCount = "UPDATE tbl_user SET user_logins = user_logins+1 WHERE user_name='{$username}'";
				$countQuery = mysqli_query($link, $updateCount);
				redirect_to("admin_edituser.php");
				}
				}else{
			
			$message = "Username/Password were incorrect.<br>Please check your spelling and capitalization.";
			return $message;
		
			redirect_to("admin_login.php");
			} 
	
			}
			}
			
		
		mysqli_close($link);
		
	}
	} 
	
?>